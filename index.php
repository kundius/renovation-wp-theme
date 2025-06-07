<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-scree">
    <?php get_template_part('partials/header'); ?>

    <?php the_content(); ?>

    <section class="estimate-section">
      <div class="container container--large">
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
          <div class="hiw-section__grid-cell">
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
          </div>
          <div class="hiw-section__grid-cell">
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
          </div>
          <div class="hiw-section__grid-cell">
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
