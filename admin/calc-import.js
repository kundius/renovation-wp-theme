(function () {
  'use strict';

  function getEl(context, sel) {
    return context.parentNode ? context.parentNode.querySelector(sel) : null;
  }

  function log(msg, context, type) {
    var text = '[' + new Date().toLocaleTimeString() + '] ' + msg;
    // eslint-disable-next-line no-console
    console.log('[calc-import] ' + msg);
    var el = getEl(context, '.calc-price-xlsx-log');
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

  function handleFile(fileInput, file) {
    var context = fileInput;
    log('Выбран файл: ' + file.name + ' (' + file.size + ' байт)', context);

    var nonceEl = getEl(fileInput, '.calc-price-xlsx-nonce');
    var nonce = nonceEl ? nonceEl.value : '';

    var fd = new FormData();
    fd.append('action', 'calc_import_price');
    fd.append('nonce', nonce);
    fd.append('file', file);

    log('Отправляем файл на сервер…', context);

    fetch(calcImport.url, { method: 'POST', body: fd, credentials: 'same-origin' })
      .then(function (r) {
        return r.json();
      })
      .then(function (res) {
        if (res && res.success) {
          log('Файл загружен. Найдено строк: ' + res.data.count + '. Сохраните опции темы, чтобы применить импорт.', context, 'ok');
        } else {
          var err = (res && res.data && res.data.error) ? res.data.error : 'неизвестная ошибка';
          log('Ошибка: ' + err, context, 'error');
        }
      })
      .catch(function (err) {
        log('Ошибка запроса: ' + err.message, context, 'error');
      });
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
