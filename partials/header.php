<div class="extra-header">
  <div class="container container--larger extra-header__container">
    <div class="extra-header__city">
      <div class="city-select" data-city-select role="combobox" aria-expanded="false" aria-haspopup="true" aria-label="Выбор города">
        <button class="city-select__trigger" data-city-select-trigger>
          <span><?php echo carbon_get_theme_option('crb_header_city'); ?></span>
        </button>
        <div class="city-select__list" role="listbox" data-city-select-listbox>
          <?php foreach (carbon_get_theme_option('crb_header_cities') as $city): ?>
          <a href="<?php echo $city['url'] ?>" role="option" tabindex="-1"><?php echo $city['name'] ?></a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>

    <div class="extra-header__offer">
      <div class="extra-header__offer__message">
        <?php echo carbon_get_theme_option('crb_fixed_message'); ?>
      </div>
      <a class="extra-header__offer__button" href="/partnership">
        <?php echo carbon_get_theme_option('crb_fixed_button'); ?>
      </a>
    </div>
  </div>
</div>

<div class="h-4 max-md:hidden"></div>
<div class="header" data-sticky-header data-mobile-menu-state="closed">
  <div class="container container--larger header__container">
    <a href="/" class="header__logo">
      <span class="header__logo__name">
        <?php echo carbon_get_theme_option('crb_theme_site_name'); ?>
      </span>
      <span class="header__logo__desc">
        <?php echo carbon_get_theme_option('crb_theme_slogan'); ?>
      </span>
    </a>

    <?php
    wp_nav_menu([
      'menu' => 'Основное меню',
      'container' => null,
      'menu_class' => 'header__nav',
    ]);
    ?>

    <a href="/calc" class="header__calc">
      <span class="header__calc__icon"></span>
      <span class="header__calc__text">
        калькулятор<br>
        стоимости
      </span>
    </a>

    <a href="tel:<?php echo carbon_get_theme_option('crb_theme_phone'); ?>" class="header__phone" data-call-button>
      <span class="header__phone__number">
        <?php echo carbon_get_theme_option('crb_theme_phone'); ?>
      </span>
      <span class="header__phone__time">
        <?php echo carbon_get_theme_option('crb_theme_working_hours_long'); ?>
      </span>
    </a>

    <a
      href="tel:<?php echo carbon_get_theme_option('crb_theme_phone'); ?>"
      class="header__callback"
      data-call-button
    >
      <span class="header__callback__icon"></span>
      <span class="header__callback__text">
        Заказать<br>
        обратный звонок
      </span>
    </a>

    <button type="button" class="header__toggle" data-drawer-open="nav">
      <span class="icon icon-menu"></span>
    </button>
  </div>
  <div class="header__anchor" data-sticky-header-anchor></div>
  <button type="button" class="scrollup" data-sticky-header-scrollup>
    <span class="icon icon-arrow-up"></span>
  </button>
</div>
<div class="h-4 max-md:hidden"></div>
