<div class="footer">
  <div class="container">
    <div class="footer-layout">
      <div class="footer-layout__contacts">
        <div class="footer-contacts">
          <div class="footer-contacts__title">
            Контактная информация
          </div>
          <div class="footer-contacts__text">
            <?php echo nl2br(carbon_get_theme_option('crb_theme_contacts')); ?>
          </div>
          <div class="footer-contacts__call">
            <button type="button" class="control-button" data-modal-open="modal-call">
              <span>Заказать звонок</span>
              <span class="icon icon-phone"></span>
            </button>
          </div>
          <div class="footer-contacts__address">
            <?php echo nl2br(carbon_get_theme_option('crb_theme_address')); ?>
          </div>
        </div>
      </div>
      
      <?php
      wp_nav_menu([
        'menu' => 'Меню в подвале',
        'container' => null,
        'menu_class' => 'footer-menu',
      ]);
      ?>
    </div>
  </div>
</div>

<div class="footer-bottom">
  <div class="container footer-bottom__container">
    <div class="footer-bottom__copyright">
      <?php echo nl2br(carbon_get_theme_option('crb_footer_copyright')); ?>
    </div>
    <div class="footer-bottom__links">
      <a href="#">Политика конфиденциальности</a>
    </div>
    <div class="footer-bottom__info">
      <?php echo nl2br(carbon_get_theme_option('crb_footer_info')); ?>
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
                <span><?php echo carbon_get_theme_option('crb_header_city'); ?></span>
              </button>
              <div class="drawer-region-select__list" role="listbox" data-city-select-listbox>
                <?php foreach (carbon_get_theme_option('crb_header_cities') as $city): ?>
                <a href="<?php echo $city['url'] ?>" role="option" tabindex="-1"><?php echo $city['name'] ?></a>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="drawer__contacts">
        <div class="drawer-social">
          <?php if ($telegram = carbon_get_theme_option('crb_theme_telegram')): ?>
          <a href="tg://resolve?domain=<?php echo $telegram; ?>" class="drawer-social__telegram">
            <span class="icon icon-telegram"></span>
          </a>
          <?php endif; ?>
          <?php if ($whatsapp = carbon_get_theme_option('crb_theme_whatsapp')): ?>
          <a href="whatsapp://send?text=Hello&phone=<?php echo $whatsapp; ?>" class="drawer-social__whatsapp">
            <span class="icon icon-whatsapp"></span>
          </a>
          <?php endif; ?>
        </div>
        
        <a href="tel:<?php echo carbon_get_theme_option('crb_theme_phone'); ?>" class="drawer-phone">
          <span class="drawer-phone__number"><?php echo carbon_get_theme_option('crb_theme_phone'); ?></span>
          <span class="drawer-phone__time"><?php echo carbon_get_theme_option('crb_theme_working_hours_short'); ?></span>
        </a>
      </div>
    </div>
  </div>
  <div class="drawer__overlay" data-drawer-close></div>
</div>

<div id="modal-call" aria-hidden="true" class="modal">
  <div class="modal__overlay" tabindex="-1" data-modal-close>
    <div class="modal__container modal__container--default" role="dialog" aria-modal="true">
        
      <div class="modal__content">
        <button class="modal__close" aria-label="Закрыть" data-modal-close></button>

        <div class="modal__title"><?php echo carbon_get_theme_option('crb_callback_title'); ?></div>

        <div class="modal__desc"><?php echo carbon_get_theme_option('crb_callback_desc'); ?></div>

        <form
          action="<?php echo admin_url('admin-ajax.php') ?>"
          class="modal-form"
          data-feedack-form
          data-feedack-form-goal="MODAL_CALLBACK"
        >
          <input type="hidden" name="submitted" value="">
          <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('feedback-nonce') ?>">
          <input type="hidden" name="subject" value="<?php echo carbon_get_theme_option('crb_callback_title'); ?>">

          <div class="modal-form__messages" data-feedack-form-messages></div>

          <div class="modal-form__field">
            <label class="phone-field">
              <span class="phone-field__label">Ваш номер телефона<span>*</span></span>
              <input class="phone-field__input" type="text" name="your-phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
            </label>
          </div>

          <div class="modal-form__field modal-form__field--rules">
            Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
          </div>

          <div class="modal-form__field modal-form__field--submit">
            <button type="submit" class="primary-button primary-button--alt w-full">
              <?php echo carbon_get_theme_option('crb_callback_action'); ?>
            </button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>

