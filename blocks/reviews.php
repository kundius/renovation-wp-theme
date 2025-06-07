<section class="reviews-section">
  <div class="container">
    <?php if ($title = $args['fields']['title']): ?>
    <div class="reviews-section__title"><?php echo nl2br($title); ?></div>
    <?php endif; ?>

    <?php if ($entries = $args['fields']['entries']): ?>
    <div class="reviews-section__grid">
      <?php foreach ($entries as $item): ?>
      <?php $code = carbon_get_post_meta($item['id'], 'code'); ?>
      <?php $image = carbon_get_post_meta($item['id'], 'image'); ?>
      <div class="reviews-item">
        <div class="reviews-item__title">
          <?php echo get_the_title($item['id']); ?>
        </div>
        <a
          href="<?php if ($code): echo '#video-' . $item['id']; else: echo wp_get_attachment_url($image); endif; ?>"
          class="reviews-item__preview"
          data-fslightbox="video"
        >
          <?php echo get_the_post_thumbnail($item['id'], 'thumbnail-l', ['class' => 'reviews-item__image']); ?>
          <span class="reviews-item__trigger">
            <?php if ($code): ?>
            <span class="icon icon-circle-play"></span>
            <?php else: ?>
            <span class="icon icon-search"></span>
            <?php endif; ?>
          </span>
        </a>
        <?php if ($code): ?>
        <div class="hidden">
          <div id="video-<?php echo $item['id']; ?>">
            <?php echo $code; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <div class="reviews-section__more">
      <a href="#" class="control-button">
        <span>Показать ещё</span>
        <span class="icon icon-chevron-right"></span>
      </a>
    </div>
  </div>
</section>
