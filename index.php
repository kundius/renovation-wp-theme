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

    <div class="about">
      <div class="container">
        <div class="about__layout">
          <div class="about__layout__content">
            <div class="about__headline">
              <div class="about__headline__primary">
                Ремонт-под-ключ
              </div>
              <div class="about__headline__secondary">
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
          <div class="about__layout__services">
            <div class="about__services">
              <div class="about__service">
                <div class="about__service__icon" style="--image-url: url(<?php bloginfo(
                  'template_url'
                ); ?>/src/images/service-1.svg)">
                </div>
                <a href="#" class="about__service__title">
                  Бесплатная консультация
                </a>
              </div>
              <div class="about__service">
                <div class="about__service__icon" style="--image-url: url(<?php bloginfo(
                  'template_url'
                ); ?>/src/images/service-2.png)">
                </div>
                <a href="#" class="about__service__title">
                  Бесплатная консультация
                </a>
              </div>
              <div class="about__service">
                <div class="about__service__icon" style="--image-url: url(<?php bloginfo(
                  'template_url'
                ); ?>/src/images/service-3.svg)">
                </div>
                <div class="about__service__title">
                  Бесплатная консультация
                </div>
              </div>
              <div class="about__service">
                <div class="about__service__icon" style="--image-url: url(<?php bloginfo(
                  'template_url'
                ); ?>/src/images/service-4.svg)">
                </div>
                <a href="#" class="about__service__title">
                  Бесплатная консультация
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="quiz-section">
      <div class="container">

        <form class="quiz" data-quiz>
          <div class="quiz__title">
            Узнайте стоимость Вашего ремонта за 1 минуту <span>+ подарок!</span>
          </div>

          <div class="quiz__progress">
            <div class="quiz__progress__number">
              1
            </div>
            <div class="quiz__progress__number">
              2
            </div>
            <div class="quiz__progress__number">
              3
            </div>
            <div class="quiz__progress__number">
              4
            </div>
            <div class="quiz__progress__number">
              5
            </div>
            <div class="quiz__progress__number">
              6
            </div>
            <div class="quiz__progress__number">
              7
            </div>
            <div class="quiz__progress__final">
              <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-gift.svg" alt="">
            </div>
          </div>

          <div class="quiz__panes">

            <div class="quiz__pane">
              <div class="quiz__step">
                <div class="quiz__step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-1.jpg" alt="">
                </div>
                <div class="quiz__step__form">
                  <div class="quiz__form">
                    <div class="quiz__form__title">
                      <div class="quiz__form__title__number">1.</div>
                      <span class="uppercase">Укажите тип<br>Вашего дома<span>
                    </div>
                    <div class="quiz__form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Укажите тип Вашего дома" value="Новостройка" checked>
                        <span></span>
                        <span>Новостройка</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите тип Вашего дома" value="Вторичное жилье">
                        <span></span>
                        <span>Вторичное жилье</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите тип Вашего дома" value="Дом или коттедж">
                        <span></span>
                        <span>Дом или коттедж</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите тип Вашего дома" value="Введите площадь">
                        <span></span>
                        <span>Другое</span>
                      </label>
                    </div>
                    <div class="quiz__form__actions">
                      <button type="button" class="quiz__form__action quiz__form__action_prev">Назад</button>
                      <button type="button" class="quiz__form__action quiz__form__action_next">Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz__step__bonus">
                  <div class="quiz__bonus">
                    <div class="quiz__bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz__bonus__items">
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="quiz__pane">
              <div class="quiz__step">
                <div class="quiz__step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-2.jpg" alt="">
                </div>
                <div class="quiz__step__form">
                  <div class="quiz__form">
                    <div class="quiz__form__title">
                    <div class="quiz__form__title__number">2.</div>
                      <span class="uppercase">Укажите общую площадь помещения<span>
                    </div>
                    <div class="quiz__form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Укажите общую площадь помещения" value="До 30 м2" checked>
                        <span></span>
                        <span>До 30 м<sup>2</sup></span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите общую площадь помещения" value="От 30 до 60 м2">
                        <span></span>
                        <span>От 30 до 60 м<sup>2</sup></span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Укажите общую площадь помещения" value="Более 60 м2">
                        <span></span>
                        <span>Более 60 м<sup>2</sup></span>
                      </label>
                      <label class="radio-field">
                        <!-- input:"Введите площадь" м<sup>2</sup> -->
                        <input type="radio" name="Укажите общую площадь помещения" value="# м2">
                        <span></span>
                        <span>
                          <input type="text" value="" placeholder="Введите площадь">
                          м<sup>2</sup>
                        </span>
                      </label>
                    </div>
                    <div class="quiz__form__actions">
                      <button type="button" class="quiz__form__action quiz__form__action_prev">Назад</button>
                      <button type="button" class="quiz__form__action quiz__form__action_next">Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz__step__bonus">
                  <div class="quiz__bonus">
                    <div class="quiz__bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz__bonus__items">
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz__step">
                <div class="quiz__step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-3.jpg" alt="">
                </div>
                <div class="quiz__step__form">
                  <div class="quiz__form">
                    <div class="quiz__form__title">
                    <div class="quiz__form__title__number">3.</div>
                      <span class="uppercase">Какой вид ремонта требуется?<span>
                    </div>
                    <div class="quiz__form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Какой вид ремонта требуется?" value="Черновой ремонт" checked>
                        <span></span>
                        <span>Черновой ремонт</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой вид ремонта требуется?" value="Косметический ремонт">
                        <span></span>
                        <span>Косметический ремонт</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой вид ремонта требуется?" value="Капитальный  ремонт">
                        <span></span>
                        <span>Капитальный  ремонт</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой вид ремонта требуется?" value="Элитный  ремонт">
                        <span></span>
                        <span>Элитный  ремонт</span>
                      </label>
                    </div>
                    <div class="quiz__form__actions">
                      <button type="button" class="quiz__form__action quiz__form__action_prev">Назад</button>
                      <button type="button" class="quiz__form__action quiz__form__action_next">Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz__step__bonus">
                  <div class="quiz__bonus">
                    <div class="quiz__bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz__bonus__items">
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz__step">
                <div class="quiz__step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-4.jpg" alt="">
                </div>
                <div class="quiz__step__form">
                  <div class="quiz__form">
                    <div class="quiz__form__title">
                    <div class="quiz__form__title__number">4.</div>
                      <span class="uppercase">У вас уже есть дизайн - проект?<span>
                    </div>
                    <div class="quiz__form__fields">
                      <label class="radio-field">
                        <input type="radio" name="У вас уже есть дизайн - проект?" value="Да" checked>
                        <span></span>
                        <span>Да</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="У вас уже есть дизайн - проект?" value="Нет">
                        <span></span>
                        <span>Нет</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="У вас уже есть дизайн - проект?" value="Планирую заказать">
                        <span></span>
                        <span>Планирую заказать</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="У вас уже есть дизайн - проект?" value="В разработке">
                        <span></span>
                        <span>В разработке</span>
                      </label>
                    </div>
                    <div class="quiz__form__actions">
                      <button type="button" class="quiz__form__action quiz__form__action_prev">Назад</button>
                      <button type="button" class="quiz__form__action quiz__form__action_next">Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz__step__bonus">
                  <div class="quiz__bonus">
                    <div class="quiz__bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz__bonus__items">
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz__step">
                <div class="quiz__step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-5.jpg" alt="">
                </div>
                <div class="quiz__step__form">
                  <div class="quiz__form">
                    <div class="quiz__form__title">
                    <div class="quiz__form__title__number">5.</div>
                      <span class="uppercase">Когда вы планируете начать ремонт<span>
                    </div>
                    <div class="quiz__form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Когда вы планируете начать ремонт" value="В течение 3х-дней" checked>
                        <span></span>
                        <span>В течение 3х-дней</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Когда вы планируете начать ремонт" value="В течение месяца">
                        <span></span>
                        <span>В течение месяца</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Когда вы планируете начать ремонт" value="В течение полугода">
                        <span></span>
                        <span>В течение полугода</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Когда вы планируете начать ремонт" value="Более длительный срок">
                        <span></span>
                        <span>Более длительный срок</span>
                      </label>
                    </div>
                    <div class="quiz__form__actions">
                      <button type="button" class="quiz__form__action quiz__form__action_prev">Назад</button>
                      <button type="button" class="quiz__form__action quiz__form__action_next">Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz__step__bonus">
                  <div class="quiz__bonus">
                    <div class="quiz__bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz__bonus__items">
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz__step">
                <div class="quiz__step__image">
                  <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-step-6.jpg" alt="">
                </div>
                <div class="quiz__step__form">
                  <div class="quiz__form">
                    <div class="quiz__form__title">
                    <div class="quiz__form__title__number">6.</div>
                      <span class="uppercase">Какой бы вам хотелось получить подарок после ремонта<span>
                    </div>
                    <div class="quiz__form__fields">
                      <label class="radio-field">
                        <input type="radio" name="Какой бы вам хотелось получить подарок после ремонта" value="Каталог дизайн-проектов" checked>
                        <span></span>
                        <span>Каталог дизайн-проектов</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой бы вам хотелось получить подарок после ремонта" value="Фотосессия после ремонта">
                        <span></span>
                        <span>Фотосессия после ремонта</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой бы вам хотелось получить подарок после ремонта" value="Мне не нужен подарок">
                        <span></span>
                        <span>Мне не нужен подарок</span>
                      </label>
                      <label class="radio-field">
                        <input type="radio" name="Какой бы вам хотелось получить подарок после ремонта" value="Другое">
                        <span></span>
                        <span>Другое</span>
                      </label>
                    </div>
                    <div class="quiz__form__actions">
                      <button type="button" class="quiz__form__action quiz__form__action_prev">Назад</button>
                      <button type="button" class="quiz__form__action quiz__form__action_next">Следующий шаг</button>
                    </div>
                  </div>
                </div>
                <div class="quiz__step__bonus">
                  <div class="quiz__bonus">
                    <div class="quiz__bonus__title">Ваши бонусы<br>в конце теста:</div>
                    <div class="quiz__bonus__items">
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-1.svg" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          Расчет стоимости и&nbsp;прайс-лист
                        </div>
                      </div>
                      <div class="quiz__bonus__item">
                        <div class="quiz__bonus__item__icon">
                          <img src="<?php bloginfo(
                            'template_url'
                          ); ?>/src/images/quiz-bonus-2.png" alt="">
                        </div>
                        <div class="quiz__bonus__item__title">
                          1 из 3 подарков на&nbsp;выбор
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="quiz__pane">
              <div class="quiz__ending">
                <div class="quiz__ending__hedline">
                  <div class="quiz__ending__hedline__primary">
                    Мы уже приступили к расчету!
                  </div>
                  <div class="quiz__ending__hedline__secondary">
                    За Вами закреплена скидка. Куда отправлять результат?
                  </div>
                </div>
                <div class="quiz__ending__fields">
                  <label class="radio-field">
                    <input type="radio" name="Мы уже приступили к расчету!" value="Перезвоните мне, у меня остались вопросы" checked>
                    <span></span>
                    <span>Перезвоните мне, у меня остались вопросы</span>
                  </label>
                  <label class="radio-field">
                    <input type="radio" name="Мы уже приступили к расчету!" value="Пришлите мне все в Whatsapp">
                    <span></span>
                    <span>Пришлите мне все в Whatsapp</span>
                  </label>
                  <label class="radio-field">
                    <input type="radio" name="Мы уже приступили к расчету!" value="Пришлите мне все в Telegram ">
                    <span></span>
                    <span>Пришлите мне все в Telegram </span>
                  </label>
                </div>
                <div class="quiz__ending__form">
                  <div class="quiz__phone">
                    <label class="quiz__phone__label" for="quizphone">Ваш номер телефона</label>
                    <input class="quiz__phone__input" type="text" id="quizphone" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
                  </div>
                  <div class="quiz__submit">
                    <button type="submit" class="cta-button cta-button_primary">
                      <span class="text-lg leading-none">
                        Отправить расчет<br>
                        и получить подарок
                      </span>
                      <span class="icon-gift w-9 h-9 ml-1 -mr-1"></span>
                    </button>
                  </div>
                </div>
                <div class="quiz__ending__rules">
                  Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
                </div>
                <div class="quiz__ending__image">
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

    <div class="flex-grow h-[2000px]">
    </div>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
