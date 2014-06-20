<?php 
$group = array (
  'id' => '53a1affad3e2c',
  'title' => 'Tekst Blokken',
  'fields' => 
  array (
    0 => 
    array (
      'key' => 'field_53a1ac989b7f0',
      'label' => 'Tekst blokken (let op: hiervoor moet de repeater addon geïnstalleerd zijn)',
      'name' => 'text_blocks',
      '_name' => 'text_blocks',
      'type' => 'repeater',
      'order_no' => 0,
      'instructions' => '',
      'required' => 0,
      'id' => 'acf-field-text_blocks',
      'class' => 'repeater',
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
      'sub_fields' => 
      array (
        0 => 
        array (
          'key' => 'field_53a1acbb9b7f1',
          'label' => 'Titel',
          'name' => 'title',
          '_name' => 'title',
          'type' => 'text',
          'order_no' => 0,
          'instructions' => '',
          'required' => 0,
          'id' => 'acf-field-title',
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
          'column_width' => '',
          'default_value' => '',
          'placeholder' => '',
          'prepend' => '',
          'append' => '',
          'formatting' => 'html',
          'maxlength' => '',
        ),
        1 => 
        array (
          'key' => 'field_53a1accb9b7f2',
          'label' => 'Content',
          'name' => 'content',
          '_name' => 'content',
          'type' => 'wysiwyg',
          'order_no' => 1,
          'instructions' => '',
          'required' => 0,
          'id' => 'acf-field-content',
          'class' => 'wysiwyg',
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
          'column_width' => '',
          'default_value' => '',
          'toolbar' => 'full',
          'media_upload' => 'yes',
        ),
      ),
      'row_min' => '',
      'row_limit' => '',
      'layout' => 'row',
      'button_label' => 'Nieuw Blok',
      'field_group' => 16,
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
  'menu_order' => 2,
);