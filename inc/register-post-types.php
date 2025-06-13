<?php
add_action('init', 'register_post_types');

function register_post_types()
{
  register_post_type('portfolio', [
    'label' => null,
    'labels' => [
      'name' => 'Портфолио',
      'singular_name' => 'Портфолио',
      'add_new' => 'Добавить Портфолио',
      'add_new_item' => 'Добавить Портфолио',
      'edit_item' => 'Редактировать Портфолио',
      'new_item' => 'Новая Портфолио',
      'view_item' => 'Смотреть Портфолио',
      'search_items' => 'Искать Портфолио',
      'not_found' => 'Не найдено',
      'not_found_in_trash' => 'Не найдено в корзине',
      'parent_item_colon' => '',
      'menu_name' => 'Портфолио',
    ],
    'description' => '',
    'public' => true,
    'show_in_menu' => null,
    'show_in_rest' => null,
    'rest_base' => null,
    'menu_position' => null,
    'menu_icon' => 'dashicons-media-document',
    'hierarchical' => false,
    'supports' => ['title'],
    'taxonomies' => ['post_tag'],
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
  ]);

  register_post_type('review', [
    'label' => null,
    'labels' => [
      'name' => 'Отзыв',
      'singular_name' => 'Отзыв',
      'add_new' => 'Добавить Отзыв',
      'add_new_item' => 'Добавить Отзыв',
      'edit_item' => 'Редактировать Отзыв',
      'new_item' => 'Новая Отзыв',
      'view_item' => 'Смотреть Отзыв',
      'search_items' => 'Искать Отзыв',
      'not_found' => 'Не найдено',
      'not_found_in_trash' => 'Не найдено в корзине',
      'parent_item_colon' => '',
      'menu_name' => 'Отзывы',
    ],
    'description' => '',
    'public' => true,
    'show_in_menu' => null,
    'show_in_rest' => null,
    'rest_base' => null,
    'menu_position' => null,
    'menu_icon' => 'dashicons-media-document',
    'hierarchical' => false,
    'supports' => ['title', 'thumbnail'],
    'taxonomies' => [],
    'has_archive' => false,
    'rewrite' => true,
    'query_var' => true,
  ]);
}
