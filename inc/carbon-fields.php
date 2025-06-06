<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

$theme_options_container = null;

add_action('after_setup_theme', function () {
  \Carbon_Fields\Carbon_Fields::boot();
});

add_action('admin_head', function () {
  echo '<style>
    [data-type^="carbon-fields/block"] {
      position: relative;
      z-index: 1;
    }
    
    [data-type^="carbon-fields/block"].is-hovered {
      z-index: 2;
    }

    [data-type^="carbon-fields/block"]::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      border: .125em solid #6b6d89;
      background: #f0f0f0;
    }

    [data-type^="carbon-fields/block"] .cf-block__fields {
      position: relative;
      padding: 16px 24px;
      z-index: 2;
    }

    .cf-block__fields__title {
      margin: 0;
      font-size: 20px;
      font-weight: 500;
      color: #000;
      line-height: 32px;
    }

    [data-type^="carbon-fields/block"] .cf-block__fields > .cf-field.cf-set:nth-child(2) {
      position: absolute;
      right: 24px;
      top: 16px;
      z-index: 20;
    }

    [data-type^="carbon-fields/block"] .cf-block__fields > .cf-field.cf-set:nth-child(2) .cf-field__head label {
      display: block;
      margin: 0;
      background: var(--wp-components-color-accent, var(--wp-admin-theme-color, #3858e9));
      color: var(--wp-components-color-accent-inverted, #fff);
      outline: 1px solid #0000;
      text-decoration: none;
      text-shadow: none;
      white-space: nowrap;
      height: 32px;
      line-height: 32px;
      padding: 0 12px;
    }

    [data-type^="carbon-fields/block"] .cf-block__fields > .cf-field.cf-set:nth-child(2) .cf-field__body {
      display: none;
      position: absolute;
      right: 8px;
      top: 100%;
      background: #fff;
      border-radius: 4px;
      box-shadow: 0 0 0 1px #ccc, 0 2px 3px #0000000d, 0 4px 5px #0000000a, 0 12px 12px #00000008, 0 16px 16px #00000005;
      box-sizing: border-box;
      width: min-content;
      white-space: nowrap;
      padding: 8px 12px;
      min-width: 160px;
    }

    [data-type^="carbon-fields/block"] .cf-block__fields > .cf-field.cf-set:nth-child(2):hover .cf-field__body {
      display: block;
    }

    [data-type^="carbon-fields/block"] .cf-block__fields > .cf-field.cf-set:nth-child(2) .cf-field__body .cf-set__list {
      padding: 0;
    }
  </style>';
});

function create_block($key, $name, $fields) {
  global $theme_options_container;
  
  foreach ($fields as $field) {
    // добавить к простым названиям название блока, чтобы в опциях они были уникальны
    $field->set_base_name($key . '_' . $field->get_base_name());
    // добавить условную логику
    $field->set_conditional_logic([[
      'field' => $key . '_block_fields',
      'value' => $field->get_base_name(),
      'compare' => 'INCLUDES'
    ]]);
  }

  // список полей для переключателя
  $edit_fields = [];
  foreach ($fields as $field) {
    $edit_fields[$field->get_base_name()] = $field->get_label();
  }

  $block_fields = array_merge([
    Field::make('html', $key . '_block_name')->set_html('<div class="cf-block__fields__title">' . $name . '</div>'),
    Field::make('set', $key . '_block_fields', 'Редактировать')->set_options($edit_fields)
  ], $fields);
  $theme_options_fields = array_merge([
    // условная логика в опциях применяется тоже, поэтому необходимо список полей добавить и туда
    Field::make('set', $key . '_block_fields', 'Редактировать')
      ->set_options($edit_fields)
      ->set_default_value(array_keys($edit_fields))
      // ->set_conditional_logic([[ 'field' => $key . '_block_fields' ]])
  ], $fields);

  Container::make('theme_options', $name)
    ->set_page_parent($theme_options_container)
    ->add_fields($theme_options_fields);

  Block::make('block_' . $key, $name)
    ->add_fields($block_fields)
    ->set_category('layout')
    ->set_mode('edit')
    ->set_render_callback(function ($fields, $attributes, $inner_blocks) use ($key) {
      $block_name = $fields[$key . '_block_name'];
      $block_fields = $fields[$key . '_block_fields'];

      unset($fields[$key . '_block_name']);
      unset($fields[$key . '_block_fields']);

      $args_fields = [];

      foreach ($fields as $field_key => $field_value) {
        $short_key = str_replace($key . '_', '', $field_key);
        if (in_array($field_key, $block_fields)) {
          $args_fields[$short_key] = $field_value;
        } else {
          $args_fields[$short_key] = carbon_get_theme_option($field_key);
        }
      }

      get_template_part('blocks/' . $key, null, [
        'fields' => $args_fields
      ]);
    });
}

add_action('carbon_fields_register_fields', 'register_carbon_fields_blocks');
function register_carbon_fields_blocks()
{
  global $theme_options_container;
  
  Container::make('post_meta', 'Портфолио')
    ->where('post_type', '=', 'portfolio')
    ->add_fields([
      Field::make('text', 'time', 'Сроки ремонта'),
      Field::make('text', 'area', 'Площадь'),
      Field::make('text', 'price', 'Цена'),
      Field::make('media_gallery', 'gallery', 'Галерея'),
    ]);

  $theme_options_container = Container::make('theme_options', 'Параметры')
    ->add_fields([
      Field::make('separator', 'crb_theme', 'Общее'),
      Field::make('text', 'crb_theme_phone', 'Телефон')->set_help_text('Шорткод для блоков: {crb_theme_phone}'),
      Field::make('text', 'crb_theme_telegram', 'Telegram')->set_help_text('Шорткод для блоков: {crb_theme_telegram}'),
      Field::make('text', 'crb_theme_whatsapp', 'Whatsapp')->set_help_text('Шорткод для блоков: {crb_theme_whatsapp}'),
      Field::make('text', 'crb_theme_working_hours', 'Время работы')->set_help_text('Шорткод для блоков: {crb_theme_working_hours}'),
      Field::make('text', 'crb_theme_working_hours_short', 'Время работы кратко')->set_help_text('Шорткод для блоков: {crb_theme_working_hours_short}'),
      Field::make('textarea', 'crb_theme_address', 'Адрес')->set_help_text('Шорткод для блоков: {crb_theme_address}')->set_rows(4),
      Field::make('textarea', 'crb_theme_contacts', 'Контакты')->set_help_text('Шорткод для блоков: {crb_theme_contacts}')->set_rows(4),
      Field::make('text', 'crb_theme_site_name', 'Название сайта')->set_help_text('Шорткод для блоков: {crb_theme_site_name}'),
      Field::make('text', 'crb_theme_slogan', 'Слоган')->set_help_text('Шорткод для блоков: {crb_theme_slogan}'),

      Field::make('separator', 'crb_header', 'Шапка'),
      Field::make('text', 'crb_header_city', 'Выбранный город'),
      Field::make('complex', 'crb_header_cities', 'Список городов')->add_fields([
        Field::make('text', 'name', 'Название')->set_width(50),
        Field::make('text', 'url', 'Ссылка')->set_width(50),
      ]),

      Field::make('separator', 'crb_fixed', 'Закреп'),
      Field::make('textarea', 'crb_fixed_message', 'Сообщение')->set_rows(2),
      Field::make('textarea', 'crb_fixed_button', 'Текст кнопки в закрепе')->set_rows(2),
      Field::make('textarea', 'crb_fixed_modal_title', 'Заголовок в диалоге')->set_rows(2),
      Field::make('textarea', 'crb_fixed_modal_action', 'Текст кнопки в диалоге')->set_rows(2),
      Field::make('textarea', 'crb_fixed_modal_desc', 'Описание в диалоге')->set_rows(2),
      Field::make('text', 'crb_fixed_modal_goal', 'Цель в метрике'),

      Field::make('separator', 'crb_callback', 'Заказать звонок'),
      Field::make('text', 'crb_callback_title', 'Заголовок в диалоге'),
      Field::make('text', 'crb_callback_action', 'Текст кнопки в диалоге'),
      Field::make('textarea', 'crb_callback_desc', 'Описание в диалоге')->set_rows(2),

      Field::make('separator', 'crb_footer', 'Подвал'),
      Field::make('textarea', 'crb_footer_info', 'Информация')->set_rows(2),
      Field::make('textarea', 'crb_footer_copyright', 'Копирайт')->set_rows(2),
    ]);

  create_block('intro', 'Интро', [
    Field::make('textarea', 'title', 'Заголовок')->set_rows(2),
    Field::make('textarea', 'desc', 'Описание')->set_rows(2),
    Field::make('textarea', 'list', 'Список (строки)')->set_rows(4),
    Field::make('text', 'action', 'Действие'),
    Field::make('image', 'background', 'Фон'),

    Field::make('textarea', 'modal_title', 'Диалог / Заголовок')->set_rows(2),
    Field::make('textarea', 'modal_desc', 'Диалог / Описание')->set_rows(2),
    Field::make('text', 'modal_action', 'Диалог / Действие'),
    Field::make('text', 'modal_goal', 'Диалог / Цель в метрике'),

    Field::make('textarea', 'form_title', 'Форма / Заголовок')->set_rows(2),
    Field::make('complex', 'form_repair_types', 'Форма / Типы ремонта')->add_fields([
      Field::make('text', 'name', 'Форма / Название')->set_width(50),
      Field::make('text', 'price', 'Форма / Цена за м2')->set_width(50),
    ]),
    Field::make('text', 'form_action', 'Форма / Действие'),
    Field::make('text', 'form_goal', 'Форма / Цель в метрике'),
  ]);

  create_block('about', 'О компании', [
    Field::make('textarea', 'title', 'Заголовок')->set_rows(2),
    Field::make('textarea', 'subtitle', 'Подзаголовок')->set_rows(2),
    Field::make('rich_text', 'content', 'Текст'),
    Field::make('complex', 'cards', 'Карточки')->add_fields([
      Field::make('image', 'image', 'Изображение')->set_width(50),
      Field::make('text', 'name', 'Название')->set_width(50),
    ]),
  ]);

  create_block('quiz', 'Квиз', [
    Field::make('textarea', 'title', 'Заголовок')->set_rows(2),
    Field::make('complex', 'steps', 'Шаги')->add_fields([
      Field::make('textarea', 'question', 'Вопрос')->set_rows(2)->set_width(50),
      Field::make('image', 'image', 'Изображение')->set_width(50),
      Field::make('complex', 'options', 'Варианты')->add_fields([
        Field::make('text', 'name', 'Текст'),
      ]),
    ]),

    Field::make('textarea', 'bonus_title', 'Бонусы / Заголовок')->set_rows(2),
    Field::make('complex', 'bonus_list', 'Бонусы / Список')->add_fields([
      Field::make('image', 'image', 'Изображение')->set_width(50),
      Field::make('text', 'name', 'Название')->set_width(50),
    ]),

    Field::make('textarea', 'finish_title', 'Завершение / Заголовок')->set_rows(2),
    Field::make('textarea', 'finish_subtitle', 'Завершение / Подзаголовок')->set_rows(2),
    Field::make('textarea', 'finish_action', 'Завершение / Действие')->set_rows(2),
    Field::make('text', 'finish_goal', 'Завершение / Цель в метрике'),
    Field::make('image', 'finish_image', 'Завершение / Изображение'),
    Field::make('complex', 'finish_options', 'Завершение / Варианты')->add_fields([
      Field::make('text', 'name', 'Текст'),
    ]),
  ]);

  create_block('portfolio', 'Портфолио', [
    Field::make('textarea', 'title', 'Заголовок')->set_rows(2),
    Field::make('textarea', 'subtitle', 'Подзаголовок')->set_rows(2),
    Field::make('association', 'items', 'Список')->set_types([
      [
        'type' => 'post',
        'post_type' => 'portfolio',
      ]
    ]),

    Field::make('textarea', 'modal_title', 'Диалог / Заголовок')->set_rows(2),
    Field::make('textarea', 'modal_desc', 'Диалог / Описание')->set_rows(2),
    Field::make('text', 'modal_action', 'Диалог / Действие'),
    Field::make('text', 'modal_goal', 'Диалог / Цель в метрике'),
  ]);

}
