<?php
/*
Template Name: Портфолио
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> itemscope itemtype="http://schema.org/WebSite">

<head>
  <?php get_template_part('partials/head'); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <div class="flex flex-col min-h-scree">
    <?php get_template_part('partials/header'); ?>

    <div class="container">
      <div class="breadcrumbs">
        <a href="/">Главная</a>
        <i></i>
        <span><?php the_title(); ?></span>
      </div>
      <h1 class="page-title">
        <?php the_title(); ?>
      </h1>
      <div class="page-content">
        <?php the_content(); ?>
      </div>
    </div>

    <?php 
      get_template_part('blocks/estimate', null, [
        'fields' => [
          'title' => carbon_get_theme_option('estimate_title'),
          'example_image' => carbon_get_theme_option('estimate_example_image'),
          'example_action' => carbon_get_theme_option('estimate_example_action'),
          'manager_image' => carbon_get_theme_option('estimate_manager_image'),
          'manager_name' => carbon_get_theme_option('estimate_manager_name'),
          'manager_experience' => carbon_get_theme_option('estimate_manager_experience'),
          'manager_desc' => carbon_get_theme_option('estimate_manager_desc'),
          'form_action' => carbon_get_theme_option('estimate_form_action'),
          'form_goal' => carbon_get_theme_option('estimate_form_goal'),
        ]
      ]);
    ?>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
