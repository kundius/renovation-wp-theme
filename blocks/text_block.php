<section class="text-section">
  <div class="container">
    <?php if ($title = $args['fields']['title']): ?>
    <h1 class="text-section__title"><?php echo nl2br($title); ?></h1>
    <?php endif; ?>
    <?php if ($content = $args['fields']['content']): ?>
    <div class="text-section__content"><?php echo nl2br($content); ?></div>
    <?php endif; ?>
  </div>
</section>
