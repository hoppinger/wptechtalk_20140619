<?php if ( $img_ID = get_field('header_image') ) : ?>
  <?php echo wp_get_attachment_image( $img_ID , 'full' ); ?>
<?php endif; ?>

<?php if ( $intro_text = get_field('introduction_text') ) : ?>
  <?php echo $intro_text; ?>
<?php endif;