<div id="feedack-modal" aria-hidden="true" class="modal">
  <div class="modal__overlay" tabindex="-1" data-modal-close>
    <div class="modal__container modal__container--default" role="dialog" aria-modal="true">
        
      <div class="modal__content">
        <button class="modal__close" aria-label="Закрыть" data-modal-close></button>

        <div class="modal__title" data-feedack-modal-title>Обратная связь</div>

        <div class="modal__desc" data-feedack-modal-desc></div>

        <form action="<?php echo admin_url('admin-ajax.php') ?>" class="modal-form" data-feedack-form data-feedack-form-goal="FEEDBACK_MODAL">
          <input type="hidden" name="submitted" value="">
          <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('feedback-nonce') ?>">
          <input type="hidden" name="subject" value="Форма обратной связи" data-feedack-form-subject>

          <div class="modal-form__messages" data-feedack-form-messages></div>

          <div class="modal-form__field">
            <label class="phone-field">
              <span class="phone-field__label">Ваш номер телефона<span>*</span></span>
              <input class="phone-field__input" type="text" name="your-phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
            </label>
          </div>

          <div class="modal-form__field modal-form__field--rules">
            Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
          </div>

          <div class="modal-form__field modal-form__field--submit">
            <button type="submit" class="primary-button primary-button--alt w-full" data-feedack-modal-action>Отправить</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>

<div id="faq-modal" aria-hidden="true" class="modal">
  <div class="modal__overlay" tabindex="-1" data-modal-close>
    <div class="modal__container modal__container--default" role="dialog" aria-modal="true">
        
      <div class="modal__content">
        <button class="modal__close" aria-label="Закрыть" data-modal-close></button>

        <div class="modal__title" data-feedack-modal-title>Задать вопрос</div>

        <div class="modal__desc" data-feedack-modal-desc></div>

        <form action="<?php echo admin_url('admin-ajax.php') ?>" class="modal-form" data-feedack-form data-feedack-form-goal="FAQ_MODAL">
          <input type="hidden" name="submitted" value="">
          <input type="hidden" name="nonce" value="<?php echo wp_create_nonce('feedback-nonce') ?>">
          <input type="hidden" name="subject" value="Задать вопрос" data-feedack-form-subject>

          <div class="modal-form__messages" data-feedack-form-messages></div>

          <div class="modal-form__field">
            <label class="text-field">
              <span class="text-field__label">Ваше имя</span>
              <input class="text-field__input" type="text" name="your-name" value="" placeholder="">
            </label>
          </div>

          <div class="modal-form__field">
            <label class="phone-field">
              <span class="phone-field__label">Ваш номер телефона<span>*</span></span>
              <input class="phone-field__input" type="text" name="your-phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __" required>
            </label>
          </div>

          <div class="modal-form__field">
            <label class="textarea-field">
              <span class="textarea-field__label">Ваш вопрос<span>*</span></span>
              <textarea class="textarea-field__input" name="your-message" placeholder="" required></textarea>
            </label>
          </div>

          <div class="modal-form__field modal-form__field--rules">
            Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
          </div>

          <div class="modal-form__field modal-form__field--submit">
            <button type="submit" class="primary-button primary-button--alt w-full" data-feedack-modal-action>Отправить</button>
          </div>
        </form>

      </div>

    </div>
  </div>
</div>

<?php wp_footer(); ?>
