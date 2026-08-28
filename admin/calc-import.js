(function () {
  'use strict';

  function setReactValue(el, value) {
    if (!el) {
      return;
    }
    var proto = Object.getPrototypeOf(el);
    var desc = Object.getOwnPropertyDescriptor(proto, 'value');
    if (desc && desc.set) {
      desc.set.call(el, value);
    } else {
      el.value = value;
    }
    el.dispatchEvent(new Event('input', { bubbles: true }));
    el.dispatchEvent(new Event('change', { bubbles: true }));
  }

  function waitFor(selector, root, timeout) {
    timeout = timeout || 2000;
    return new Promise(function (resolve, reject) {
      var start = Date.now();
      (function check() {
        var el = root.querySelector(selector);
        if (el) {
          return resolve(el);
        }
        if (Date.now() - start > timeout) {
          return reject(new Error('timeout'));
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
      rows.shift(); // убираем строку заголовков
    }

    var result = [];
    rows.forEach(function (row) {
      if (!Array.isArray(row)) {
        return;
      }
      var isEmpty = row.every(function (cell) {
        return cell === '' || cell === null || cell === undefined;
      });
      if (isEmpty) {
        return;
      }
      var clean = function (v) {
        if (v === null || v === undefined) {
          return '';
        }
        return String(v).trim().replace(/\s/g, '');
      };
      result.push({
        house_type: String(row[0] == null ? '' : row[0]).trim(),
        rooms: String(row[1] == null ? '' : row[1]).trim(),
        repair_type: String(row[2] == null ? '' : row[2]).trim(),
        repair_price: clean(row[3]),
        materials_price: clean(row[4])
      });
    });
    return result;
  }

  function clearGroups(complex) {
    var guard = 0;
    var trash = complex.querySelector('.cf-complex__group .dashicons-trash');
    while (trash && guard < 200) {
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
      alert('Не найдено поле «Таблица цен по сочетаниям»');
      return Promise.reject();
    }

    clearGroups(complex);

    var addBtn = complex.querySelector('.cf-complex__inserter-button');
    if (!addBtn) {
      alert('Не найдена кнопка добавления строк');
      return Promise.reject();
    }

    var chain = Promise.resolve();
    rows.forEach(function (row) {
      chain = chain.then(function () {
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
      var note = fileInput.parentNode.querySelector('.calc-price-xlsx-note');
      if (!note) {
        note = document.createElement('p');
        note.className = 'calc-price-xlsx-note';
        fileInput.parentNode.appendChild(note);
      }
      note.textContent = 'Импортировано строк: ' + rows.length + '. Не забудьте сохранить блок.';
    });
  }

  function handleFile(fileInput, file) {
    var reader = new FileReader();
    reader.onload = function (e) {
      try {
        var rows = parseXlsx(e.target.result);
        if (!rows.length) {
          alert('В файле не найдено строк для импорта.');
          return;
        }
        fillMatrix(fileInput, rows).catch(function () {});
      } catch (err) {
        alert('Не удалось прочитать файл: ' + err.message);
      }
    };
    reader.readAsArrayBuffer(file);
  }

  function init() {
    document.addEventListener('change', function (e) {
      var target = e.target;
      if (target && target.classList && target.classList.contains('calc-price-xlsx')) {
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
