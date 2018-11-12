<?php
/**
 * Template part for displaying single blog post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stargazer-workshop
 */

?>
<!-- Single blog post -->
<div class="col-md-7">
  <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
      <?php
      if ( is_singular() ) :
        the_title( '<h1 class="entry-title heading-primary white">', '</h1>' );
      else :
        the_title( '<h2 class="heading-primary"><a class="white" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
      endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php
      the_content( sprintf(
        wp_kses(
          /* translators: %s: Name of current post. Only visible to screen readers */
          __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'stargazer-workshop' ),
          array(
            'span' => array(
              'class' => array(),
            ),
          )
        ),
        get_the_title()
      ) );

      wp_link_pages( array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'stargazer-workshop' ),
        'after'  => '</div>',
      ) );
      ?>
    </div><!-- .entry-content -->
    <footer class="entry-footer">
      <?php 
        if ( 'post' === get_post_type() ) :
          ?>
          <div class="entry-meta">
            <?php
            stargazer_workshop_posted_on();
            stargazer_workshop_posted_by();
            ?>
          </div><!-- .entry-meta -->
        <?php endif;
        stargazer_workshop_entry_footer(); 
      ?>
    </footer><!-- .entry-footer -->
  </div>    
  <!-- Blog Post Thumbnail -->
  <div class="col-md-4 col-md-offset-1">    
    <?php stargazer_workshop_post_thumbnail(); ?>
  </div>
</article><!-- #post-<?php the_ID(); ?> -->
        

