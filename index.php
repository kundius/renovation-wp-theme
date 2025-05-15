<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-scree">
    <?php get_template_part('partials/header'); ?>

    <div class="hero" hidden>
      <div class="container">
        <div class="hero__layout">
          <div class="hero__layout-content">
            <div class="hero__title">Ремонт квартир под ключ в Казани </div>
            <div class="hero__desc">Берем на себя всё: от согласований с&nbsp;управляющей компанией до комплектации мебелью и техникой</div>
            <ul class="hero__list">
              <li>Без предоплаты. Строго по договору</li>
              <li>Оплата по факту выполненных работ</li>
              <li>Гарантия на работы 3 года</li>
              <li>Все мастера - граждане РФ</li>
            </ul>
            <div class="hero__button">
              <button class="primary-button primary-button_alt primary-button_large primary-button_upper">Получить предложение</button>
            </div>
          </div>
          <div class="hero__layout-form">
            <form class="hero-form" data-hero-form>
              <div class="hero-form__title">
                ПОЛУЧИТЕ ТОЧНУЮ СМЕТУ НА&nbsp;ВАШ РЕМОНТ
              </div>
              <div class="hero-form__type">
                <div class="hero-form__type-label">Тип ремонта</div>
                <div class="hero-form__type-controls">
                  <label class="radio-button">
                    <input type="radio" name="type" value="КОСМЕТИЧЕСКИЙ" data-hero-form-type-price="1500" checked>
                    <span>КОСМЕТИЧЕСКИЙ</span>
                  </label>
                  <label class="radio-button">
                    <input type="radio" name="type" value="КАПИТАЛЬНЫЙ" data-hero-form-type-price="2500">
                    <span>КАПИТАЛЬНЫЙ</span>
                  </label>
                  <label class="radio-button">
                    <input type="radio" name="type" value="ЧЕРНОВОЙ" data-hero-form-type-price="1000">
                    <span>ЧЕРНОВОЙ</span>
                  </label>
                  <label class="radio-button">
                    <input type="radio" name="type" value="ЭЛИТНЫЙ" data-hero-form-type-price="5000">
                    <span>ЭЛИТНЫЙ</span>
                  </label>
                </div>
              </div>
              <div class="hero-form__area">
                <div class="hero-form__area-label">Площадь помещения (м<sup>2</sup>)</div>
                <div class="hero-form__area-controls">
                  <div class="range-field" data-range-field>
                    <input type="range" name="area" value="25" min="0" max="300" class="range-field__input" data-range-field-input>
                    <div class="range-field__display" data-range-field-display="# м<sup>2</sup>"></div>
                    <button type="button" class="range-field__plus" data-range-field-plus>+</button>
                    <button type="button" class="range-field__minus" data-range-field-minus>-</button>
                  </div>
                </div>
              </div>
              <div class="hero-form__price">
                <div class="hero-form__price-label">Итого: </div>
                <div class="hero-form__price-value" data-hero-form-price-output></div>
              </div>
              <div class="hero-form__phone">
                <label class="phone-field">
                  <span class="phone-field__label">Ваш номер телефона</span>
                  <input class="phone-field__input" type="text" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
                </label>
              </div>
              <div class="hero-form__rules">
                Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
              </div>
              <div class="hero-form__submit">
                <button class="primary-button">Отправить</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <img src="<?php bloginfo('template_url'); ?>/src/images/bg-intro.jpg" alt="" class="hero__bg">
    </div>

    <div class="about" hidden>
      <div class="container">
        <div class="about__layout">
          <div class="about__layout-content">
            <div class="about__headline">
              <div class="about__headline-primary">
                Ремонт-под-ключ
              </div>
              <div class="about__headline-secondary">
                — надежный ремонт квартир в Казани
              </div>
            </div>
            <div class="about__cotent">
              <p>Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков.</p>
              <p>
                Наши специалисты выполняют:<br>
                <strong>- Черновой и чистовой ремонт</strong> (выравнивание стен, монтаж электрики, сантехники, укладка полов).<br>
                <strong>- Отделочные работы</strong> (поклейка обоев, покраска, укладка плитки).<br>
                <strong>- Дизайн-проектирование</strong> с учетом ваших пожеланий.<br>
                <strong>- Авторский надзор</strong> для контроля качества.
              </p>
              <p>Мы работаем с проверенными материалами и предоставляем гарантию. Оставьте заявку на сайте или по телефону — и получите идеальный ремонт без лишних хлопот!</p>
            </div>
          </div>
          <div class="about__layout-services">
            <div class="about__services">
              <div class="about-service">
                <div class="about-service__icon" style="--image-url: url(<?php bloginfo(
                  'template_url'
                ); ?>/src/images/service-1.svg)">
                </div>
                <a href="#" class="about-service__title">
                  Бесплатная консультация
                </a>
              </div>
              <div class="about-service">
                <div class="about-service__icon" style="--image-url: url(<?php bloginfo(
                  'template_url'
                ); ?>/src/images/service-2.png)">
                </div>
                <a href="#" class="about-service__title">
                  Бесплатная консультация
                </a>
              </div>
              <div class="about-service">
                <div class="about-service__icon" style="--image-url: url(<?php bloginfo(
                  'template_url'
                ); ?>/src/images/service-3.svg)">
                </div>
                <div class="about-service__title">
                  Бесплатная консультация
                </div>
              </div>
              <div class="about-service">
                <div class="about-service__icon" style="--image-url: url(<?php bloginfo(
                  'template_url'
                ); ?>/src/images/service-4.svg)">
                </div>
                <a href="#" class="about-service__title">
                  Бесплатная консультация
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="quiz-section" hidden>
      <div class="container">

        <form class="quiz" data-quiz>
          <div class="quiz__title">
            Узнайте стоимость Вашего ремонта за 1 минуту <span>+ подарок!</span>
          </div>

          <div class="quiz-progress" data-quiz-progress>
            <div class="quiz-progress__number">
              1
            </div>
            <div class="quiz-progress__number">
              2
            </div>
            <div class="quiz-progress__number">
              3
            </div>
            <div class="quiz-progress__number">
              4
            </div>
            <div class="quiz-progress__number">
              5
            </div>
            <div class="quiz-progress__number">
              6
            </div>
            <div class="quiz-progress__number">
              7
            </div>
            <div class="quiz-progress__final">
              <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-gift.svg" alt="">
            </div>
          </div>

          <div class="quiz__panes" data-quiz-panes>

            <div class="quiz__pane">
              <div class="quiz-step">
                <div class="quiz-step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-1.jpg" alt="">
                </div>
                <div class="quiz-step__form">
                  <div class="quiz-form">
                    <div class="quiz-form__title">
                      <div class="quiz-form__title__number">1.</div>
                      <span class="uppercase">Укажите тип<br>Вашего дома<span>
                    </div>
                    <div class="quiz-form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Укажите тип Вашего дома" value="Новостройка" checked>
                        <span>Новостройка</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите тип Вашего дома" value="Вторичное жилье">
                        <span>Вторичное жилье</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите тип Вашего дома" value="Дом или коттедж">
                        <span>Дом или коттедж</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите тип Вашего дома" value="Введите площадь">
                        <span>Другое</span>
                      </label>
                    </div>
                    <div class="quiz-form__actions">
                      <button type="button" class="quiz-form__action quiz-form__action_prev" data-quiz-prev>Назад</button>
                      <button type="button" class="quiz-form__action quiz-form__action_next" data-quiz-next>Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz-step__bonus">
                  <div class="quiz-bonus">
                    <div class="quiz-bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz-bonus__items">
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz-step">
                <div class="quiz-step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-2.jpg" alt="">
                </div>
                <div class="quiz-step__form">
                  <div class="quiz-form">
                    <div class="quiz-form__title">
                    <div class="quiz-form__title__number">2.</div>
                      <span class="uppercase">Укажите общую площадь помещения<span>
                    </div>
                    <div class="quiz-form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Укажите общую площадь помещения" value="До 30 м2" checked>
                        <span>До 30 м<sup>2</sup></span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите общую площадь помещения" value="От 30 до 60 м2">
                        <span>От 30 до 60 м<sup>2</sup></span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите общую площадь помещения" value="Более 60 м2">
                        <span>Более 60 м<sup>2</sup></span>
                      </label>
                      <label class="radio-field">
                        <!-- input:"Введите площадь" м<sup>2</sup> -->
                        <input type="radio" name="Укажите общую площадь помещения" value="# м2">
                        <span>
                          <input type="text" value="" placeholder="Введите площадь">
                          м<sup>2</sup>
                        </span>
                      </label>
                    </div>
                    <div class="quiz-form__actions">
                      <button type="button" class="quiz-form__action quiz-form__action_prev" data-quiz-prev>Назад</button>
                      <button type="button" class="quiz-form__action quiz-form__action_next" data-quiz-next>Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz-step__bonus">
                  <div class="quiz-bonus">
                    <div class="quiz-bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz-bonus__items">
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz-step">
                <div class="quiz-step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-3.jpg" alt="">
                </div>
                <div class="quiz-step__form">
                  <div class="quiz-form">
                    <div class="quiz-form__title">
                    <div class="quiz-form__title__number">3.</div>
                      <span class="uppercase">Какой вид ремонта требуется?<span>
                    </div>
                    <div class="quiz-form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Какой вид ремонта требуется?" value="Черновой ремонт" checked>
                        <span>Черновой ремонт</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой вид ремонта требуется?" value="Косметический ремонт">
                        <span>Косметический ремонт</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой вид ремонта требуется?" value="Капитальный  ремонт">
                        <span>Капитальный  ремонт</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой вид ремонта требуется?" value="Элитный  ремонт">
                        <span>Элитный  ремонт</span>
                      </label>
                    </div>
                    <div class="quiz-form__actions">
                      <button type="button" class="quiz-form__action quiz-form__action_prev" data-quiz-prev>Назад</button>
                      <button type="button" class="quiz-form__action quiz-form__action_next" data-quiz-next>Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz-step__bonus">
                  <div class="quiz-bonus">
                    <div class="quiz-bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz-bonus__items">
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz-step">
                <div class="quiz-step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-4.jpg" alt="">
                </div>
                <div class="quiz-step__form">
                  <div class="quiz-form">
                    <div class="quiz-form__title">
                    <div class="quiz-form__title__number">4.</div>
                      <span class="uppercase">У вас уже есть дизайн - проект?<span>
                    </div>
                    <div class="quiz-form__fields">
                      <label class="radio-field">
                        <input type="radio" name="У вас уже есть дизайн - проект?" value="Да" checked>
                        <span>Да</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="У вас уже есть дизайн - проект?" value="Нет">
                        <span>Нет</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="У вас уже есть дизайн - проект?" value="Планирую заказать">
                        <span>Планирую заказать</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="У вас уже есть дизайн - проект?" value="В разработке">
                        <span>В разработке</span>
                      </label>
                    </div>
                    <div class="quiz-form__actions">
                      <button type="button" class="quiz-form__action quiz-form__action_prev" data-quiz-prev>Назад</button>
                      <button type="button" class="quiz-form__action quiz-form__action_next" data-quiz-next>Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz-step__bonus">
                  <div class="quiz-bonus">
                    <div class="quiz-bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz-bonus__items">
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz-step">
                <div class="quiz-step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-5.jpg" alt="">
                </div>
                <div class="quiz-step__form">
                  <div class="quiz-form">
                    <div class="quiz-form__title">
                    <div class="quiz-form__title__number">5.</div>
                      <span class="uppercase">Когда вы планируете начать ремонт<span>
                    </div>
                    <div class="quiz-form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Когда вы планируете начать ремонт" value="В течение 3х-дней" checked>
                        <span>В течение 3х-дней</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Когда вы планируете начать ремонт" value="В течение месяца">
                        <span>В течение месяца</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Когда вы планируете начать ремонт" value="В течение полугода">
                        <span>В течение полугода</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Когда вы планируете начать ремонт" value="Более длительный срок">
                        <span>Более длительный срок</span>
                      </label>
                    </div>
                    <div class="quiz-form__actions">
                      <button type="button" class="quiz-form__action quiz-form__action_prev" data-quiz-prev>Назад</button>
                      <button type="button" class="quiz-form__action quiz-form__action_next" data-quiz-next>Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz-step__bonus">
                  <div class="quiz-bonus">
                    <div class="quiz-bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz-bonus__items">
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz-step">
                <div class="quiz-step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-6.jpg" alt="">
                </div>
                <div class="quiz-step__form">
                  <div class="quiz-form">
                    <div class="quiz-form__title">
                    <div class="quiz-form__title__number">6.</div>
                      <span class="uppercase">Какой бы вам хотелось получить подарок после ремонта<span>
                    </div>
                    <div class="quiz-form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Какой бы вам хотелось получить подарок после ремонта" value="Каталог дизайн-проектов" checked>
                        <span>Каталог дизайн-проектов</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой бы вам хотелось получить подарок после ремонта" value="Фотосессия после ремонта">
                        <span>Фотосессия после ремонта</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой бы вам хотелось получить подарок после ремонта" value="Мне не нужен подарок">
                        <span>Мне не нужен подарок</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой бы вам хотелось получить подарок после ремонта" value="Другое">
                        <span>Другое</span>
                      </label>
                    </div>
                    <div class="quiz-form__actions">
                      <button type="button" class="quiz-form__action quiz-form__action_prev" data-quiz-prev>Назад</button>
                      <button type="button" class="quiz-form__action quiz-form__action_next" data-quiz-next>Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz-step__bonus">
                  <div class="quiz-bonus">
                    <div class="quiz-bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz-bonus__items">
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz-bonus__item">
                        <div class="quiz-bonus__item-icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz-bonus__item-title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz-ending">
                <div class="quiz-ending__hedline">
                  <div class="quiz-ending__title">
                    Мы уже приступили к расчету!
                  </div>
                  <div class="quiz-ending__desc">
                    За Вами закреплена скидка. Куда отправлять результат?
                  </div>
                </div>
                <div class="quiz-ending__fields">
                  <label class="radio-field">
                    <input type="radio" name="Мы уже приступили к расчету!" value="Перезвоните мне, у меня остались вопросы" checked>
                    <span>Перезвоните мне, у меня остались вопросы</span>
                  </label>
                  <label class="radio-field">
                    <input type="radio" name="Мы уже приступили к расчету!" value="Пришлите мне все в Whatsapp">
                    <span>Пришлите мне все в Whatsapp</span>
                  </label>
                  <label class="radio-field">
                    <input type="radio" name="Мы уже приступили к расчету!" value="Пришлите мне все в Telegram ">
                    <span>Пришлите мне все в Telegram </span>
                  </label>
                </div>
                <div class="quiz-ending__form">
                  <div class="quiz-phone">
                    <label class="quiz-phone__label" for="quizphone">Ваш номер телефона</label>
                    <input class="quiz-phone__input" type="text" id="quizphone" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
                  </div>
                  <div class="quiz__submit">
                    <button type="submit" class="primary-button primary-button_alt">
                      <span class="text-lg leading-none">
                        Отправить расчет<br>
                        и получить подарок
                      </span>
                      <span class="icon icon-gift w-9 h-9 ml-1 -mr-1"></span>
                    </button>
                  </div>
                </div>
                <div class="quiz-ending__rules">
                  Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
                </div>
                <div class="quiz-ending__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-7.jpg" alt="">
                </div>
              </div>
            </div>

          </div>

          <div class="quiz__success">
            <div class="quiz__success__title">
              Сообщение отправлено!
            </div>
            <div class="quiz__success__desc">
              Тут нужно что-то написать
            </div>
            <button type="button" class="quiz__success__close" data-quiz-reset>Закрыть</button>
          </div>
        </form>

      </div>
    </div>

    <div class="portfolio" hidden>
      <div class="container-lg">

        <div class="portfolio__headline">
          <div class="portfolio__title">
            В прошлом году выполнили 18 ремонтов
          </div>
          <div class="portfolio__desc">
            С клиентами - от начала до новоселья
          </div>
        </div>

        <div class="portfolio__items">
          <div class="portfolio-embla" data-portfolio-embla>
            <div class="portfolio-embla__viewport" data-portfolio-embla-viewport>
              <div class="portfolio-embla__container">
                <div class="portfolio-embla__slide">
                  <div class="portfolio-item">
                    <div class="portfolio-item__gallery">
                      <div class="portfolio-gallery" data-portfolio-gallery>
                        <div class="portfolio-gallery__main">
                          <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                        </div>
                        <div class="portfolio-gallery__carousel">
                          <div class="portfolio-gallery__carousel-viewport" data-portfolio-gallery-viewport>
                            <div class="portfolio-gallery__carousel-container">
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                            </div>
                          </div>
                          <button class="portfolio-gallery__nav portfolio-gallery__nav--prev" type="button" data-portfolio-gallery-prev></button>
                          <button class="portfolio-gallery__nav portfolio-gallery__nav--next" type="button" data-portfolio-gallery-next></button>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item__title">
                      <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg">
                        Дизайнерский ремонт в 1-комнатной квартире
                      </a>
                    </div>
                    <div class="flex items-start justify-between mt-4 gap-2">
                      <div class="flex flex-wrap gap-1 items-start">
                        <div class="portfolio-item__detail">
                          Сроки ремонта : 25 дней
                        </div>
                        <div class="portfolio-item__detail">
                          Площадь: 68 м2
                        </div>
                      </div>
                      <div class="portfolio-item__price">
                        <div class="portfolio-item__price-label">Цена: </div>
                        <div class="portfolio-item__price-value">112 500 ₽</div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="button" class="control-button">
                        Рассчитать похожий
                      </button>
                    </div>
                  </div>
                </div>
                <div class="portfolio-embla__slide">
                  <div class="portfolio-item">
                    <div class="portfolio-item__gallery">
                      <div class="portfolio-gallery" data-portfolio-gallery>
                        <div class="portfolio-gallery__main">
                          <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                        </div>
                        <div class="portfolio-gallery__carousel">
                          <div class="portfolio-gallery__carousel-viewport" data-portfolio-gallery-viewport>
                            <div class="portfolio-gallery__carousel-container">
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                            </div>
                          </div>
                          <button class="portfolio-gallery__nav portfolio-gallery__nav--prev" type="button" data-portfolio-gallery-prev></button>
                          <button class="portfolio-gallery__nav portfolio-gallery__nav--next" type="button" data-portfolio-gallery-next></button>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item__title">
                      <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg">
                        Дизайнерский ремонт в 1-комнатной квартире
                      </a>
                    </div>
                    <div class="flex items-start justify-between mt-4 gap-2">
                      <div class="flex flex-wrap gap-1 items-start">
                        <div class="portfolio-item__detail">
                          Сроки ремонта : 25 дней
                        </div>
                        <div class="portfolio-item__detail">
                          Площадь: 68 м2
                        </div>
                      </div>
                      <div class="portfolio-item__price">
                        <div class="portfolio-item__price-label">Цена: </div>
                        <div class="portfolio-item__price-value">112 500 ₽</div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="button" class="control-button">Рассчитать похожий</button>
                    </div>
                  </div>
                </div>
                <div class="portfolio-embla__slide">
                  <div class="portfolio-item">
                    <div class="portfolio-item__gallery">
                      <div class="portfolio-gallery" data-portfolio-gallery>
                        <div class="portfolio-gallery__main">
                          <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                        </div>
                        <div class="portfolio-gallery__carousel">
                          <div class="portfolio-gallery__carousel-viewport" data-portfolio-gallery-viewport>
                            <div class="portfolio-gallery__carousel-container">
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                            </div>
                          </div>
                          <button class="portfolio-gallery__nav portfolio-gallery__nav--prev" type="button" data-portfolio-gallery-prev></button>
                          <button class="portfolio-gallery__nav portfolio-gallery__nav--next" type="button" data-portfolio-gallery-next></button>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item__title">
                      <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg">
                        Дизайнерский ремонт в 1-комнатной квартире
                      </a>
                    </div>
                    <div class="flex items-start justify-between mt-4 gap-2">
                      <div class="flex flex-wrap gap-1 items-start">
                        <div class="portfolio-item__detail">
                          Сроки ремонта : 25 дней
                        </div>
                        <div class="portfolio-item__detail">
                          Площадь: 68 м2
                        </div>
                      </div>
                      <div class="portfolio-item__price">
                        <div class="portfolio-item__price-label">Цена: </div>
                        <div class="portfolio-item__price-value">112 500 ₽</div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="button" class="control-button">Рассчитать похожий</button>
                    </div>
                  </div>
                </div>
                <div class="portfolio-embla__slide">
                  <div class="portfolio-item">
                    <div class="portfolio-item__gallery">
                      <div class="portfolio-gallery" data-portfolio-gallery>
                        <div class="portfolio-gallery__main">
                          <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                        </div>
                        <div class="portfolio-gallery__carousel">
                          <div class="portfolio-gallery__carousel-viewport" data-portfolio-gallery-viewport>
                            <div class="portfolio-gallery__carousel-container">
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                              <div class="portfolio-gallery__carousel-slide">
                                <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg"><img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt=""></a>
                              </div>
                            </div>
                          </div>
                          <button class="portfolio-gallery__nav portfolio-gallery__nav--prev" type="button" data-portfolio-gallery-prev></button>
                          <button class="portfolio-gallery__nav portfolio-gallery__nav--next" type="button" data-portfolio-gallery-next></button>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-item__title">
                      <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg">
                        Дизайнерский ремонт в 1-комнатной квартире
                      </a>
                    </div>
                    <div class="flex items-start justify-between mt-4 gap-2">
                      <div class="flex flex-wrap gap-1 items-start">
                        <div class="portfolio-item__detail">
                          Сроки ремонта : 25 дней
                        </div>
                        <div class="portfolio-item__detail">
                          Площадь: 68 м2
                        </div>
                      </div>
                      <div class="portfolio-item__price">
                        <div class="portfolio-item__price-label">Цена: </div>
                        <div class="portfolio-item__price-value">112 500 ₽</div>
                      </div>
                    </div>
                    <div class="mt-3">
                      <button type="button" class="control-button">Рассчитать похожий</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <button class="portfolio-embla__nav portfolio-embla__nav--prev" type="button" data-portfolio-embla-prev></button>
            <button class="portfolio-embla__nav portfolio-embla__nav--next" type="button" data-portfolio-embla-next></button>
          </div>
        </div>

      </div>
    </div>

    <div class="comparison-section" hidden>
      <div class="container-lg">
        <div class="comparison-section__title">
          От голых стен до готового ремонта<br>
          за ХХ дней
        </div>
        <div class="comparison-carousel" data-comparison-carousel>
          <div class="comparison-carousel__viewport" data-comparison-carousel-viewport>
            <div class="comparison-carousel__container">
              <div class="comparison-carousel__slide">
                <div class="comparison" style="--progress: 30%" data-comparison>
                  <div class="comparison__before">
                    <div class="comparison__before-label">до</div>
                    <img src="<?php bloginfo(
                      'template_url'
                    ); ?>/src/images/comparison.jpg" alt="" style="filter: grayscale(80%)">
                  </div>
                  <div class="comparison__after">
                    <div class="comparison__after-label">после</div>
                    <img src="<?php bloginfo('template_url'); ?>/src/images/comparison.jpg" alt="">
                  </div>
                  <input class="comparison__range" type="range" name="progress" value="300" min="0" max="1000">
                  <div class="comparison__handle"></div>
                  <div class="comparison__line"></div>
                </div>
              </div>
              <div class="comparison-carousel__slide">
                <div class="comparison" style="--progress: 30%" data-comparison>
                  <div class="comparison__before">
                    <div class="comparison__before-label">до</div>
                    <img src="<?php bloginfo(
                      'template_url'
                    ); ?>/src/images/comparison.jpg" alt="" style="filter: grayscale(80%)">
                  </div>
                  <div class="comparison__after">
                    <div class="comparison__after-label">после</div>
                    <img src="<?php bloginfo('template_url'); ?>/src/images/comparison.jpg" alt="">
                  </div>
                  <input class="comparison__range" type="range" name="progress" value="300" min="0" max="1000">
                  <div class="comparison__handle"></div>
                  <div class="comparison__line"></div>
                </div>
              </div>
            </div>
          </div>
          <button class="comparison-carousel__nav comparison-carousel__nav--prev" type="button" data-comparison-carousel-prev></button>
          <button class="comparison-carousel__nav comparison-carousel__nav--next" type="button" data-comparison-carousel-next></button>
        </div>
      </div>
    </div>

    <div class="prices-section" hidden>
      <div class="container">
        <div class="prices-section__headline">
          <div class="prices-section__title">
            Цены ремонта квартир<br>
            в Казани
          </div>
          <div class="prices-section__desc">
            Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков
          </div>
        </div>
        <div class="prices-section__grid">
          <div class="prices-card">
            <div class="prices-card__sheet">Бонус - предложение</div>
            <div class="prices-card__title">Косметический ремонт</div>
            <div class="prices-card__desc">Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков</div>
            <div class="prices-card__list">
              <div class="prices-card__list-inner">
                <ul>
                  <li>Вид работ 1</li>
                  <li>Вид выполняемых работ 2</li>
                  <li>Вид выполняемых работ 3</li>
                  <li>Вид выполняемых работ 4</li>
                  <li>Вид выполняемых работ 5</li>
                  <li>Вид выполняемых работ 6</li>
                  <li>Вид работ 1</li>
                  <li>Вид выполняемых работ 2</li>
                  <li>Вид выполняемых работ 3</li>
                  <li>Вид выполняемых работ 4</li>
                  <li>Вид выполняемых работ 5</li>
                  <li>Вид выполняемых работ 6</li>
                </ul>
              </div>
            </div>
            <div class="prices-card__time">От 20 дней</div>
            <div class="prices-card__price">от 4 500 ₽/м2</div>
            <div class="prices-card__order">
              <button type="button" class="secondary-button secondary-button_alt">Заказать</button>
            </div>
          </div>
          <div class="prices-card">
            <div class="prices-card__sheet">Бонус - предложение</div>
            <div class="prices-card__title">Капитальный ремонт</div>
            <div class="prices-card__desc">Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков</div>
            <div class="prices-card__list">
              <div class="prices-card__list-inner">
                <ul>
                <li>Вид работ 1</li>
                <li>Вид выполняемых работ 2</li>
                <li>Вид выполняемых работ 3</li>
                <li>Вид выполняемых работ 4</li>
                <li>Вид выполняемых работ 5</li>
                <li>Вид выполняемых работ 6</li>
                </ul>
              </div>
            </div>
            <div class="prices-card__time">От 20 дней</div>
            <div class="prices-card__price">от 4 500 ₽/м2</div>
            <div class="prices-card__order">
              <button type="button" class="secondary-button secondary-button_alt">Заказать</button>
            </div>
          </div>
          <div class="prices-card">
            <div class="prices-card__sheet">Бонус - предложение</div>
            <div class="prices-card__title">Дизайнерский ремонт</div>
            <div class="prices-card__desc">Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков</div>
            <div class="prices-card__list">
              <div class="prices-card__list-inner">
                <ul>
                <li>Вид работ 1</li>
                <li>Вид выполняемых работ 2</li>
                <li>Вид выполняемых работ 3</li>
                <li>Вид выполняемых работ 4</li>
                <li>Вид выполняемых работ 5</li>
                <li>Вид выполняемых работ 6</li>
                </ul>
              </div>
            </div>
            <div class="prices-card__time">От 20 дней</div>
            <div class="prices-card__price">от 4 500 ₽/м2</div>
            <div class="prices-card__order">
              <button type="button" class="secondary-button secondary-button_alt">Заказать</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="terms-section" hidden>
      <div class="container">
        <div class="terms-section__title">
          Средние сроки выполнения ремонта квартир
        </div>
        <div class="terms-section__grid">
          <div class="terms-card">
            <div class="terms-card__title">
              Объект
            </div>
            <div class="terms-card__list">
              <div class="terms-card__head">
                <div>Студия <span>18 - 32 м<sup>2</sup></span></div>
              </div>
              <div class="terms-card__head">
                <div>1 - комнатная квартира</div>
              </div>
              <div class="terms-card__head">
                <div>2 - комнатная квартира</div>
              </div>
              <div class="terms-card__head">
                <div>3 - комнатная квартира</div>
              </div>
              <div class="terms-card__head">
                <div>4 - комнатная квартира <span>80 - 120 м<sup>2</sup></span></div>
              </div>
              <div class="terms-card__head">
                <div>Частный дом <span>120 - 200 м<sup>2</sup></span></div>
              </div>
              <div class="terms-card__head">
                <div>Коттедж <span>140 - 350 м<sup>2</sup></span></div>
              </div>
            </div>
          </div>
          <div class="terms-card">
            <div class="terms-card__title terms-card__title--colored">
              Косметический
            </div>
            <div class="terms-card__list">
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
            </div>
          </div>
          <div class="terms-card">
            <div class="terms-card__title terms-card__title--colored">
              Капитальный
            </div>
            <div class="terms-card__list">
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
            </div>
          </div>
          <div class="terms-card">
            <div class="terms-card__title terms-card__title--colored">
              Дизайнерский
            </div>
            <div class="terms-card__list">
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
              <div class="terms-card__data">
                <div>15- 30 дней</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="calc-section calc-section--has-title" hidden>
      <div class="container">
        <div class="calc-section__title">
          Калькулятор стоимости ремонта с точностью до <span>96%</span>
        </div>

        <form class="calc" data-calc>
          <div class="calc__left">
            <div class="calc__field">
              <div class="calc__field-label">
                1. Тип Вашего дома
              </div>
              <div class="calc__field-house-type">
                <label class="radio-field">
                  <input type="radio" name="house-type" data-calc-repair-price="500" data-calc-materials-price="220" value="Новостройка" checked>
                  <span>Новостройка</span>
                </label>
                <label class="radio-field">
                  <input type="radio" name="house-type" data-calc-repair-price="700" data-calc-materials-price="300" value="Вторичное жилье">
                  <span>Вторичное жилье</span>
                </label>
                <label class="radio-field">
                  <input type="radio" name="house-type" data-calc-repair-price="1000" data-calc-materials-price="400" value="Старый фонд">
                  <span>Старый фонд</span>
                </label>
              </div>
            </div>

            <div class="calc__field">
              <div class="calc__field-label">
                2. Количество комнат
              </div>
              <div class="calc__field-room-count">
                <label class="radio-field">
                  <input type="radio" name="room-count" data-calc-repair-price="150%" data-calc-materials-price="150%" value="Студия" checked>
                  <span>Студия</span>
                </label>
                <label class="radio-field">
                  <input type="radio" name="room-count" data-calc-repair-price="100%" data-calc-materials-price="100%" value="1">
                  <span>1</span>
                </label>
                <label class="radio-field">
                  <input type="radio" name="room-count" data-calc-repair-price="190%" data-calc-materials-price="190%" value="2">
                  <span>2</span>
                </label>
                <label class="radio-field">
                  <input type="radio" name="room-count" data-calc-repair-price="270%" data-calc-materials-price="270%" value="3">
                  <span>3</span>
                </label>
                <label class="radio-field">
                  <input type="radio" name="room-count" data-calc-repair-price="340%" data-calc-materials-price="340%" value="4">
                  <span>4</span>
                </label>
                <label class="radio-field">
                  <input type="radio" name="room-count" data-calc-repair-price="400%" data-calc-materials-price="400%" value="5">
                  <span>5</span>
                </label>
              </div>
            </div>

            <div class="calc__field">
              <div class="calc__field-label">
                3. Тип ремонта
              </div>
              <div class="calc__field-repair-type">
                <label class="radio-button">
                  <input type="radio" name="repair-type" value="КОСМЕТИЧЕСКИЙ" data-calc-repair-price="500" data-calc-materials-price="220" name="Тип ремонта" checked>
                  <span>КОСМЕТИЧЕСКИЙ</span>
                </label>
                <label class="radio-button">
                  <input type="radio" name="repair-type" value="КАПИТАЛЬНЫЙ" data-calc-repair-price="1000" data-calc-materials-price="700" name="Тип ремонта">
                  <span>КАПИТАЛЬНЫЙ</span>
                </label>
                <label class="radio-button">
                  <input type="radio" name="repair-type" value="ЧЕРНОВОЙ" data-calc-repair-price="400" data-calc-materials-price="200" name="Тип ремонта">
                  <span>ЧЕРНОВОЙ</span>
                </label>
                <label class="radio-button">
                  <input type="radio" name="repair-type" value="ПО ДИЗАЙН-ПРОЕКТУ" data-calc-repair-price="1200" data-calc-materials-price="800" name="Тип ремонта">
                  <span>ПО ДИЗАЙН-ПРОЕКТУ</span>
                </label>
              </div>
            </div>

            <div class="calc__field">
              <div class="calc__field-label">
                4. Загрузите план квартиры или дома для получения точной сметы ремонта <span>(в формате .doc, .docx, .xlsx, .pdf, .jpeg, .png)</span>
              </div>
              <div class="calc__field-attachments">
                <div class="attachments-field" data-attachments-field data-attachments-field-count="1">
                  <div class="attachments-field__row" data-attachments-field-row>
                    <label class="attachment-field" data-attachment-field>
                      <input type="file" name="file" class="attachment-field__input" data-attachment-field-input />
                      <span class="attachment-field__label control-button">
                        <span data-attachment-field-label>Выберите файл</span>
                        <span class="icon icon-pin"></span>
                      </span>
                    </label>

                    <button type="button" class="more-button attachments-field__remove" data-attachments-field-remove>
                      <span class="more-button__text">Убрать</span>
                      <span class="more-button__icon">
                        <span class="icon icon-minus"></span>
                      </span>
                    </button>

                    <button type="button" class="more-button attachments-field__add" data-attachments-field-add>
                      <span class="more-button__text">Добавить ещё</span>
                      <span class="more-button__icon">
                        <span class="icon icon-plus"></span>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>

            <div class="calc__field calc__field--area">
              <div class="calc__field-label">
                Площадь помещения (м<sup>2</sup>)
              </div>
              <div class="calc__field-area">
                <div class="range-field" data-range-field>
                  <input type="range" name="area" value="25" min="0" max="300" class="range-field__input" data-range-field-input>
                  <div class="range-field__display" data-range-field-display="# м<sup>2</sup>"></div>
                  <button type="button" class="range-field__plus" data-range-field-plus>+</button>
                  <button type="button" class="range-field__minus" data-range-field-minus>-</button>
                </div>
              </div>
            </div>
          </div>

          <div class="calc__right">
            <div class="calc__repair">
              <div class="calc__repair-title">
                Примерная стоимость ремонта
              </div>
              <div class="calc__repair-desc">
                без учета материалов:
              </div>
              <div class="calc__repair-price" data-calc-repair-cost></div>
            </div>
            <div class="calc__materials">
              <div class="calc__materials-title">
                Стоимость <span class="inline-block">черновых материалов</span>
              </div>
              <div class="calc__materials-price" data-calc-materials-cost></div>
            </div>
            <div class="calc__line"></div>
            <div class="calc__message">
              Мы уже приступили к точному расчету, напишите ваш телефон и получите смету
              в течении 3 часов!
            </div>
            <div class="calc__phone">
              <label class="phone-field">
                <span class="phone-field__label">Ваш номер телефона</span>
                <input class="phone-field__input" type="text" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
              </label>
            </div>
            <div class="calc__rules">
              Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
            </div>
            <div class="calc__submit">
              <button class="primary-button primary-button_alt">Отправить</button>
            </div>
          </div>

          <div class="calc-success">
            <div class="calc-success__title">
              Сообщение отправлено!
            </div>
            <div class="calc-success__desc">
              Тут нужно что-то написать
            </div>
            <button type="button" class="calc-success__close" data-calc-reset>Закрыть</button>
          </div>
        </form>
      </div>
    </div>

    <div class="actions-section" hidden>
      <div class="container-lg">
        <div class="actions-section__title">
          Акции и скидки от нашей компании
        </div>

        <div class="actions-carousel" data-actions-carousel>
          <div class="actions-carousel__wrap">
            <div class="actions-carousel__viewport" data-actions-carousel-viewport>
              <div class="actions-carousel__container">
                <div class="actions-carousel__slide">
                  <div class="actions-item">
                    <img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" class="actions-item__image" width="" height="" />
                    <div class="actions-item__content">
                      <div class="actions-item__title">
                        Косметический ремонт - акция1
                      </div>
                      <div class="actions-item__desc">
                        Краткое описание акции
                      </div>
                      <div class="actions-item__more">
                        <a href="" class="more-button">
                          <span class="more-button__text">Узнать больше</span>
                          <span class="more-button__icon">
                            <span class="icon icon-arrow-right"></span>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="actions-carousel__slide">
                  <div class="actions-item">
                    <img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" class="actions-item__image" width="" height="" />
                    <div class="actions-item__content">
                      <div class="actions-item__title">
                        Косметический ремонт - акция1
                      </div>
                      <div class="actions-item__desc">
                        Краткое описание акции
                      </div>
                      <div class="actions-item__more">
                        <a href="" class="more-button">
                          <span class="more-button__text">Узнать больше</span>
                          <span class="more-button__icon">
                            <span class="icon icon-arrow-right"></span>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="actions-carousel__slide">
                  <div class="actions-item">
                    <img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" class="actions-item__image" width="" height="" />
                    <div class="actions-item__content">
                      <div class="actions-item__title">
                        Косметический ремонт - акция1
                      </div>
                      <div class="actions-item__desc">
                        Краткое описание акции
                      </div>
                      <div class="actions-item__more">
                        <a href="" class="more-button">
                          <span class="more-button__text">Узнать больше</span>
                          <span class="more-button__icon">
                            <span class="icon icon-arrow-right"></span>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="actions-carousel__slide">
                  <div class="actions-item">
                    <img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" class="actions-item__image" width="" height="" />
                    <div class="actions-item__content">
                      <div class="actions-item__title">
                        Косметический ремонт - акция1
                      </div>
                      <div class="actions-item__desc">
                        Краткое описание акции
                      </div>
                      <div class="actions-item__more">
                        <a href="" class="more-button">
                          <span class="more-button__text">Узнать больше</span>
                          <span class="more-button__icon">
                            <span class="icon icon-arrow-right"></span>
                          </span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <button class="actions-carousel__nav actions-carousel__nav--prev" type="button" data-actions-carousel-prev></button>
            <button class="actions-carousel__nav actions-carousel__nav--next" type="button" data-actions-carousel-next></button>
          </div>
          <div class="actions-carousel__dots" data-actions-carousel-dots></div>
        </div>
      </div>
    </div>

    <div class="reviews-section" hidden>
      <div class="container">
        <div class="reviews-section__title">
          Видеоотзывы о выполненных проектах
        </div>
        <div class="reviews-section__grid">
          <div class="reviews-item">
            <div class="reviews-item__title">
              Дизайнерский ремонт в 1-комнатной квартире
            </div>
            <a href="#video-1" class="reviews-item__preview">
              <img class="reviews-item__image" src="https://rembrigada116.ru/wp-content/uploads/2019/06/DSC01865.jpeg" />
              <span class="reviews-item__play"></span>
            </a>
            <div class="hidden">
              <iframe src="https://rutube.ru/play/embed/348b982ea960ac5b6617870116bd781e/" id="video-1" width="1920px" height="1080px" frameborder="0" allow="fullscreen" allowfullscreen=""></iframe>
            </div>
          </div>
          <div class="reviews-item">
            <div class="reviews-item__title">
              Дизайнерский ремонт в 1-комнатной квартире
            </div>
            <a href="#video-2" class="reviews-item__preview">
              <img class="reviews-item__image" src="https://rembrigada116.ru/wp-content/uploads/2019/06/DSC01865.jpeg" />
              <span class="reviews-item__play"></span>
            </a>
            <div class="hidden">
              <iframe src="https://rutube.ru/play/embed/348b982ea960ac5b6617870116bd781e/" id="video-2" width="1920px" height="1080px" frameborder="0" allow="fullscreen" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
        <div class="reviews-section__more">
          <a href="#" class="control-button">
            <span>Показать ещё</span>
            <span class="icon icon-chevron-right"></span>
          </a>
        </div>
      </div>
    </div>

    <div class="reasons-section" hidden>
      <div class="container">
        <div class="reasons-section__headline">
          <div class="reasons-section__title">
            Почему <span>Вам понравится</span> работать с нами
          </div>
          <div class="reasons-section__desc">
            Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков
          </div>
        </div>
        <div class="reasons-section__grid">
          <div class="reasons-item">
            <div class="reasons-item__headline">
              <div class="reasons-item__title">
                Официальный
                договор
              </div>
              <div class="reasons-item__image">
                <img src="<?php bloginfo('template_url'); ?>/src/images/reasons-1.svg" />
              </div>
            </div>
            <div class="reasons-item__desc">
              Перед началом ремонта подписываем договор на все работы, где учтены сроки ремонта, сумма платежей и гарантийные обязательства
            </div>
          </div>
          <div class="reasons-item">
            <div class="reasons-item__headline">
              <div class="reasons-item__title">
                Строго по плану и в срок
              </div>
              <div class="reasons-item__image">
                <img src="<?php bloginfo('template_url'); ?>/src/images/reasons-2.svg" />
              </div>
            </div>
            <div class="reasons-item__desc">
              Мы осуществляем отделочные работы в квартирах и домах четко в срок не нарушая технологического процесса
            </div>
          </div>
          <div class="reasons-item">
            <div class="reasons-item__headline">
              <div class="reasons-item__title">
                Гарантия качества
              </div>
              <div class="reasons-item__image">
                <img src="<?php bloginfo('template_url'); ?>/src/images/reasons-3.svg" />
              </div>
            </div>
            <div class="reasons-item__desc">
              Мы даем гарантию 5 лет на электромонтаж, сантехнику и 2 года
              на общестроительные и ремонтные работы
            </div>
          </div>
          <div class="reasons-item">
            <div class="reasons-item__headline">
              <div class="reasons-item__title">
                Фиксированные цены
              </div>
              <div class="reasons-item__image">
                <img src="<?php bloginfo('template_url'); ?>/src/images/reasons-4.svg" />
              </div>
            </div>
            <div class="reasons-item__desc">
              Мы не меняем стоимость ремонта, она фиксирована в смете и договоре. Исключение составляют изменения
              по желанию клиента
            </div>
          </div>
          <div class="reasons-item">
            <div class="reasons-item__headline">
              <div class="reasons-item__title">
                Доставка материалов
              </div>
              <div class="reasons-item__image">
                <img src="<?php bloginfo('template_url'); ?>/src/images/reasons-5.svg" />
              </div>
            </div>
            <div class="reasons-item__desc">
              Мы осуществляем отделочные работы в квартирах и домах четко в срок не нарушая технологического процесса
            </div>
          </div>
          <div class="reasons-item">
            <div class="reasons-item__headline">
              <div class="reasons-item__title">
                Качественный ремонт
              </div>
              <div class="reasons-item__image">
                <img src="<?php bloginfo('template_url'); ?>/src/images/reasons-6.svg" />
              </div>
            </div>
            <div class="reasons-item__desc">
              Мы работаем, соблюдая требования к проведению отделки, используем современное и профессиональное оборудование
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="measurement-section" hidden>
      <div class="container">
        <div class="measurement-section__title">
          <div class="measurement-section__title-inner">
            Бесплатно приедем, замерим, рассчитаем
          </div>
        </div>
        <div class="measurement-section__order">
          <button type="button" class="primary-button primary-button_alt primary-button_large">Получить замер</button>
        </div>
      </div>
    </div>

    <div class="problems-section" hidden>
      <div class="container">
        <div class="problems-section__title">
          Возьмем на себя <span>все проблемы</span>
        </div>
        <div class="problems-section__grid">
          <div class="problems-item">
            <div class="problems-item__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/problems-1.svg" />
            </div>
            <div class="problems-item__title">
              Защищаем
              мебель
            </div>
            <div class="problems-item__desc">
              Если нужно переносим мебель и укрываем пленкой
            </div>
          </div>
          <div class="problems-item">
            <div class="problems-item__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/problems-2.svg" />
            </div>
            <div class="problems-item__title">
              Решаем вопросы с управляющей компанией
            </div>
            <div class="problems-item__desc">
              Согласуем отключение
              воды и газа
            </div>
          </div>
          <div class="problems-item">
            <div class="problems-item__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/problems-3.svg" />
            </div>
            <div class="problems-item__title">
              Закупаем и привозим
              стройматериалы
            </div>
            <div class="problems-item__desc">
              предварительно
              согласовывая с Вами
            </div>
          </div>
          <div class="problems-item">
            <div class="problems-item__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/problems-4.svg" />
            </div>
            <div class="problems-item__title">
              Убираем и вывозим
              мусор
            </div>
            <div class="problems-item__desc">
              Заказываем контейнер и утилизируем на свалку
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="experts-section">
      <div class="container">
        <div class="experts-section__title">
          Наши мастера в процессе работы
        </div>
        <div class="experts-section__grid">
          <div class="experts-item">
            <div class="experts-item__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/experts-1.png" alt="">
            </div>
            <div class="experts-item__name">Имя</div>
            <div class="experts-item__job">Мастер-плиточник</div>
            <div class="experts-item__experience">Стаж: 6 лет</div>
          </div>
          <div class="experts-item">
            <div class="experts-item__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/experts-2.png" alt="">
            </div>
            <div class="experts-item__name">Имя</div>
            <div class="experts-item__job">Мастер-плиточник</div>
            <div class="experts-item__experience">Стаж: 8 лет</div>
          </div>
          <div class="experts-item">
            <div class="experts-item__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/experts-3.png" alt="">
            </div>
            <div class="experts-item__name">Имя</div>
            <div class="experts-item__job">Мастер-плиточник</div>
            <div class="experts-item__experience">Стаж: 6 лет</div>
          </div>
        </div>
      </div>
    </div>

    <div class="flex-grow h-[2000px]">
    </div>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
