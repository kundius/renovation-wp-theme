<section class="block-section portfolio">
  <div class="container container--large">

    <div class="portfolio__headline">
      <?php if ($title = $args['fields']['title']): ?>
      <div class="portfolio__title">
        <?php echo $title; ?>
      </div>
      <?php endif; ?>
      <?php if ($subtitle = $args['fields']['subtitle']): ?>
      <div class="portfolio__desc">
        <?php echo $subtitle; ?>
      </div>
      <?php endif; ?>
    </div>

    <?php if ($items = $args['fields']['items']): ?>
    <div class="portfolio__items">
      <div class="portfolio-embla" data-portfolio-embla>
        <div class="portfolio-embla__viewport" data-portfolio-embla-viewport>
          <div class="portfolio-embla__container">
            <?php foreach ($items as $item): ?>
            <div class="portfolio-embla__slide">
              <div class="portfolio-item">
                <?php if ($gallery = carbon_get_post_meta($item['id'], 'gallery')): ?>
                <?php
                  $first = $gallery[0];
                  $rest = array_slice($gallery, 1);
                ?>
                <div class="portfolio-item__gallery">
                  <div class="portfolio-gallery" data-portfolio-gallery>
                    <div class="portfolio-gallery__main">
                      <a href="<?php echo wp_get_attachment_url($first); ?>" data-fslightbox="gallery">
                        <img src="<?php echo wp_get_attachment_image_url($first, 'thumbnail-m'); ?>" alt="">
                      </a>
                    </div>
                    <div class="portfolio-gallery__carousel">
                      <div class="portfolio-gallery__carousel-viewport" data-portfolio-gallery-viewport>
                        <div class="portfolio-gallery__carousel-container">
                          <?php foreach ($rest as $rest_item): ?>
                          <div class="portfolio-gallery__carousel-slide">
                            <a href="<?php echo wp_get_attachment_url($rest_item); ?>" data-fslightbox="gallery">
                              <img src="<?php echo wp_get_attachment_image_url($rest_item, 'thumbnail-s'); ?>" alt="">
                            </a>
                          </div>
                          <?php endforeach; ?>
                        </div>
                      </div>
                      <button class="portfolio-gallery__nav portfolio-gallery__nav--prev" type="button" data-portfolio-gallery-prev></button>
                      <button class="portfolio-gallery__nav portfolio-gallery__nav--next" type="button" data-portfolio-gallery-next></button>
                    </div>
                  </div>
                </div>
                <?php endif; ?>
                <div class="portfolio-item__title">
                  <?php echo get_the_title($item['id']); ?>
                </div>
                <div class="flex items-start justify-between mt-3 max-lg:flex-col md:gap-2 md:mt-4">
                  <div class="flex flex-wrap gap-1 items-start max-md:-mx-1.5">
                    <div class="portfolio-item__detail">
                      Сроки ремонта: <?php echo carbon_get_post_meta($item['id'], 'time'); ?>
                    </div>
                    <div class="portfolio-item__detail">
                      Площадь: <?php echo carbon_get_post_meta($item['id'], 'area'); ?>
                    </div>
                  </div>
                  <div class="portfolio-item__price">
                    <div class="portfolio-item__price-label">Цена: </div>
                    <div class="portfolio-item__price-value"><?php echo carbon_get_post_meta($item['id'], 'price'); ?></div>
                  </div>
                </div>
                <div class="mt-3 max-md:mt-2">
                  <button
                    type="button"
                    class="control-button"
                    data-feedback-button
                    data-feedback-button-subject="<?php echo esc_html($args['fields']['modal_title'] . ' / ' . get_the_title($item['id'])); ?>"
                    data-feedback-button-title="<?php echo esc_html($args['fields']['modal_title']); ?>"
                    data-feedback-button-desc="<?php echo esc_html($args['fields']['modal_desc']); ?>"
                    data-feedback-button-action="<?php echo esc_html($args['fields']['modal_action']); ?>"
                    data-feedback-button-goal="<?php echo $args['fields']['modal_goal']; ?>"
                  >
                    <?php echo $args['fields']['modal_action']; ?>
                  </button>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>

        <button class="portfolio-embla__nav portfolio-embla__nav--prev" type="button" data-portfolio-embla-prev></button>
        <button class="portfolio-embla__nav portfolio-embla__nav--next" type="button" data-portfolio-embla-next></button>
      </div>
    </div>
    <?php endif; ?>

  </div>
</section>
