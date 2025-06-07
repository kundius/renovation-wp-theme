<section class="actions-section">
  <div class="container container--large">
    <?php if ($title = $args['fields']['title']): ?>
    <div class="actions-section__title"><?php echo nl2br($title); ?></div>
    <?php endif; ?>

    <?php if ($entries = $args['fields']['entries']): ?>
    <div class="actions-carousel" data-actions-carousel>
      <div class="actions-carousel__wrap">
        <div class="actions-carousel__viewport" data-actions-carousel-viewport>
          <div class="actions-carousel__container">
            <?php foreach ($entries as $item): ?>
            <div class="actions-carousel__slide">
              <div class="actions-item">
                <?php echo get_the_post_thumbnail($item['id'], 'thumbnail-l', ['class' => 'actions-item__image']); ?>
                <div class="actions-item__content">
                  <div class="actions-item__title">
                    <?php echo get_the_title($item['id']); ?>
                  </div>
                  <div class="actions-item__desc">
                    <?php echo get_the_excerpt($item['id']); ?>
                  </div>
                  <div class="actions-item__more">
                    <a href="<?php echo get_the_permalink($item['id']); ?>" class="more-button">
                      <span class="more-button__text">Узнать больше</span>
                      <span class="more-button__icon">
                        <span class="icon icon-arrow-right"></span>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <button class="actions-carousel__nav actions-carousel__nav--prev" type="button" data-actions-carousel-prev></button>
        <button class="actions-carousel__nav actions-carousel__nav--next" type="button" data-actions-carousel-next></button>
      </div>
      <div class="actions-carousel__dots" data-actions-carousel-dots></div>
    </div>
    <?php endif; ?>
  </div>
</section>
