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
      <button
        class="extra-header__offer__button" 
        data-order-button 
        data-order-button-title="<?php echo carbon_get_theme_option('crb_fixed_modal_title'); ?>"
        data-order-button-desc="<?php echo carbon_get_theme_option('crb_fixed_modal_desc'); ?>"
        data-order-button-text="<?php echo carbon_get_theme_option('crb_fixed_modal_button'); ?>"
      >
        <?php echo carbon_get_theme_option('crb_fixed_button'); ?>
      </button>
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

    <ul class="header__nav">
      <li id="menu-item-4240" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-4240"><a href="https://rembrigada116.ru/uslugi">Услуги</a>
      <ul class="sub-menu">
      <li id="menu-item-5001" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5001"><a href="https://rembrigada116.ru/uslugi/vidy-remonta">Виды ремонта</a>
      <ul class="sub-menu">
      <li id="menu-item-5006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5006 menu-item-has-children"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/chernovoj-remont-kvartir">Черновой ремонт</a>      <ul class="sub-menu">
      <li id="menu-item-5006" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5006"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/chernovoj-remont-kvartir">Черновой ремонт</a></li>
      <li id="menu-item-5014" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5014"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/kosmeticheskij-remont-kvartiry">Косметический ремонт</a></li>
      <li id="menu-item-5023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5023"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/kapitalnyj-remont-kvartir">Капитальный ремонт</a></li>
      <li id="menu-item-5028" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5028"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/evroremont-kvartir-v-kazani">Евроремонт квартир</a></li>
      <li id="menu-item-5035" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5035"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/dizajnerskij-remont-kvartir">Дизайнерский ремонт</a></li>
      </ul></li>
      <li id="menu-item-5014" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5014"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/kosmeticheskij-remont-kvartiry">Косметический ремонт</a></li>
      <li id="menu-item-5023" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5023"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/kapitalnyj-remont-kvartir">Капитальный ремонт</a></li>
      <li id="menu-item-5028" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5028"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/evroremont-kvartir-v-kazani">Евроремонт квартир</a></li>
      <li id="menu-item-5035" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5035"><a href="https://rembrigada116.ru/uslugi/vidy-remonta/dizajnerskij-remont-kvartir">Дизайнерский ремонт</a></li>
      </ul>
      </li>
      <li id="menu-item-4831" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4831"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch">Ремонт квартир</a>
      <ul class="sub-menu">
      <li id="menu-item-4834" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4834"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch/remont-kvartiry-studii">Ремонт квартиры студии</a></li>
      <li id="menu-item-494" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-494"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch/remont-odnokomnatnoj-kvartiry">1 комнатная квартира</a></li>
      <li id="menu-item-495" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-495"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch/remont-dvukhkomnatnoy-kvartiry">2 комнатная квартира</a></li>
      <li id="menu-item-92" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-92"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch/remont-trekhkomnatnoy-kvartiry">3 комнатная квартира</a></li>
      <li id="menu-item-7939" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7939"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch/remont-chetyrehkomnatnoj-kvartiry">4 комнатная квартира</a></li>
      <li id="menu-item-90" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-90"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch/remont-kvartir-v-novostroyke">Ремонт в новостройке</a></li>
      <li id="menu-item-4848" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4848"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch/remont-vtorichnoj-kvartiry">Ремонт вторичной квартиры</a></li>
      <li id="menu-item-4853" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4853"><a href="https://rembrigada116.ru/uslugi/remont-kvartir-pod-klyuch/remont-kvartiry-v-hrushhevke">Ремонт в хрущевке</a></li>
      <li id="menu-item-11796" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11796"><a href="https://rembrigada116.ru/otdelka-kvartiry-pod-kljuch">Отделка квартир</a></li>
      </ul>
      </li>
      <li id="menu-item-11849" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-11846 current_page_item menu-item-has-children menu-item-11849"><a href="https://rembrigada116.ru/uslugi/remont-domov" aria-current="page">Ремонт домов</a>
      <ul class="sub-menu">
      <li id="menu-item-11887" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11887"><a href="https://rembrigada116.ru/uslugi/remont-domov/chistovoj-remont-doma">Чистовой ремонт дома</a></li>
      <li id="menu-item-3147" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3147"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-kottedzhei">Ремонт коттеджей под ключ</a></li>
      <li id="menu-item-11856" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11856"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-chastnogo-doma">Ремонт частного дома</a></li>
      <li id="menu-item-11878" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11878"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-zagorodnogo-doma">Ремонт загородного дома</a></li>
      <li id="menu-item-11871" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11871"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-taunhausa">Ремонт таунхауса</a></li>
      <li id="menu-item-11872" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11872"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-kirpichnogo-doma">Ремонт кирпичного дома</a></li>
      <li id="menu-item-11877" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11877"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-dachnogo-doma">Ремонт дачного дома</a></li>
      <li id="menu-item-11882" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11882"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-zhilogo-doma">Ремонт жилого дома</a></li>
      <li id="menu-item-11895" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11895"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-v-odnojetazhnom-dome">Ремонт в одноэтажном доме</a></li>
      <li id="menu-item-11896" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11896"><a href="https://rembrigada116.ru/uslugi/remont-domov/remont-dvuhjetazhnogo-doma">Ремонт двухэтажного дома</a></li>
      </ul>
      </li>
      <li id="menu-item-2107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2107"><a href="https://rembrigada116.ru/uslugi/remont-vannoj-komnaty">Ремонт ванной</a></li>
      <li id="menu-item-5697" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5697"><a href="https://rembrigada116.ru/uslugi/polusuhaya-styazhka-pola">Полусухая стяжка</a></li>
      <li id="menu-item-5201" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5201"><a href="https://rembrigada116.ru/uslugi/mehanizirovannaja-shtukaturka-sten">Механизированная штукатурка</a></li>
      <li id="menu-item-5506" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5506"><a href="https://rembrigada116.ru/uslugi/santehnicheskie-raboty">Сантехнические работы</a>
      <ul class="sub-menu">
      <li id="menu-item-5511" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5511"><a href="https://rembrigada116.ru/uslugi/santehnicheskie-raboty/montazh-sistem-vodosnabzheniya">Монтаж систем водоснабжения</a></li>
      <li id="menu-item-5514" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5514"><a href="https://rembrigada116.ru/uslugi/santehnicheskie-raboty/montazh-sistem-otopleniya">Монтаж отопления</a></li>
      <li id="menu-item-5518" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5518"><a href="https://rembrigada116.ru/uslugi/santehnicheskie-raboty/montazh-teplogo-pola">Монтаж теплого пола</a></li>
      <li id="menu-item-5525" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5525"><a href="https://rembrigada116.ru/uslugi/santehnicheskie-raboty/zamena-batarei-otopleniya">Замена батарей отопления</a></li>
      <li id="menu-item-5528" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5528"><a href="https://rembrigada116.ru/uslugi/santehnicheskie-raboty/zamena-trub">Замена труб водоснабжения</a></li>
      </ul>
      </li>
      <li id="menu-item-5540" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-5540"><a href="https://rembrigada116.ru/uslugi/elektromontazhnye-raboty">Электромонтажные работы</a>
      <ul class="sub-menu">
      <li id="menu-item-5567" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5567"><a href="https://rembrigada116.ru/uslugi/elektromontazhnye-raboty/montazh-zamena-elektroprovodki">Монтаж электропроводки</a></li>
      </ul>
      </li>
      </ul>
      </li>
      <li id="menu-item-29" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="">Цены</a></li>
      <li id="menu-item-5313" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="">Примеры работ</a></li>
      <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="">Отзывы</a></li>
      <li id="menu-item-27" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="">Акции</a></li>
      <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page"><a href="">Контакты</a></li>
    </ul>

    <button class="header__calc" data-modal-open="modal-calc">
      <span class="header__calc__icon"></span>
      <span class="header__calc__text">
        калькулятор<br>
        стоимости
      </span>
    </button>

    <a href="tel:<?php echo carbon_get_theme_option('crb_theme_phone'); ?>" class="header__phone" data-call-button>
      <span class="header__phone__number">
        <?php echo carbon_get_theme_option('crb_theme_phone'); ?>
      </span>
      <span class="header__phone__time">
        <?php echo carbon_get_theme_option('crb_theme_working_hours'); ?>
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
