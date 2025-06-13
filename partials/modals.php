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
            <label class="text-field">
              <span class="text-field__label">Ваш номер телефона<span>*</span></span>
              <input class="text-field__input" type="text" name="your-phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
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
            <label class="text-field">
              <span class="text-field__label">Ваш номер телефона<span>*</span></span>
              <input class="text-field__input" type="text" name="your-phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
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
            <label class="text-field">
              <span class="text-field__label">Ваш номер телефона<span>*</span></span>
              <input class="text-field__input" type="text" name="your-phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __" required>
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
