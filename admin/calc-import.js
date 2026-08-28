(function () {
  'use strict';

  function getLogEl(context) {
    if (!context) {
      return null;
    }
    return context.parentNode
      ? context.parentNode.querySelector('.calc-price-xlsx-log')
      : null;
  }

  function log(msg, context, type) {
    var prefix = '[' + new Date().toLocaleTimeString() + '] ';
    var text = prefix + msg;
    // eslint-disable-next-line no-console
    console.log('[calc-import] ' + msg);
    var el = getLogEl(context);
    if (el) {
      var line = document.createElement('div');
      line.textContent = text;
      if (type === 'error') {
        line.style.color = '#c00';
      } else if (type === 'ok') {
        line.style.color = '#080';
      }
      el.appendChild(line);
      el.scrollTop = el.scrollHeight;
    }
  }

  function setReactValue(el, value, context) {
    if (!el) {
      log('setReactValue: input не найден, пропуск значения', context, 'error');
      return;
    }
    try {
      var proto = Object.getPrototypeOf(el);
      var desc = Object.getOwnPropertyDescriptor(proto, 'value');
      if (desc && desc.set) {
        desc.set.call(el, value);
      } else {
        el.value = value;
      }
      el.dispatchEvent(new Event('input', { bubbles: true }));
      if (typeof el.blur === 'function') {
        el.blur();
      }
    } catch (err) {
      log('Ошибка установки значения: ' + err.message, context, 'error');
    }
  }

  function waitFor(selector, root, timeout, context) {
    timeout = timeout || 5000;
    return new Promise(function (resolve, reject) {
      var start = Date.now();
      (function check() {
        var el = root.querySelector(selector);
        if (el) {
          return resolve(el);
        }
        if (Date.now() - start > timeout) {
          log('Таймаут ожидания селектора: ' + selector, context, 'error');
          return reject(new Error('timeout: ' + selector));
        }
        setTimeout(check, 40);
      })();
    });
  }

  function parseXlsx(arrayBuffer, context) {
    log('XLSX: начинаем разбор файла', context);
    var wb = XLSX.read(arrayBuffer, { type: 'array' });
    var sheetName = wb.SheetNames[0];
    log('XLSX: лист «' + sheetName + '»', context);
    var sheet = wb.Sheets[sheetName];
    var rows = XLSX.utils.sheet_to_json(sheet, { header: 1, blankrows: false });
    log('XLSX: всего строк (включая заголовок): ' + rows.length, context);

    if (rows.length && Array.isArray(rows[0])) {
      rows.shift();
    }

    var result = [];
    rows.forEach(function (row) {
      if (!Array.isArray(row)) {
        return;
      }
      var clean = function (v) {
        if (v === null || v === undefined) {
          return '';
        }
        return String(v).trim().replace(/\s/g, '');
      };
      var obj = {
        house_type: String(row[0] == null ? '' : row[0]).trim(),
        rooms: String(row[1] == null ? '' : row[1]).trim(),
        repair_type: String(row[2] == null ? '' : row[2]).trim(),
        repair_price: clean(row[3]),
        materials_price: clean(row[4])
      };
      if (
        !obj.house_type &&
        !obj.rooms &&
        !obj.repair_type &&
        !obj.repair_price &&
        !obj.materials_price
      ) {
        return;
      }
      result.push(obj);
    });
    log('XLSX: строк для импорта после очистки: ' + result.length, context, 'ok');
    return result;
  }

  function clearGroups(complex, context) {
    var MAX = 500;
    return new Promise(function (resolve) {
      var removed = 0;
      (function step() {
        var trash = complex.querySelector('.cf-complex__group .dashicons-trash');
        if (!trash || removed >= MAX) {
          log('Очистили старых групп: ' + removed, context);
          return resolve(removed);
        }
        var btn = trash.closest('.cf-complex__group-action') || trash.parentElement;
        if (btn) {
          btn.click();
          removed++;
        }
        setTimeout(step, 50);
      })();
    });
  }

  function fillMatrix(fileInput, rows, context) {
    var blockRoot =
      fileInput.closest('.editor-block-list__block, .wp-block, [data-block], .cf-container') ||
      document;
    var complex = blockRoot.querySelector('.cf-complex');
    if (!complex) {
      log('Не найдено поле «Таблица цен по сочетаниям» (.cf-complex)', context, 'error');
      return Promise.reject();
    }
    log('Найдено complex-поле', context, 'ok');

    return clearGroups(complex, context).then(function () {
      var addBtn = complex.querySelector('.cf-complex__inserter-button');
      if (!addBtn) {
        log('Не найдена кнопка добавления строк (.cf-complex__inserter-button)', context, 'error');
        return Promise.reject();
      }
      log('Найдена кнопка добавления строк', context, 'ok');

      var chain = Promise.resolve();
      rows.forEach(function (row, i) {
        chain = chain.then(function () {
          log('Строка ' + (i + 1) + ': клик «добавить»', context);
          addBtn.click();
          return waitFor('.cf-complex__group:last-child input[name*="house_type"]', complex, 5000, context)
            .then(function (input) {
              var group = input.closest('.cf-complex__group');
              log('Строка ' + (i + 1) + ': появилась новая группа, заполняем', context);
              var set = function (name, val) {
                var el = group.querySelector('input[name*="' + name + '"]');
                if (!el) {
                  log('  нет input для «' + name + '»', context, 'error');
                }
                setReactValue(el, val, context);
              };
              set('house_type', row.house_type);
              set('rooms', row.rooms);
              set('repair_type', row.repair_type);
              set('repair_price', row.repair_price);
              set('materials_price', row.materials_price);
              return new Promise(function (resolve) {
                setTimeout(resolve, 80);
              });
            });
        });
      });

      return chain.then(function () {
        log('Импорт завершён. Строк: ' + rows.length + '. Сохраните блок/опции.', context, 'ok');
        var note = fileInput.parentNode.querySelector('.calc-price-xlsx-note');
        if (!note) {
          note = document.createElement('p');
          note.className = 'calc-price-xlsx-note';
          fileInput.parentNode.appendChild(note);
        }
        note.textContent = 'Импортировано строк: ' + rows.length + '. Сохраните блок/опции.';
      });
    });
  }

  function handleFile(fileInput, file, context) {
    log('Выбран файл: ' + file.name + ' (' + file.size + ' байт, ' + file.type + ')', context);
    var reader = new FileReader();
    reader.onload = function (e) {
      try {
        var rows = parseXlsx(e.target.result, context);
        if (!rows.length) {
          log('В файле не найдено строк для импорта.', context, 'error');
          return;
        }
        fillMatrix(fileInput, rows, context).catch(function () {});
      } catch (err) {
        log('Не удалось прочитать файл: ' + err.message, context, 'error');
      } finally {
        fileInput.value = '';
        log('Поле выбора файла сброшено (можно выбирать снова).', context);
      }
    };
    reader.onerror = function () {
      log('Ошибка чтения файла', context, 'error');
      fileInput.value = '';
    };
    reader.readAsArrayBuffer(file);
  }

  function init() {
    document.addEventListener('click', function (e) {
      var btn = e.target.closest ? e.target.closest('.calc-price-xlsx-btn') : null;
      if (btn) {
        var wrapper = btn.closest('.cf-container, .editor-block-list__block, .wp-block, [data-block]') || document;
        var input = wrapper.querySelector('.calc-price-xlsx');
        var context = btn;
        log('Нажата кнопка выбора файла', context);
        if (input) {
          input.click();
        } else {
          log('Скрытый input .calc-price-xlsx не найден рядом с кнопкой', context, 'error');
        }
      }
    });

    document.addEventListener('change', function (e) {
      var target = e.target;
      if (target && target.classList && target.classList.contains('calc-price-xlsx')) {
        var filenameEl = target.parentNode
          ? target.parentNode.querySelector('.calc-price-xlsx-filename')
          : null;
        if (filenameEl) {
          filenameEl.textContent = target.files && target.files[0] ? target.files[0].name : '';
        }
        if (target.files && target.files[0]) {
          handleFile(target, target.files[0], target);
        }
      }
    });
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
