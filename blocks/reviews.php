<section class="block-section reviews-section">
  <div class="container">
    <?php if ($title = $args['fields']['title']): ?>
    <div class="reviews-section__title"><?php echo nl2br($title); ?></div>
    <?php endif; ?>

    <?php if ($entries = $args['fields']['entries']): ?>
    <div class="reviews-section__grid">
      <?php foreach ($entries as $item): ?>
      <?php $post = get_post($item['id']); ?>
      <?php setup_postdata($post); ?>
      <?php get_template_part('partials/reviews-item'); ?>
      <?php endforeach; wp_reset_postdata(); ?>
    </div>
    <?php endif; ?>

    <div class="reviews-section__more">
      <a href="/reviews" class="control-button">
        <span>Показать ещё</span>
        <span class="icon icon-chevron-right"></span>
      </a>
    </div>
  </div>
</section>
