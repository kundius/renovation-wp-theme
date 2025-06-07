<section class="prices-section">
  <div class="container">
    <?php if ($title = $args['fields']['title']): ?>
    <div class="prices-section__title"><?php echo nl2br($title); ?></div>
    <?php endif; ?>

    <?php if ($list = $args['fields']['list']): ?>
    <div class="prices" data-prices>
      <div class="prices-tabs">
        <div class="prices-tabs__content">
          <?php foreach ($list as $section_n => $section): ?>
          <button
            class="prices-tabs__item<?php if ($section_n === 0): ?> active<?php endif; ?>"
            data-prices-tab="<?php echo esc_html($section['name']); ?>"
          >
            <?php echo nl2br($section['name']); ?>
          </button>
          <?php endforeach; ?>
        </div>
        <button type="button" class="prices-tabs__show" data-prices-tabs-show data-prices-tabs-show-alt="Свернуть">Показать все</button>
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
            <?php foreach ($list as $section_n => $section): ?>
            <div
              class="prices-panes__item<?php if ($section_n === 0): ?> active<?php endif; ?>"
              data-prices-pane="<?php echo esc_html($section['name']); ?>"
            >
              <div class="prices-list">
                <?php foreach ($section['groups'] as $group_n => $group): ?>
                <div class="prices-list__title">
                  <?php echo nl2br($group['name']); ?>
                </div>
                <?php foreach ($group['options'] as $option_n => $option): ?>
                <div class="prices-list__row" data-prices-row>
                  <div class="prices-list__enable">
                    <input class="prices-list__checkbox" type="checkbox" name="enable" value="1" data-prices-row-enable />
                  </div>
                  <div class="prices-list__name" data-prices-row-name>
                    <?php echo nl2br($option['name']); ?>
                  </div>
                  <div class="prices-list__quantity">
                    <?php if ($option['quantity']): ?>
                    <input
                      class="prices-list__quantity-input"
                      type="text"
                      name="quantity"
                      min="1"
                      value="<?php echo $option['quantity']; ?>"
                      data-prices-row-quantity
                    />
                    <?php endif; ?>
                  </div>
                  <div class="prices-list__units" data-prices-row-units>
                    <?php echo $option['unit']; ?>
                  </div>
                  <div class="prices-list__price" data-prices-row-price="<?php echo $option['price']; ?>">
                    <?php echo number_format_i18n($option['price']); ?> руб.
                  </div>
                </div>
                <?php endforeach; ?>
                <?php endforeach; ?>
              </div>
            </div>
            <?php endforeach; ?>
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
            <div class="prices-total__value" data-prices-total></div>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
