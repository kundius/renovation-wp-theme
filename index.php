<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-scree">
    <?php get_template_part('partials/header'); ?>

    <div class="hero">
      <div class="container">
        <div class="hero__layout">
          <div class="hero__layout__content">
            <div class="hero__title">Ремонт квартир под ключ в Казани </div>
            <div class="hero__desc">Берем на себя всё: от согласований с&nbsp;управляющей компанией до комплектации мебелью и техникой</div>
            <ul class="hero__list">
              <li>Без предоплаты. Строго по договору</li>
              <li>Оплата по факту выполненных работ</li>
              <li>Гарантия на работы 3 года</li>
              <li>Все мастера - граждане РФ</li>
            </ul>
            <div class="hero__button">
              <button class="cta-button cta-button_primary cta-button_large cta-button_upper">Получить предложение</button>
            </div>
          </div>
          <div class="hero__layout__form">
            <form class="hero-form" data-hero-form>
              <div class="hero-form__title">
                ПОЛУЧИТЕ ТОЧНУЮ СМЕТУ НА&nbsp;ВАШ РЕМОНТ
              </div>
              <div class="hero-form__type">
                <div class="hero-form__type__label">Тип ремонта</div>
                <div class="hero-form__type__items">
                  <label>
                    <input type="radio" name="type" value="КОСМЕТИЧЕСКИЙ" data-hero-form-type-price="1500" checked>
                    <span>КОСМЕТИЧЕСКИЙ</span>
                  </label>
                  <label>
                    <input type="radio" name="type" value="КАПИТАЛЬНЫЙ" data-hero-form-type-price="2500">
                    <span>КАПИТАЛЬНЫЙ</span>
                  </label>
                  <label>
                    <input type="radio" name="type" value="ЧЕРНОВОЙ" data-hero-form-type-price="1000">
                    <span>ЧЕРНОВОЙ</span>
                  </label>
                  <label>
                    <input type="radio" name="type" value="ЭЛИТНЫЙ" data-hero-form-type-price="5000">
                    <span>ЭЛИТНЫЙ</span>
                  </label>
                </div>
              </div>
              <div class="hero-form__area">
                <div class="hero-form__area__label">Площадь помещения (м<sup>2</sup>)</div>
                <div class="hero-form__area__controls">
                  <input type="range" name="area" value="25" min="0" max="300" class="hero-form__area__range">
                  <div class="hero-form__area__display" data-hero-form-area-output></div>
                  <button type="button" class="hero-form__area__plus" data-hero-form-area-plus>+</button>
                  <button type="button" class="hero-form__area__minus" data-hero-form-area-minus>-</button>
                </div>
              </div>
              <div class="hero-form__price">
                <div class="hero-form__price__label">Итого: </div>
                <div class="hero-form__price__value" data-hero-form-price-output></div>
              </div>
              <div class="hero-form__phone">
                <label class="hero-form__phone__label" for="herophone">Ваш номер телефона</label>
                <input class="hero-form__phone__input" type="text" id="herophone" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
              </div>
              <div class="hero-form__rules">
                Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
              </div>
              <div class="hero-form__submit">
                <button class="cta-button">Отправить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <img src="<?php bloginfo('template_url'); ?>/src/images/bg-intro.jpg" alt="" class="hero__bg">
    </div>

    <div class="flex-grow h-[2000px]">
    </div>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
