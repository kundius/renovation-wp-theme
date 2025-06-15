<?php

add_action('wp_enqueue_scripts', 'ajax_data', 99);

function ajax_data()
{
  wp_localize_script('scripts', 'theme_ajax', [
    'url' => admin_url('admin-ajax.php'),
  ]);
}

function portfolio_list_load_callback()
{
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

function category_list_load_callback()
{
    $posts_query = new WP_Query([
      'post_type' => 'post',
      'orderby' => [
        'is_sticky' => 'DESC',
        'date' => 'DESC',
      ],
      'paged' => $_POST['page'] ?: 1,
      'cat' => $_POST['category'] ?: null
    ]);

    while ($posts_query->have_posts()) { 
      $posts_query->the_post();
      get_template_part('partials/actions-item');
    }
    
    wp_reset_postdata();

    die();
}
 
add_action('wp_ajax_category_list_load', 'category_list_load_callback');
add_action('wp_ajax_nopriv_category_list_load', 'category_list_load_callback');


add_action('wp_ajax_feedack_action', 'feedack_action_callback');
add_action('wp_ajax_nopriv_feedack_action', 'feedack_action_callback');

function feedack_action_callback()
{
  $errors = [];

  if (!wp_verify_nonce($_POST['nonce'], 'feedback-nonce')) {
    wp_die('Данные отправлены с неподдерживаемого адреса');
  }

  if (!empty($_POST['submitted'])) {
    $errors['submitted'] = 'Что?';
  }

  if (empty($_POST['your-phone'])) {
    $errors['your-phone'] = 'Укажите Ваш телефон.';
  }

  if ($errors) {
    wp_send_json_error($errors);
  } else {
    $email_to = get_option('admin_email');

    $rows = [];
    $rows[] = 'Телефон: ' . sanitize_text_field($_POST['phone']);
    $body = implode("\n", $rows);

    $subject = $_POST['subject'];

    wp_mail($email_to, $subject, $body);

    wp_send_json_success();
  }

  wp_die();
}
