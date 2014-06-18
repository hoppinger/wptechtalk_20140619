<?php

if( $img_ID = get_field('header_image') ) {
  echo wp_get_attachment_image( $img_ID , 'full' ); 
}

if( $intro_text = get_field('introduction_text') ) {
  echo $intro_text; 
}