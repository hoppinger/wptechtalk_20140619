<?php 
$group = array (
  'id' => '52d7a8fd0fd52',
  'title' => 'Nieuws',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_52d7a3cdc1341',
      'label' => 'Afbeelding',
      'name' => 'news_img',
      '_name' => 'news_img',
      'type' => 'image',
      'order_no' => 0,
      'instructions' => 'Minimale afmeting 715x320px of groter met eenzelfde verhouding.',
      'required' => 0,
      'id' => 'acf-field-news_img',
      'class' => 'image',
      'conditional_logic' => 
      array (
        'status' => 0,
        'rules' => 
        array (
          0 => 
          array (
            'field' => 'null',
            'operator' => '==',
          ),
        ),
        'allorany' => 'all',
      ),
      'save_format' => 'object',
      'preview_size' => 'thumbnail',
      'library' => 'all',
      'field_group' => 106,
    ),
    1 => 
    array (
      'key' => 'field_52d7a3fbc1342',
      'label' => 'Auteur',
      'name' => 'news_author',
      '_name' => 'news_author',
      'type' => 'text',
      'order_no' => 1,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-news_author',
      'class' => 'text',
      'conditional_logic' => 
      array (
        'status' => 0,
        'rules' => 
        array (
          0 => 
          array (
            'field' => 'null',
            'operator' => '==',
            'value' => '',
          ),
        ),
        'allorany' => 'all',
      ),
      'default_value' => '',
      'placeholder' => '',
      'prepend' => '',
      'append' => '',
      'formatting' => 'html',
      'maxlength' => '',
      'field_group' => 106,
    ),
  ),
  'location' => 
  array (
    0 => 
    array (
      0 => 
      array (
        'param' => 'post_type',
        'operator' => '==',
        'value' => 'newsarticle',
        'order_no' => 0,
        'group_no' => 0,
      ),
    ),
  ),
  'options' => 
  array (
    'position' => 'normal',
    'layout' => 'default',
    'hide_on_screen' => 
    array (
    ),
  ),
  'menu_order' => 0,
);