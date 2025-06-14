<?php
$posts_query = new WP_Query([
  'post_type' => 'portfolio'
]);
?>

<div
  class="pb-32 max-md:pb-20"
  data-reviews-list
  data-reviews-list-max-page="<?php echo $posts_query->max_num_pages; ?>"
  data-reviews-list-current-page="<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>"
>
  <div class="portfolio-grid" data-reviews-list-wrap>
    <?php
    while ($posts_query->have_posts()) { 
      $posts_query->the_post();
      get_template_part('partials/reviews-item');
    }
    wp_reset_postdata();
    ?>
  </div>

  <?php if ($posts_query->max_num_pages > 1) : ?>
  <button type="button" class="flex mx-auto mt-24 max-md:mt-16 primary-button font-bold text-lg w-56" data-reviews-list-load>Показать ещё</button>
  <?php endif; ?>
</div>
