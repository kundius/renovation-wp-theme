<section class="estimate-section">
  <div class="container container--large">
    <div class="estimate-section__layout">
      <div class="estimate-section__content">
        <?php if ($title = $args['fields']['title']): ?>
        <div class="estimate-section__title"><?php echo nl2br($title); ?></div>
        <?php endif; ?>
        <div class="estimate-section__expert">
          <div class="estimate-expert">
            <?php if ($manager_image = $args['fields']['manager_image']): ?>
            <div class="estimate-expert__image">
              <?php echo wp_get_attachment_image($manager_image, 'full'); ?>
            </div>
            <?php endif; ?>
            <div class="estimate-expert__body">
              <?php if ($manager_name = $args['fields']['manager_name']): ?>
              <div class="estimate-expert__name">
                <?php echo $manager_name; ?>
              </div>
              <?php endif; ?>
              <?php if ($manager_experience = $args['fields']['manager_experience']): ?>
              <div class="estimate-expert__experience">
                <?php echo $manager_experience; ?>
              </div>
              <?php endif; ?>
              <?php if ($manager_desc = $args['fields']['manager_desc']): ?>
              <div class="estimate-expert__desc"><?php echo nl2br($manager_desc); ?></div>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <div class="estimate-section__example-wrap">
          <?php if ($example_image = $args['fields']['example_image']): ?>
          <a href="<?php echo wp_get_attachment_image_url($example_image, 'full'); ?>" class="estimate-section__example-link" data-fslightbox="estimate">
            <span><?php echo $args['fields']['example_action']; ?></span>
          </a>
          <?php endif; ?>
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
