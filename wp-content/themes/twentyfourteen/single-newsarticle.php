<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <?php
      // Start the Loop.
      while (have_posts()) : the_post(); ?>
        <div class="container">
          <h1><?php print the_title(); ?></h1>
          <article class="article-block first <?php print $extra; ?>">
            <?php
              $img = get_field( 'news_img' );
              $img = $img['sizes']['newsarticle-thumb'];
              $author = get_field('news_author');
            ?>

            <img src="<?php print $img; ?>"> </img>
            <div class="news-info">
              <div class="meta">
                <time datetime="<?php echo date_i18n( 'Y-m-d', strtotime( $post->post_date )) ?>">
                  <span class="day"><?php echo date_i18n( 'j', strtotime( $post->post_date )) ?></span>
                  <span class="month"><?php echo date_i18n( 'M', strtotime( $post->post_date )) ?></span>
                  <span class="year"><?php echo date_i18n( 'Y', strtotime( $post->post_date )) ?></span>
                </time>
                <span>, <?php print $author; ?> </span>
              </div>
              <?php include get_template_directory().'/templates/snippets/addthis.php'; ?>
            </div>
            <?php the_content(); ?>
          </article>
      </div>
      <?php endwhile; ?>
    </div><!-- #content -->
  </div><!-- #primary -->

<?php
get_sidebar( 'content' );
get_sidebar();
get_footer();
