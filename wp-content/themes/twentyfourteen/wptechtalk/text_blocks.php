<?php if( have_rows('text_blocks') ):?>
 
    <?php while ( have_rows('text_blocks') ) : the_row(); ?>
 
      <h3><?php the_sub_field('title');?></h3>
      <?php the_sub_field('content');?>

    <?php endwhile;?>
<?php endif;?>
 

<?php if( $text_blocks = get_field('text_blocks') ): ?>
  
    <?php foreach ($text_blocks as $text_block):?>
 
      <h3><?php echo $text_block['title'];?></h3>
      <?php echo $text_block['content'];?>

    <?php endforeach;?>
<?php endif;?>
 