<section class="block-section trust-section">
  <div class="container">
    <div class="trust-section__layout">
      <div class="trust-section__layout-left">
        <?php if ($title = $args['fields']['title']): ?>
        <div class="trust-section__title"><?php echo nl2br($title); ?></div>
        <?php endif; ?>
        <?php if ($subtitle = $args['fields']['subtitle']): ?>
        <div class="trust-section__desc"><?php echo nl2br($subtitle); ?></div>
        <?php endif; ?>
        <?php if ($list = $args['fields']['list']): ?>
        <div class="trust-section__grid">
          <?php foreach ($list as $item): ?>
          <div class="trust-card">
            <div class="trust-card__check"><span class="icon icon-check"></span></div>
            <div class="trust-card__title"><?php echo nl2br($item['title']); ?></div>
            <div class="trust-card__desc"><?php echo nl2br($item['desc']); ?></div>
          </div>
          <?php endforeach; ?>
        </div>
        <?php endif; ?>
      </div>
      <div class="trust-section__layout-right">
        <div class="trust-contract">
          <?php if ($contract_desc = $args['fields']['contract_desc']): ?>
          <div class="trust-contract__desc"><?php echo nl2br($contract_desc); ?></div>
          <?php endif; ?>
          <?php if ($contract_image = $args['fields']['contract_image']): ?>
          <div class="trust-contract__figure">
            <?php echo wp_get_attachment_image($contract_image, 'full'); ?>
            <?php if ($contract_file = $args['fields']['contract_file']): ?>
            <a href="<?php echo wp_get_attachment_image_url($contract_file, 'full'); ?>" class="primary-button primary-button--small trust-contract__download" download>
              <span><?php echo $args['fields']['contract_action']; ?></span>
              <span class="icon icon-download"></span>
            </a>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
