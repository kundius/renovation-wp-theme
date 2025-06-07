<?php if ($steps = $args['fields']['steps']): ?>
<section class="quiz-section">
  <div class="container">

    <form class="quiz" data-quiz data-quiz-goal="<?php echo $args['fields']['finish_goal']; ?>">

      <?php if ($title = $args['fields']['title']): ?>
      <div class="quiz__title">
        <?php echo $title; ?>
      </div>
      <?php endif; ?>

      <div class="quiz-progress" data-quiz-progress>
        <?php foreach ($steps as $key => $step): ?>
        <div class="quiz-progress__number">
          <?php echo $key + 1; ?>
        </div>
        <?php endforeach; ?>

        <div class="quiz-progress__number">
          <?php echo count($steps) + 1; ?>
        </div>

        <div class="quiz-progress__final">
          <img src="<?php bloginfo('template_url'); ?>/src/images/quiz-gift.svg" alt="">
        </div>
      </div>

      <div class="quiz__panes" data-quiz-panes>

        <?php foreach ($steps as $key => $step): ?>
        <div class="quiz__pane">
          <div class="quiz-step">
            <?php if ($image = $step['image']): ?>
            <div class="quiz-step__image">
              <img src="<?php echo wp_get_attachment_url($image); ?>" alt="">
            </div>
            <?php endif; ?>
            <div class="quiz-step__form">
              <div class="quiz-form">
                <div class="quiz-form__title">
                  <div class="quiz-form__title__number"><?php echo $key + 1; ?>.</div>
                  <span class="uppercase">
                    <?php echo nl2br($step['question']); ?>
                  <span>
                </div>
                <?php if ($options = $step['options']): ?>
                <div class="quiz-form__fields">
                  <?php foreach ($options as $n => $option): ?>
                  <label class="radio-field">
                    <input
                      type="radio"
                      name="<?php echo esc_html($step['question']) ?>"
                      value="<?php echo esc_html($option['name']) ?>"
                      <?php if ($n === 0): ?>checked<?php endif; ?>
                    >
                    <span><?php echo $option['name'] ?></span>
                  </label>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
                <div class="quiz-form__actions">
                  <?php if ($key !== 0): ?>
                  <button type="button" class="control-button quiz-form__action_prev" data-quiz-prev>
                    <span class="icon icon-chevron-left"></span>
                    <span>Назад</span>
                  </button>
                  <?php endif; ?>
                  <button type="button" class="control-button quiz-form__action_next" data-quiz-next>
                    <span>Следующий шаг</span>
                    <span class="icon icon-chevron-right"></span>
                  </button>
                </div>
              </div>
            </div>
            <div class="quiz-step__bonus">
              <div class="quiz-bonus">
                <?php if ($bonus_title = $args['fields']['bonus_title']): ?>
                <div class="quiz-bonus__title"><?php echo nl2br($bonus_title) ?></div>
                <?php endif; ?>
                <?php if ($bonus_list = $args['fields']['bonus_list']): ?>
                <div class="quiz-bonus__items">
                  <?php foreach ($bonus_list as $bonus_list_item): ?>
                  <div class="quiz-bonus__item">
                    <?php if ($image = $bonus_list_item['image']): ?>
                    <div class="quiz-bonus__item-icon">
                      <img src="<?php echo wp_get_attachment_url($image); ?>" alt="">
                    </div>
                    <?php endif; ?>
                    <?php if ($name = $bonus_list_item['name']): ?>
                    <div class="quiz-bonus__item-title">
                      <?php echo nl2br($name) ?>
                    </div>
                    <?php endif; ?>
                  </div>
                  <?php endforeach; ?>
                </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <div class="quiz__pane">
          <div class="quiz-ending">
            <div class="quiz-ending__hedline">
              <div class="quiz-ending__title">
                <?php echo nl2br($args['fields']['finish_title']) ?>
              </div>
              <div class="quiz-ending__desc">
                <?php echo nl2br($args['fields']['finish_subtitle']) ?>
              </div>
            </div>
            <div class="quiz-ending__fields">
              <?php foreach ($args['fields']['finish_options'] as $n => $finish_option): ?>
              <label class="radio-field">
                <input
                  type="radio"
                  name="<?php echo esc_html($args['fields']['finish_title']); ?>"
                  value="<?php echo esc_html($finish_option['name']); ?>"
                  <?php if ($n === 0): ?>checked<?php endif; ?>
                >
                <span><?php echo $finish_option['name']; ?></span>
              </label>
              <?php endforeach; ?>
            </div>
            <div class="quiz-ending__form">
              <div class="quiz__phone">
                <label class="phone-field phone-field--centered">
                  <span class="phone-field__label">Ваш номер телефона</span>
                  <input class="phone-field__input" type="text" name="phone" value="" data-maska="+ 7 (###) - ### - ## - ##" placeholder="+ 7 (___)  - ___ - __ - __">
                </label>
              </div>
              <div class="quiz__submit">
                <button type="submit" class="primary-button primary-button--alt">
                  <span class="text-lg leading-none">
                    <?php echo nl2br($args['fields']['finish_action']); ?>
                  </span>
                  <span class="icon icon-gift w-9 h-9 ml-1 -mr-1"></span>
                </button>
              </div>
            </div>
            <div class="quiz-ending__rules">
              Нажимая “Отправить”, вы даете согласие на <a href="#">обработку персональных данных</a>
            </div>
            <?php if ($image = $args['fields']['finish_image']): ?>
            <div class="quiz-ending__image">
              <img src="<?php echo wp_get_attachment_url($image); ?>" alt="">
            </div>
            <?php endif; ?>
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
<?php endif; ?>
