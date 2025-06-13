<?php
/*
Template Name: Портфолио
*/

$current_tag = get_query_var('tag');
$posts_for_terms_query = new WP_Query([
  'post_type' => 'portfolio',
  'posts_per_page' => -1
]);
$terms = get_terms([
  'taxonomy' => 'post_tag',
  'hide_empty' => true
]);
$posts_query = new WP_Query([
  'post_type' => 'portfolio',
  'tag' => $current_tag ?: null
]);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-screen">
    <?php get_template_part('partials/header'); ?>

    <div class="flex-grow">
      <div class="container">
        <div class="breadcrumbs">
          <a href="/">Главная</a>
          <i></i>
          <span><?php the_title(); ?></span>
        </div>

        <h1 class="page-title">
          <?php the_title(); ?>
        </h1>

        <?php if ($terms && !is_wp_error($terms)): ?>
        <ul class="portfolio-tags">
          <li<?php if (!$current_tag): ?> class="active"<?php endif; ?>>
            <a href="<?php the_permalink() ?>">Все</a>
          </li>
          <?php foreach ($terms as $term): ?>
          <li<?php if ($current_tag === $term->slug): ?> class="active"<?php endif; ?>>
            <a href="<?php the_permalink() ?>?tag=<?php echo $term->slug ?>"><?php echo $term->name ?></a>
          </li>
          <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <div
          class="pb-32 max-md:pb-20"
          data-portfolio-list
          data-portfolio-list-max-page="<?php echo $posts_query->max_num_pages; ?>"
          data-portfolio-list-current-page="<?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>"
          data-portfolio-list-current-tag="<?php echo $current_tag; ?>"
        >
          <div class="portfolio-grid" data-portfolio-list-wrap>
            <?php
            while ($posts_query->have_posts()) { 
              $posts_query->the_post();
              get_template_part('partials/portfolio-item');
            }
            wp_reset_postdata();
            ?>
          </div>
  
          <?php if ($posts_query->max_num_pages > 1) : ?>
          <button type="button" class="flex mx-auto mt-24 max-md:mt-16 primary-button font-bold text-lg w-56" data-portfolio-list-load>Показать ещё</button>
          <?php endif; ?>
        </div>

        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <?php 
      // get_template_part('blocks/estimate', null, [
      //   'fields' => [
      //     'title' => carbon_get_theme_option('estimate_title'),
      //     'example_image' => carbon_get_theme_option('estimate_example_image'),
      //     'example_action' => carbon_get_theme_option('estimate_example_action'),
      //     'manager_image' => carbon_get_theme_option('estimate_manager_image'),
      //     'manager_name' => carbon_get_theme_option('estimate_manager_name'),
      //     'manager_experience' => carbon_get_theme_option('estimate_manager_experience'),
      //     'manager_desc' => carbon_get_theme_option('estimate_manager_desc'),
      //     'form_action' => carbon_get_theme_option('estimate_form_action'),
      //     'form_goal' => carbon_get_theme_option('estimate_form_goal'),
      //   ]
      // ]);
    ?>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
