<?php

add_action('wp_enqueue_scripts', 'ajax_data', 99);

function ajax_data()
{
  wp_localize_script('scripts', 'theme_ajax', [
    'url' => admin_url('admin-ajax.php'),
  ]);
}

function portfolio_list_load_callback() {
    $posts_query = new WP_Query([
      'post_type' => 'portfolio',
      'tag' => $_POST['tag'] ?: null,
      'paged' => $_POST['page'] ?: 1
    ]);

    while ($posts_query->have_posts()) { 
      $posts_query->the_post();
      get_template_part('partials/portfolio-item');
    }
    
    wp_reset_postdata();

    die();
}
 
add_action('wp_ajax_portfolio_list_load', 'portfolio_list_load_callback');
add_action('wp_ajax_nopriv_portfolio_list_load', 'portfolio_list_load_callback');
