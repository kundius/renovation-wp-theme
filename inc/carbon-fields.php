<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;
use Carbon_Fields\Block;

add_action('after_setup_theme', function () {
  \Carbon_Fields\Carbon_Fields::boot();
});

add_action('admin_head', function () {
  echo '<style>
    [data-type="carbon-fields/completion-date"]::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      right: 0;
      bottom: 0;
      border: .125em solid #6b6d89;
      background: #f0f0f0;
    }

    [data-type="carbon-fields/completion-date"] .cf-block__fields {
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

    [data-type="carbon-fields/completion-date"] .cf-block__fields > .cf-field.cf-set:nth-child(2) {
      position: absolute;
      right: 24px;
      top: 16px;
      z-index: 20;
    }

    [data-type="carbon-fields/completion-date"] .cf-block__fields > .cf-field.cf-set:nth-child(2) .cf-field__head label {
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

    [data-type="carbon-fields/completion-date"] .cf-block__fields > .cf-field.cf-set:nth-child(2) .cf-field__body {
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

    [data-type="carbon-fields/completion-date"] .cf-block__fields > .cf-field.cf-set:nth-child(2):hover .cf-field__body {
      display: block;
    }

    [data-type="carbon-fields/completion-date"] .cf-block__fields > .cf-field.cf-set:nth-child(2) .cf-field__body .cf-set__list {
      padding: 0;
    }
  </style>';
});

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields()
{
  
  // set_conditional_logic скрывает или удаляет?
Block::make('completion_date', 'Сроки выполнения')
  ->add_fields([
    Field::make('html', 'crb_block_name')
      ->set_html('<div class="cf-block__fields__title">Сроки выполнения</div>'),
    // Field::make('checkbox', 'crb_block_edit', 'Редактировать'),
    Field::make('set', 'crb_block_edit', 'Редактировать')
      ->set_options([
        'crb_fields_title' => 'Заголовок',
        'crb_title_desc' => 'Описание',
      ]),
    
    Field::make('text', 'crb_fields_title', 'Заголовок')
      ->set_conditional_logic([[ 'field' => 'crb_block_edit', 'value' => 'crb_fields_title', 'compare' => 'INCLUDES' ]]),

    Field::make('textarea', 'crb_title_desc', 'Описание')
      ->set_conditional_logic([[ 'field' => 'crb_block_edit', 'value' => 'crb_title_desc', 'compare' => 'INCLUDES' ]]),

    // Field::make('text', 'heading', 'Заголовок')
    //   ->set_conditional_logic([
    //     [ 'field' => 'crb_block_edit', 'value' => true ],
    //     [ 'field' => 'crb_fields_title_edit', 'value' => true ]
    //   ])
    //   ->set_width(80),
    // Field::make('html', 'crb_fields_title_placeholder', 'Заголовок placeholdr')
    //   ->set_html('<input type="text" disabled class="cf-text__input" value="Заголовок placeholdr">')
    //   ->set_conditional_logic([
    //     [ 'field' => 'crb_block_edit', 'value' => true ],
    //     [ 'field' => 'crb_fields_title_edit', 'value' => false ]
    //   ])
    //   ->set_width(80),
    // Field::make('checkbox', 'crb_fields_title_edit', 'Редактировать')
    //   ->set_conditional_logic([
    //     [ 'field' => 'crb_block_edit', 'value' => true ]
    //   ])->set_width(20),

    // Field::make('text', 'heading', 'Заголовок')->set_conditional_logic([[ 'field' => 'crb_edit', 'value' => true ], [ 'field' => 'heading_edit', 'value' => true ]])->set_width(80),
    // Field::make('text', 'heading_placeholder', 'Заголовок placeholder')->set_attribute('placeholder', 'heading_placeholder')->set_conditional_logic(['relation' => 'AND', [ 'field' => 'crb_edit', 'value' => true ], [ 'field' => 'heading_edit', 'value' => false ]])->set_width(80),
    // Field::make('checkbox', 'heading_edit', 'Редактировать')->set_conditional_logic([[ 'field' => 'crb_edit', 'value' => true ]])->set_width(20),

    // Field::make('rich_text', 'content', __( 'Block Content' ))->set_conditional_logic([[ 'field' => 'crb_edit', 'value' => true ]]),
  ])
  ->set_category('layout')
  ->set_mode('edit')
  ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
  ?>

<div class="block">
  <pre>
    <?php print_r($fields) ?>
  </pre>  

  <div class="block__heading">
    <h1><?php echo esc_html( $fields['heading'] ); ?></h1>
  </div><!-- /.block__heading -->

  <div class="block__image">
    <?php echo wp_get_attachment_image( $fields['image'], 'full' ); ?>
  </div><!-- /.block__image -->

  <div class="block__content">
    <?php echo apply_filters( 'the_content', $fields['content'] ); ?>
  </div><!-- /.block__content -->
</div><!-- /.block -->

  <?php
  });

  Container::make('theme_options', 'Параметры')
    ->set_page_parent('themes.php')
    ->add_fields([
      Field::make('text', 'crb_theme_phone', 'Телефон'),
      Field::make('text', 'crb_theme_email', 'Почта'),
      Field::make('textarea', 'crb_theme_copyright', 'Копирайт')->set_rows(2),
      Field::make('textarea', 'crb_theme_counters', 'Счетчики')->set_rows(2),
      Field::make('textarea', 'crb_theme_address', 'Адрес')->set_rows(2),
      Field::make('textarea', 'crb_theme_map', 'Карта')->set_rows(2),
      Field::make('complex', 'crb_theme_social', 'Социальные сети')->add_fields([
        Field::make('image', 'icon', 'Иконка')->set_width(50),
        Field::make('text', 'url', 'Ссылка')->set_width(50),
      ]),
    ]);

  Container::make('post_meta', 'SEO')
    ->where('post_type', '=', 'page')
    ->or_where('post_type', '=', 'post')
    ->add_fields([
      Field::make('text', 'crb_seo_title', 'Заголовок'),
      Field::make('text', 'crb_seo_keywords', 'Ключевые слова'),
      Field::make('textarea', 'crb_seo_description', 'Описание'),
    ]);

  Container::make('post_meta', 'Подробности')
    ->where('post_type', '=', 'minister')
    ->add_fields([
      Field::make('text', 'crb_rank', 'Сан'),
      Field::make('text', 'crb_description', 'Краткое описание'),
      Field::make('complex', 'crb_awards', 'Награды')->add_fields([
        Field::make('text', 'name', ''),
      ]),
    ]);

  Container::make('post_meta', 'Записки')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-notes.php')
    ->add_fields([
      Field::make('complex', 'crb_commemoration_types', 'Типы помина')->add_fields([
        Field::make('text', 'name', 'Название'),
        Field::make('text', 'short', 'Короткое название'),
      ]),
    ]);

  Container::make('post_meta', 'Расписание')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-schedule.php')
    ->add_fields([
      Field::make('complex', 'crb_schedule', '')
        ->add_fields([
          Field::make('text', 'name', 'Название недели'),
          Field::make('complex', 'days', '')
            ->add_fields([
              Field::make('date', 'date', 'Дата'),
              Field::make('textarea', 'desc', 'Описание')->set_rows(2),
              Field::make('complex', 'parts', '')
                ->add_fields([
                  Field::make('text', 'name', 'Название'),
                  Field::make('complex', 'items', 'Список богослужений')
                    ->add_fields([
                      Field::make('text', 'time', 'Время')->set_width(50),
                      Field::make('text', 'name', 'Название')->set_width(50),
                    ])
                    ->setup_labels([
                      'plural_name' => 'Богослужения',
                      'singular_name' => 'Богослужение',
                    ]),
                ])
                ->set_layout('tabbed-horizontal')
                ->set_header_template('<%- name %>')
                ->setup_labels([
                  'plural_name' => 'Части суток',
                  'singular_name' => 'Часть суток',
                ]),
            ])
            ->set_layout('tabbed-horizontal')
            ->set_header_template('<%- date %>')
            ->setup_labels([
              'plural_name' => 'Дни',
              'singular_name' => 'День',
            ]),
        ])
        ->set_layout('tabbed-vertical')
        ->set_header_template('<%- name %>')
        ->setup_labels([
          'plural_name' => 'Недели',
          'singular_name' => 'Неделя',
        ]),
    ]);

  Container::make('post_meta', 'Ответы на вопросы')
    ->where('post_type', '=', 'page')
    ->where('post_template', '=', 'template-answers.php')
    ->add_fields([
      Field::make('complex', 'crb_answers', '')
        ->add_fields([
          Field::make('textarea', 'question_content', 'Содержимое вопроса'),
          Field::make('textarea', 'answer_content', 'Содержимое ответа'),
          Field::make('separator', 'author', 'Автор ответа'),
          Field::make('text', 'author_name', 'Имя'),
          Field::make('text', 'author_rank', 'Сан'),
          Field::make('image', 'author_photo', 'Фото'),
        ])
        ->set_layout('tabbed-vertical')
        ->set_header_template('<%- question_content %>'),
    ]);

  Container::make('post_meta', 'Видео')
    ->where('post_type', '=', 'preaching')
    ->add_fields([Field::make('text', 'crb_embed_url', 'Ссылка на видео')]);

  Container::make('post_meta', 'Фотографии')
    ->where('post_type', '=', 'photoalbum')
    ->add_fields([
      Field::make('media_gallery', 'crb_media_gallery', 'Фотографии')
        ->set_type(['image'])
    ]);
}
