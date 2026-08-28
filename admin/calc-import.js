(function () {
  'use strict';

  function statusEl(input) {
    return input.parentNode ? input.parentNode.querySelector('.calc-price-xlsx-status') : null;
  }

  function spinnerEl(input) {
    return input.parentNode ? input.parentNode.querySelector('.calc-price-xlsx-spinner') : null;
  }

  function setStatus(input, text, isError) {
    var el = statusEl(input);
    if (el) {
      el.textContent = text || '';
      el.classList.toggle('calc-price-xlsx-status--error', !!isError);
    }
  }

  function setSpinner(input, on) {
    var el = spinnerEl(input);
    if (el) {
      el.classList.toggle('is-active', !!on);
    }
  }

  function setReactValue(el, value) {
    if (!el) {
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
      el.dispatchEvent(new Event('change', { bubbles: true }));
    } catch (err) {
      /* ignore */
    }
  }

  function waitFor(selector, root, timeout) {
    timeout = timeout || 3000;
    return new Promise(function (resolve, reject) {
      var start = Date.now();
      (function check() {
        var el = root.querySelector(selector);
        if (el) {
          return resolve(el);
        }
        if (Date.now() - start > timeout) {
          return reject(new Error('timeout: ' + selector));
        }
        requestAnimationFrame(check);
      })();
    });
  }

  function parseXlsx(arrayBuffer) {
    var wb = XLSX.read(arrayBuffer, { type: 'array' });
    var sheetName = wb.SheetNames[0];
    var sheet = wb.Sheets[sheetName];
    var rows = XLSX.utils.sheet_to_json(sheet, { header: 1, blankrows: false });

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
    return result;
  }

  function clearGroups(complex) {
    var guard = 0;
    var trash = complex.querySelector('.cf-complex__group .dashicons-trash');
    while (trash && guard < 300) {
      var btn = trash.closest('.cf-complex__group-action') || trash.parentElement;
      if (btn) {
        btn.click();
      }
      guard++;
      trash = complex.querySelector('.cf-complex__group .dashicons-trash');
    }
  }

  function fillMatrix(fileInput, rows) {
    var blockRoot =
      fileInput.closest('.editor-block-list__block, .wp-block, [data-block], .cf-container') ||
      document;
    var complex = blockRoot.querySelector('.cf-complex');
    if (!complex) {
      setStatus(fileInput, 'Не найдено поле «Таблица цен по сочетаниям»', true);
      setSpinner(fileInput, false);
      alert('Не найдено поле «Таблица цен по сочетаниям»');
      return Promise.reject();
    }

    clearGroups(complex);

    var addBtn = complex.querySelector('.cf-complex__inserter-button');
    if (!addBtn) {
      setStatus(fileInput, 'Не найдена кнопка добавления строк', true);
      setSpinner(fileInput, false);
      alert('Не найдена кнопка добавления строк');
      return Promise.reject();
    }

    var chain = Promise.resolve();
    rows.forEach(function (row, i) {
      chain = chain.then(function () {
        setStatus(fileInput, 'Добавлено ' + (i + 1) + ' / ' + rows.length);
        addBtn.click();
        return waitFor('.cf-complex__group:last-child input[name*="house_type"]', complex).then(function (input) {
          var group = input.closest('.cf-complex__group');
          var set = function (name, val) {
            var el = group.querySelector('input[name*="' + name + '"]');
            setReactValue(el, val);
          };
          set('house_type', row.house_type);
          set('rooms', row.rooms);
          set('repair_type', row.repair_type);
          set('repair_price', row.repair_price);
          set('materials_price', row.materials_price);
        });
      });
    });

    return chain.then(function () {
      setStatus(fileInput, 'Готово. Импортировано строк: ' + rows.length);
      setSpinner(fileInput, false);
    });
  }

  function handleFile(fileInput, file) {
    setStatus(fileInput, 'Чтение файла…');
    setSpinner(fileInput, true);
    var reader = new FileReader();
    reader.onload = function (e) {
      try {
        var rows = parseXlsx(e.target.result);
        if (!rows.length) {
          setStatus(fileInput, 'В файле не найдено строк для импорта.', true);
          setSpinner(fileInput, false);
          alert('В файле не найдено строк для импорта.');
          return;
        }
        setStatus(fileInput, 'Распознано строк: ' + rows.length);
        fillMatrix(fileInput, rows).catch(function () {
          setSpinner(fileInput, false);
        });
      } catch (err) {
        setStatus(fileInput, 'Не удалось прочитать файл: ' + err.message, true);
        setSpinner(fileInput, false);
        alert('Не удалось прочитать файл: ' + err.message);
      } finally {
        fileInput.value = '';
      }
    };
    reader.onerror = function () {
      setStatus(fileInput, 'Ошибка чтения файла', true);
      setSpinner(fileInput, false);
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
        if (input) {
          input.click();
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
          handleFile(target, target.files[0]);
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
