<?php 
$group = array (
  'id' => '53a1affacf619',
  'title' => 'Header',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_53a1a84f000ca',
      'label' => 'Header afbeelding',
      'name' => 'header_image',
      '_name' => 'header_image',
      'type' => 'image',
      'order_no' => 0,
      'instructions' => 'Upload een afbeelding van tenminste 600px x 200px voor het beste resultaat.',
      'required' => 0,
      'id' => 'acf-field-header_image',
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
            'value' => '',
          ),
        ),
        'allorany' => 'all',
      ),
      'save_format' => 'id',
      'preview_size' => 'medium',
      'library' => 'all',
      'field_group' => 7,
    ),
    1 => 
    array (
      'key' => 'field_53a1ab7e87048',
      'label' => 'Introductie tekst',
      'name' => 'introduction_text',
      '_name' => 'introduction_text',
      'type' => 'textarea',
      'order_no' => 1,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-introduction_text',
      'class' => 'textarea',
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
      'default_value' => '',
      'placeholder' => '',
      'maxlength' => '',
      'rows' => '',
      'formatting' => 'br',
      'field_group' => 7,
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
        'value' => 'page',
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