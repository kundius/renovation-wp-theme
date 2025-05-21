<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-scree">
    <?php get_template_part('partials/header'); ?>

    <section class="hero">
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
              <button class="primary-button primary-button--alt primary-button--large text-lg uppercase">Получить предложение</button>
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
    </section>

    <section class="about">
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
    </section>

    <section class="quiz-section">
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
                    <button type="submit" class="primary-button primary-button--alt">
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
    </section>

    <section class="portfolio">
      <div class="container container--lg">

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
    </section>

    <section class="comparison-section">
      <div class="container container--lg">
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
    </section>

    <section class="services-section">
      <div class="container">
        <div class="services-section__headline">
          <div class="services-section__title">
            Цены ремонта квартир<br>
            в Казани
          </div>
          <div class="services-section__desc">
            Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков
          </div>
        </div>
        <div class="services-section__grid">
          <div class="services-card">
            <div class="services-card__sheet">Бонус - предложение</div>
            <div class="services-card__title">Косметический ремонт</div>
            <div class="services-card__desc">Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков</div>
            <div class="services-card__list">
              <div class="services-card__list-inner">
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
            <div class="services-card__time">От 20 дней</div>
            <div class="services-card__price">от 4 500 ₽/м2</div>
            <div class="services-card__order">
              <button type="button" class="primary-button primary-button--small primary-button--alt w-52">Заказать</button>
            </div>
          </div>
          <div class="services-card">
            <div class="services-card__sheet">Бонус - предложение</div>
            <div class="services-card__title">Капитальный ремонт</div>
            <div class="services-card__desc">Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков</div>
            <div class="services-card__list">
              <div class="services-card__list-inner">
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
            <div class="services-card__time">От 20 дней</div>
            <div class="services-card__price">от 4 500 ₽/м2</div>
            <div class="services-card__order">
              <button type="button" class="primary-button primary-button--small primary-button--alt w-52">Заказать</button>
            </div>
          </div>
          <div class="services-card">
            <div class="services-card__sheet">Бонус - предложение</div>
            <div class="services-card__title">Дизайнерский ремонт</div>
            <div class="services-card__desc">Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков</div>
            <div class="services-card__list">
              <div class="services-card__list-inner">
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
            <div class="services-card__time">От 20 дней</div>
            <div class="services-card__price">от 4 500 ₽/м2</div>
            <div class="services-card__order">
              <button type="button" class="primary-button primary-button--small primary-button--alt w-52">Заказать</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="terms-section">
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
    </section>

    <section class="calc-section calc-section--has-title">
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
              <button class="primary-button primary-button--alt">Отправить</button>
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
    </section>

    <section class="actions-section">
      <div class="container container--lg">
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
    </section>

    <section class="reviews-section">
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
    </section>

    <section class="reasons-section">
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
    </section>

    <section class="measurement-section">
      <div class="container">
        <div class="measurement-section__title">
          <div class="measurement-section__title-inner">
            Бесплатно приедем, замерим, рассчитаем
          </div>
        </div>
        <div class="measurement-section__order">
          <button type="button" class="primary-button primary-button--alt primary-button--large">Получить замер</button>
        </div>
      </div>
    </section>

    <section class="problems-section">
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
    </section>

    <section class="experts-section">
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
    </section>

    <section class="prices-section">
      <div class="container">
        <div class="prices-section__title">
          Цены на отдельные услуги при ремонте
        </div>

        <div class="prices" data-prices>
          <div class="prices-tabs">
            <button class="prices-tabs__item active" data-prices-tab="Демонтажные работы">Демонтажные работы</button>
            <button class="prices-tabs__item" data-prices-tab="Монтажные работы">Монтажные работы</button>
            <button class="prices-tabs__item" data-prices-tab="Выравнивание пола">Выравнивание пола</button>
            <button class="prices-tabs__item" data-prices-tab="Выравнивание стен">Выравнивание стен</button>
            <button class="prices-tabs__item" data-prices-tab="Малярные работы">Малярные работы</button>
            <button class="prices-tabs__item" data-prices-tab="Электромонтажные работы">Электромонтажные работы</button>
            <button class="prices-tabs__item" data-prices-tab="Сантехнические работы">Сантехнические работы</button>
            <button class="prices-tabs__item" data-prices-tab="Плиточные работы">Плиточные работы</button>
            <button class="prices-tabs__item" data-prices-tab="Гипсокартонные работы">Гипсокартонные работы</button>
            <button class="prices-tabs__item" data-prices-tab="Укладка ламината">Укладка ламината</button>
            <button class="prices-tabs__item" data-prices-tab="Установка дверей">Установка дверей</button>
            <button class="prices-tabs__item" data-prices-tab="Шумоизоляция">Шумоизоляция</button>
            <button class="prices-tabs__item" data-prices-tab="Дизайн интерьера">Дизайн интерьера</button>
            <button class="prices-tabs__item" data-prices-tab="Натяжные потолки">Натяжные потолки</button>
          </div>

          <div class="prices-table">
            <div class="prices-table__head">
              <div class="prices-table__head-cell">
                Наименование работ
              </div>
              <div class="prices-table__head-cell">
                Ед. изм
              </div>
              <div class="prices-table__head-cell">
                Цена
              </div>
            </div>

            <div class="prices-table__body">
              <div class="prices-panes">
                <div class="prices-panes__item active" data-prices-pane="Демонтажные работы">
                  <div class="prices-list">
                    <div class="prices-list__title">
                      Наименование вида услуги при ремонте
                    </div>
                    <div class="prices-list__row" data-prices-row>
                      <div class="prices-list__enable">
                        <input class="prices-list__checkbox" type="checkbox" name="enable" value="1" data-prices-row-enable />
                      </div>
                      <div class="prices-list__name" data-prices-row-name>
                        Наименование вида услуги при ремонте 1
                      </div>
                      <div class="prices-list__units" data-prices-row-units>
                        м<sup>2</sup>
                      </div>
                      <div class="prices-list__price" data-prices-row-price="470">
                        470 руб.
                      </div>
                    </div>
                    <div class="prices-list__row" data-prices-row>
                      <div class="prices-list__enable">
                        <input class="prices-list__checkbox" type="checkbox" name="enable" value="1" data-prices-row-enable />
                      </div>
                      <div class="prices-list__name" data-prices-row-name>
                        Наименование вида услуги при ремонте 1
                      </div>
                      <div class="prices-list__units" data-prices-row-units>
                        м<sup>2</sup>
                      </div>
                      <div class="prices-list__price" data-prices-row-price="470">
                        470 руб.
                      </div>
                    </div>
                    <div class="prices-list__title">
                      Наименование вида услуги при ремонте
                    </div>
                    <div class="prices-list__row" data-prices-row>
                      <div class="prices-list__enable">
                        <input class="prices-list__checkbox" type="checkbox" name="enable" value="1" data-prices-row-enable />
                      </div>
                      <div class="prices-list__name" data-prices-row-name>
                        Наименование вида услуги при ремонте 1
                      </div>
                      <div class="prices-list__quantity">
                        <input class="prices-list__quantity-input" type="text" name="quantity" min="1" value="1" data-prices-row-quantity />
                      </div>
                      <div class="prices-list__units" data-prices-row-units>
                        м<sup>2</sup>
                      </div>
                      <div class="prices-list__price" data-prices-row-price="470">
                        470 руб.
                      </div>
                    </div>
                    <div class="prices-list__row" data-prices-row>
                      <div class="prices-list__enable">
                        <input class="prices-list__checkbox" type="checkbox" name="enable" value="1" data-prices-row-enable />
                      </div>
                      <div class="prices-list__name" data-prices-row-name>
                        Наименование вида услуги при ремонте 1
                      </div>
                      <div class="prices-list__quantity">
                        <input class="prices-list__quantity-input" type="text" name="quantity" min="1" value="1" data-prices-row-quantity />
                      </div>
                      <div class="prices-list__units" data-prices-row-units>
                        м<sup>2</sup>
                      </div>
                      <div class="prices-list__price" data-prices-row-price="470">
                        470 руб.
                      </div>
                    </div>
                    <div class="prices-list__row" data-prices-row>
                      <div class="prices-list__enable">
                        <input class="prices-list__checkbox" type="checkbox" name="enable" value="1" data-prices-row-enable />
                      </div>
                      <div class="prices-list__name" data-prices-row-name>
                        Наименование вида услуги при ремонте 1
                      </div>
                      <div class="prices-list__quantity">
                        <input class="prices-list__quantity-input" type="text" name="quantity" min="1" value="1" data-prices-row-quantity />
                      </div>
                      <div class="prices-list__units" data-prices-row-units>
                        м<sup>2</sup>
                      </div>
                      <div class="prices-list__price" data-prices-row-price="470">
                        470 руб.
                      </div>
                    </div>
                    <div class="prices-list__row" data-prices-row>
                      <div class="prices-list__enable">
                        <input class="prices-list__checkbox" type="checkbox" name="enable" value="1" data-prices-row-enable />
                      </div>
                      <div class="prices-list__name" data-prices-row-name>
                        Наименование вида услуги при ремонте 1
                      </div>
                      <div class="prices-list__quantity">
                        <input class="prices-list__quantity-input" type="text" name="quantity" min="1" value="1" data-prices-row-quantity />
                      </div>
                      <div class="prices-list__units" data-prices-row-units>
                        м<sup>2</sup>
                      </div>
                      <div class="prices-list__price" data-prices-row-price="470">
                        470 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="prices-panes__item" data-prices-pane="Монтажные работы">
                  <div class="prices-list">
                    <div class="prices-list__row" data-prices-row>
                      <div class="prices-list__enable">
                        <input class="prices-list__checkbox" type="checkbox" name="enable" value="1" data-prices-row-enable />
                      </div>
                      <div class="prices-list__name" data-prices-row-name>
                        Наименование вида услуги при ремонте 1
                      </div>
                      <div class="prices-list__quantity">
                        <input class="prices-list__quantity-input" type="text" name="quantity" min="1" value="1" data-prices-row-quantity />
                      </div>
                      <div class="prices-list__units" data-prices-row-units>
                        м<sup>2</sup>
                      </div>
                      <div class="prices-list__price" data-prices-row-price="470">
                        470 руб.
                      </div>
                    </div>
                  </div>
                </div>
                <div class="prices-panes__item" data-prices-pane="Выравнивание пола">
                  Выравнивание пола
                </div>
                <div class="prices-panes__item" data-prices-pane="Выравнивание стен">
                  Выравнивание стен
                </div>
                <div class="prices-panes__item" data-prices-pane="Малярные работы">
                  Малярные работы
                </div>
                <div class="prices-panes__item" data-prices-pane="Электромонтажные работы">
                  Электромонтажные работы
                </div>
                <div class="prices-panes__item" data-prices-pane="Сантехнические работы">
                  Сантехнические работы
                </div>
                <div class="prices-panes__item" data-prices-pane="Плиточные работы">
                  Плиточные работы
                </div>
                <div class="prices-panes__item" data-prices-pane="Гипсокартонные работы">
                  Гипсокартонные работы
                </div>
                <div class="prices-panes__item" data-prices-pane="Укладка ламината">
                  Укладка ламината
                </div>
                <div class="prices-panes__item" data-prices-pane="Установка дверей">
                  Установка дверей
                </div>
                <div class="prices-panes__item" data-prices-pane="Шумоизоляция">
                  Шумоизоляция
                </div>
                <div class="prices-panes__item" data-prices-pane="Дизайн интерьера">
                  Дизайн интерьера
                </div>
                <div class="prices-panes__item" data-prices-pane="Натяжные потолки">
                  Натяжные потолки
                </div>
              </div>
            </div>

            <div class="prices-table__footer">
              <button type="button" class="control-button" data-prices-download>
                <span>Скачать расчет стоимости</span>
                <span class="icon icon-download"></span>
              </button>

              <div class="prices-total">
                <div class="prices-total__label">
                  Итого:
                </div>
                <div class="prices-total__value" data-prices-total>
                  123 123
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="estimate-section">
      <div class="container container--lg">
        <div class="estimate-section__layout">
          <div class="estimate-section__content">
            <div class="estimate-section__title">
              Получите подробную смету
              и точную стоимость ремонта
            </div>
            <div class="estimate-section__expert">
              <div class="estimate-expert">
                <div class="estimate-expert__image">
                  <img src="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" alt="" />
                </div>
                <div class="estimate-expert__body">
                  <div class="estimate-expert__name">
                    ФИ, общается с клиентами
                  </div>
                  <div class="estimate-expert__experience">
                    Опыт работы 15 лет
                  </div>
                  <div class="estimate-expert__desc">
                    Ведущий инженер сметчик бесплатно  проконсультирует и проведет точные замеры
                    для расчета ремонта
                  </div>
                </div>
              </div>
            </div>
            <div class="estimate-section__example-wrap">
              <a href="https://rembrigada116.ru/wp-content/uploads/2022/04/1-1024x768.jpg" class="estimate-section__example-link">
                <span>Посмотреть пример сметы</span>
              </a>
            </div>
          </div>
          <div class="estimate-section__form">
            <div class="estimate-form">
              <div class="estimate-form__phone">
                <label class="phone-field phone-field--centered">
                  <span class="phone-field__label">Ваш номер телефона</span>
                  <input class="phone-field__input" type="text" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
                </label>
              </div>
              <div class="estimate-form__rules">
                Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
              </div>
              <div class="estimate-form__submit">
                <button class="primary-button primary-button--alt">Отправить</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="hiw-section">
      <div class="container">
        <div class="hiw-section__title">
          Всего 3 простых шага,<br>
          <span>чтобы начать с нами работать</span>
        </div>
        <div class="hiw-section__grid">
          <div class="hiw-card hiw-card-call">
            <div class="hiw-card__headline">
              <div class="hiw-card__title">
                Шаг
              </div>
              <div class="hiw-card__num">
                1
              </div>
            </div>
            <div class="hiw-card-call__label">
              Звоните:
            </div>
            <div class="hiw-card-call__phone">
              +7 (800) 123-45-67
            </div>
            <div class="hiw-card-call__desc">
              Познакомимся, проконсультируем и согласуем встречу на объекте или у&nbsp;нас в&nbsp;офисе
            </div>
            <div class="hiw-card-call__or">
              Или оставляйте заявку на сайте
            </div>
            <div class="hiw-card-call__order">
              <button type="button" class="primary-button primary-button--small w-56">Оставить заявку</button>
            </div>
          </div>
          <div class="hiw-card hiw-card-visit">
            <div class="hiw-card__headline">
              <div class="hiw-card__title">
                Шаг
              </div>
              <div class="hiw-card__num">
                2
              </div>
            </div>
            <div class="hiw-card-visit__desc">
              Выедем на объект для полного замера и составления точной сметы
            </div>
            <ul class="hiw-card-visit__list">
              <li>Обсудим вашу задачу</li>
              <li>Наметим план</li>
              <li>Составим смету</li>
              <li>Заключим договор</li>
            </ul>
          </div>
          <div class="hiw-card hiw-card-start">
            <div class="hiw-card__headline">
              <div class="hiw-card__title">
                Шаг
              </div>
              <div class="hiw-card__num">
                2
              </div>
            </div>
            <div class="hiw-card-start__title">
              Приступаем<br>
              к ремонту
            </div>
            <div class="hiw-card-start__desc">
              По очередности работ начинаем работы на вашем объекте
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="team-section">
      <div class="container">
        <div class="team-section__title">
          Над каждым проектом<br>
          <span>работает сплоченная команда</span>
        </div>
        <div class="team-section__grid">
          <div class="team-card">
            <div class="team-card__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/team-1.jpg" alt="">
            </div>
            <div class="team-card__body">
              <div class="team-card__name">
                Имя
              </div>
              <div class="team-card__job">
                Мастер-плиточник
              </div>
              <div class="team-card__experience">
                Стаж: 6 лет
              </div>
            </div>
          </div>
          <div class="team-card">
            <div class="team-card__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/team-2.jpg" alt="">
            </div>
            <div class="team-card__body">
              <div class="team-card__name">
                Имя
              </div>
              <div class="team-card__job">
                Мастер-плиточник
              </div>
              <div class="team-card__experience">
                Стаж: 6 лет
              </div>
            </div>
          </div>
          <div class="team-card">
            <div class="team-card__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/team-3.jpg" alt="">
            </div>
            <div class="team-card__body">
              <div class="team-card__name">
                Имя
              </div>
              <div class="team-card__job">
                Мастер-плиточник
              </div>
              <div class="team-card__experience">
                Стаж: 6 лет
              </div>
            </div>
          </div>
          <div class="team-card">
            <div class="team-card__image">
              <img src="<?php bloginfo('template_url'); ?>/src/images/team-4.jpg" alt="">
            </div>
            <div class="team-card__body">
              <div class="team-card__name">
                Имя
              </div>
              <div class="team-card__job">
                Мастер-плиточник
              </div>
              <div class="team-card__experience">
                Стаж: 6 лет
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="trust-section">
      <div class="container">
        <div class="trust-section__layout">
          <div class="trust-section__layout-left">
            <div class="trust-section__title">
              Вы можете нам довериться
            </div>
            <div class="trust-section__desc">
              И быть спокойны за качество и сроки ремонта
            </div>
            <div class="trust-section__grid">
              <div class="trust-card">
                <div class="trust-card__check"><span class="icon icon-check"></span></div>
                <div class="trust-card__title">Экономим ваш бюджет</div>
                <div class="trust-card__desc">Покупаем материалы по лучшим ценам у проверенных поставщиков</div>
              </div>
              <div class="trust-card">
                <div class="trust-card__check"><span class="icon icon-check"></span></div>
                <div class="trust-card__title">Не дёргаем по пустякам</div>
                <div class="trust-card__desc">Сами закупаем,<br>доставляем, разгружаем</div>
              </div>
              <div class="trust-card">
                <div class="trust-card__check"><span class="icon icon-check"></span></div>
                <div class="trust-card__title">Используем ваш материал</div>
                <div class="trust-card__desc">При наличии/желании будем работать с вашим материалом</div>
              </div>
              <div class="trust-card">
                <div class="trust-card__check"><span class="icon icon-check"></span></div>
                <div class="trust-card__title">Собственное оборудование</div>
                <div class="trust-card__desc">Оборудование для выполнения ремонта в наличии, вам не нужно беспокоиться</div>
              </div>
              <div class="trust-card">
                <div class="trust-card__check"><span class="icon icon-check"></span></div>
                <div class="trust-card__title">Стоимость фиксирована</div>
                <div class="trust-card__desc">Составляем смету и фиксируем финальную стоимость</div>
              </div>
              <div class="trust-card">
                <div class="trust-card__check"><span class="icon icon-check"></span></div>
                <div class="trust-card__title">Налиный или безналичный расчёт</div>
                <div class="trust-card__desc">Поэтапная оплата</div>
              </div>
            </div>
          </div>
          <div class="trust-section__layout-right">
            <div class="trust-contract">
              <div class="trust-contract__desc">
                Заключаем договор на выполнение ремонтных работ с заказчиком, оказываем ремонтные услуги для юридических лиц
              </div>
              <div class="trust-contract__figure">
                <img src="<?php bloginfo(
                  'template_url'
                ); ?>/src/images/contract.jpg" class="trust-contract__image" />
                <button type="button" class="primary-button primary-button--small trust-contract__download">
                  <span>Скачать договор</span>
                  <span class="icon icon-download"></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="faq-section" data-faq>
      <div class="container">
        <div class="faq-section__title">
          Часто задаваемые вопросы<br>
          <span>и ответы на них</span>
        </div>
        <div class="faq-section__grid">
          <div class="faq-card" data-faq-item>
            <button class="faq-card__question" data-faq-trigger>
              С чего нужно начинать ремонт в квартире?
              <span class="faq-card__indicator"></span>
            </button>
            <div class="faq-card__answer">
              Ответ на вопрос с чего нужно.
              В зависимости от количества текста в ответе изменяется высота блока с ответом
            </div>
          </div>
          <div class="faq-card" data-faq-item>
            <button class="faq-card__question" data-faq-trigger>
              С чего нужно начинать ремонт в квартире?
              <span class="faq-card__indicator"></span>
            </button>
            <div class="faq-card__answer">
              Ответ на вопрос с чего нужно.
              В зависимости от количества текста в ответе изменяется высота блока с ответом
            </div>
          </div>
          <div class="faq-card" data-faq-item>
            <button class="faq-card__question" data-faq-trigger>
              С чего нужно начинать ремонт в квартире?
              <span class="faq-card__indicator"></span>
            </button>
            <div class="faq-card__answer">
              Ответ на вопрос с чего нужно.
              В зависимости от количества текста в ответе изменяется высота блока с ответом
            </div>
          </div>
          <div class="faq-card" data-faq-item>
            <button class="faq-card__question" data-faq-trigger>
              С чего нужно начинать ремонт в квартире?
              <span class="faq-card__indicator"></span>
            </button>
            <div class="faq-card__answer">
              Ответ на вопрос с чего нужно.
              В зависимости от количества текста в ответе изменяется высота блока с ответом
            </div>
          </div>
        </div>
        <div class="faq-section__button">
          <button type="button" class="primary-button primary-button--small">
            Задать свой вопрос
          </button>
        </div>
      </div>
    </section>

    <section class="text-section">
      <div class="container">
        <h1 class="text-section__title">
          Высококачественный <span>ремонт квартир</span>
        </h1>
        <div class="text-section__content">
          <p>Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. </p>
          <p>Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроковКомпания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроковКомпания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. </p>
          <p>Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков. </p>
          <p>Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков Компания «Ремонт-под-ключ» предлагает профессиональные услуги по комплексному ремонту квартир в Казани. Мы берем на себя все этапы работ — от дизайн-проекта до финальной уборки, гарантируя качество и соблюдение сроков</p>
        </div>
      </div>
    </section>

    <section class="consultation-section">
      <div class="container">
        <div class="consultation-section__layout">
          <div class="consultation-section__layout-content">
            <div class="consultation-headline">
              <div class="consultation-headline__title">
                Получите консультацию специалиста
              </div>
              <div class="consultation-headline__desc">
                По телефону через несколько минут
              </div>
            </div>
            <div class="consultation-contact">
              <div class="consultation-contact__label">Звоните Пн-Пт с 09:00 - 18:00</div>
              <div class="consultation-contact__content">
                <a href="#" class="consultation-phone">
                  <span class="consultation-phone__icon">
                    <span class="icon icon-phone"></span>
                  </span>
                  <span class="consultation-phone__value">+7 (800) 123-45-67</span>
                </a>
              </div>
            </div>
            <div class="consultation-contact">
              <div class="consultation-contact__label">Пишите нам в мессенджеры</div>
              <div class="consultation-contact__content">
                <div class="consultation-social">
                  <a href="#" class="consultation-social__telegram">
                    <span class="icon icon-telegram"></span>
                  </a>
                  <a href="#" class="consultation-social__whatsapp">
                    <span class="icon icon-whatsapp"></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="consultation-section__layout-form">
            <div class="consultation-form">
              <div class="consultation-form__title">
                Заполните форму,<br>
                и мы вам перезвоним
              </div>
              <ul class="consultation-form__list">
                <li>Выясним ваши идеи и замыслы</li>
                <li>Узнаете с чего начать</li>
                <li>Обговорим бюджет</li>
                <li>Расскажем, что входит в стоимость</li>
                <li>Ответим на ваши вопросы</li>
              </ul>
              <div class="consultation-form__phone">
                <label class="phone-field">
                  <span class="phone-field__label">Ваш номер телефона</span>
                  <input class="phone-field__input" type="text" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
                </label>
              </div>
              <div class="consultation-form__rules">
                Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
              </div>
              <div class="consultation-form__submit">
                <button class="primary-button font-bold w-80">Получить консультацию</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
