<?php
/*
Template Name: Контакты
*/
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

        <div class="page-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>

    <?php get_template_part('partials/footer'); ?>
  </div>
</body>

</html>
