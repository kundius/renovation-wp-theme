<section class="consultation-section">
  <div class="container">
    <div class="consultation-section__layout">
      <div class="consultation-section__layout-content">
        <div class="consultation-headline">
          <?php if ($title = $args['fields']['title']): ?>
          <div class="consultation-headline__title"><?php echo nl2br($title); ?></div>
          <?php endif; ?>
          <?php if ($subtitle = $args['fields']['subtitle']): ?>
          <div class="consultation-headline__desc"><?php echo nl2br($subtitle); ?></div>
          <?php endif; ?>
        </div>
        <?php if ($phone = carbon_get_theme_option('crb_theme_phone')): ?>
        <div class="consultation-contact">
          <?php if ($phone_label = $args['fields']['phone_label']): ?>
          <div class="consultation-contact__label"><?php echo nl2br($phone_label); ?></div>
          <?php endif; ?>
          <div class="consultation-contact__content">
            <a href="<?php echo $phone; ?>" class="consultation-phone">
              <span class="consultation-phone__icon">
                <span class="icon icon-phone"></span>
              </span>
              <span class="consultation-phone__value"><?php echo $phone; ?></span>
            </a>
          </div>
        </div>
        <?php endif; ?>
        <div class="consultation-contact">
          <?php if ($messenger_label = $args['fields']['messenger_label']): ?>
          <div class="consultation-contact__label"><?php echo nl2br($messenger_label); ?></div>
          <?php endif; ?>
          <div class="consultation-contact__content">
            <div class="consultation-social">
              <?php if ($telegram = carbon_get_theme_option('crb_theme_telegram')): ?>
              <a href="tg://resolve?domain=<?php echo $telegram; ?>" class="consultation-social__telegram">
                <span class="icon icon-telegram"></span>
              </a>
              <?php endif; ?>
              <?php if ($whatsapp = carbon_get_theme_option('crb_theme_whatsapp')): ?>
              <a href="whatsapp://send?text=Hello&phone=<?php echo $whatsapp; ?>" class="consultation-social__whatsapp">
                <span class="icon icon-whatsapp"></span>
              </a>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="consultation-section__layout-form">
        <div class="consultation-form">
          <?php if ($form_title = $args['fields']['form_title']): ?>
          <div class="consultation-form__title"><?php echo nl2br($form_title); ?></div>
          <?php endif; ?>
          <div class="consultation-form__list">
          <ul>
            <li>Выясним ваши идеи и замыслы</li>
            <li>Узнаете с чего начать</li>
            <li>Обговорим бюджет</li>
            <li>Расскажем, что входит в стоимость</li>
            <li>Ответим на ваши вопросы</li>
          </ul>
          </div>
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
