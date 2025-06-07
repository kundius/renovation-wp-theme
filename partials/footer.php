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
            <button type="button" class="control-button">
              <span>Заказать звонок</span>
              <span class="icon icon-phone"></span>
            </button>
          </div>
          <div class="footer-contacts__address">
            <?php echo nl2br(carbon_get_theme_option('crb_theme_address')); ?>
          </div>
        </div>
      </div>
      <div class="footer-layout__nav">
        <div class="footer-menu">
          <div class="footer-menu__title">
            Ремонт и отделка
          </div>
          <ul class="footer-menu__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
        <div class="footer-menu">
          <div class="footer-menu__title">
            Отдельные услуги
          </div>
          <ul class="footer-menu__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
        <div class="footer-menu">
          <div class="footer-menu__title">
            Инженерные работы
          </div>
          <ul class="footer-menu__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
        <div class="footer-menu">
          <div class="footer-menu__title">
            О компании
          </div>
          <ul class="footer-menu__menu">
            <li><a href="#">Главная</a></li>
            <li><a href="#">О нас</a></li>
            <li><a href="#">Услуги</a></li>
            <li><a href="#">Контакты</a></li>
          </ul>
        </div>
      </div>
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
            <label class="text-field">
              <span class="text-field__label">Ваше имя<span>*</span></span>
              <input class="text-field__input" type="text" name="your-name" value="" placeholder="">
            </label>
          </div>

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
            <label class="text-field">
              <span class="text-field__label">Ваше имя<span>*</span></span>
              <input class="text-field__input" type="text" name="your-name" value="" placeholder="">
            </label>
          </div>

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

<div id="modal-calc" aria-hidden="true" class="modal">
  <div class="modal__overlay" tabindex="-1" data-modal-close>
    <div class="modal__container container" role="dialog" aria-modal="true">
      <div class="relative">
        <button class="modal__close" aria-label="Закрыть" data-modal-close></button>

        <form class="calc" data-calc data-calc-goal="<?php echo carbon_get_theme_option('calc_goal'); ?>">
          <div class="calc__left">
            <?php if ($questions = carbon_get_theme_option('calc_questions')): ?>
            <?php foreach ($questions as $n => $question): ?>
            <div class="calc__field">
              <div class="calc__field-label">
                <?php echo ($n + 1); ?>. <?php echo nl2br($question['question']); ?>
              </div>
              <?php if ($answers = $question['answers']): ?>
              <div class="calc__field-control <?php if ($question['type'] === 'box'): ?>calc__field-radio-box<?php else: ?>calc__field-radio-button<?php endif; ?>">
                <?php foreach ($answers as $k => $answer): ?>
                <label class="<?php if ($question['type'] === 'box'): ?>radio-field<?php else: ?>radio-button<?php endif; ?>">
                  <input
                    type="radio"
                    name="<?php echo esc_html($question['question']); ?>"
                    data-calc-repair-price="<?php echo $answer['repair_price']; ?>"
                    data-calc-materials-price="<?php echo $answer['materials_price']; ?>"
                    value="<?php echo esc_html($answer['answer']); ?>"
                    <?php if ($k === 0): ?>checked<?php endif; ?>
                  >
                  <span><?php echo $answer['answer']; ?></span>
                </label>
                <?php endforeach; ?>
              </div>
              <?php endif; ?>
            </div>
            <?php endforeach; ?>

            <div class="calc__field">
              <div class="calc__field-label">
                <?php echo (count($questions) + 1); ?>. Загрузите план квартиры или дома для получения точной сметы ремонта <span>(в формате .doc, .docx, .xlsx, .pdf, .jpeg, .png)</span>
              </div>
              <div class="calc__field-control">
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
            <?php endif; ?>

            <div class="calc__field calc__field--area">
              <div class="calc__field-label">
                Площадь помещения (м<sup>2</sup>)
              </div>
              <div class="calc__field-control">
                <div class="range-field" data-range-field>
                  <input type="range" name="area" value="25" min="0" max="300" class="range-field__input" data-range-field-input>
                  <div class="range-field__display" data-range-field-display="<?php echo esc_html('# м<sup>2</sup>'); ?>"></div>
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
            <?php if ($message = carbon_get_theme_option('calc_message')): ?>
            <div class="calc__message"><?php echo wpautop($message); ?></div>
            <?php endif; ?>
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
    </div>
  </div>
</div>

<?php wp_footer(); ?>
