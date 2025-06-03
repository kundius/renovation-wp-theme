<div class="footer">
  <div class="container">
    <div class="footer-layout">
      <div class="footer-layout__contacts">
        <div class="footer-contacts">
          <div class="footer-contacts__title">
            Контактная информация
          </div>
          <div class="footer-contacts__text">
            Наш телефон: +7 (800) 123-45-67<br>
            <br>
            Пн - Пт,  9:00 - 18:00,<br>
            перерыв с  13:00 - 14:00
          </div>
          <div class="footer-contacts__call">
            <button type="button" class="control-button">
              <span>Заказать звонок</span>
              <span class="icon icon-phone"></span>
            </button>
          </div>
          <div class="footer-contacts__address">
            <strong>Адрес офиса:</strong><br>
            Казань, ул. Космонавтов, 47А, 33
          </div>
        </div>
      </div>
      <div class="footer-layout__nav">
        <div class="footer-menu">
          <div class="footer-menu__title">
            Ремонт и отделка
          </div>
          <ul class="footer-menu__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
        <div class="footer-menu">
          <div class="footer-menu__title">
            Отдельные услуги
          </div>
          <ul class="footer-menu__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
        <div class="footer-menu">
          <div class="footer-menu__title">
            Инженерные работы
          </div>
          <ul class="footer-menu__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
        <div class="footer-menu">
          <div class="footer-menu__title">
            О компании
          </div>
          <ul class="footer-menu__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="footer-bottom">
  <div class="container footer-bottom__container">
    <div class="footer-bottom__copyright">
      © 2025, Все права защищены.
    </div>
    <div class="footer-bottom__links">
      <a href="#">Политика конфиденциальности</a>
    </div>
    <div class="footer-bottom__info">
      Сайт не является публичной офертой и носит информационный характер
    </div>
  </div>
</div>

<div class="drawer" data-drawer="nav">
  <div class="drawer__body">
    <button class="drawer__close" data-drawer-close>
      закрыть меню
      <span class="icon icon-close"></span>
    </button>
    <div class="drawer__content">
      <div class="drawer__nav" data-drawer-nav></div>

      <div class="drawer__region">
        <div class="drawer-region">
          <div class="drawer-region__label">Ваш регион:</div>
          <div class="drawer-region__select">
            <div class="drawer-region-select" data-city-select role="combobox" aria-expanded="false" aria-haspopup="true" aria-label="Выбор города">
              <button class="drawer-region-select__trigger" data-city-select-trigger>
                <span>Воронеж</span>
              </button>
              <div class="drawer-region-select__list" role="listbox" data-city-select-listbox>
                <a href="#" role="option" tabindex="-1">Москва</a>
                <a href="#" role="option" tabindex="-1">Санкт-Петербург</a>
                <a href="#" role="option" tabindex="-1">Казань</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="drawer__contacts">
        <div class="drawer-social">
          <a href="#" class="drawer-social__telegram">
            <span class="icon icon-telegram"></span>
          </a>
          <a href="#" class="drawer-social__whatsapp">
            <span class="icon icon-whatsapp"></span>
          </a>
        </div>
        
        <a href="" class="drawer-phone">
          <span class="drawer-phone__number">+7 (800) 123-45-67</span>
          <span class="drawer-phone__time">Пн - Пт,  9:00 - 18:00</span>
        </a>
      </div>
    </div>
  </div>
  <div class="drawer__overlay" data-drawer-close></div>
</div>

<?php wp_footer(); ?>
