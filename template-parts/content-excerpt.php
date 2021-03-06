<?php
/**
 * Template for displaying content
 *
 * @package Ruffie
 * @since 1.5.0
 */
?>
<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <?php get_template_part('template-parts/header', 'entry'); ?>

  <?php if ( 
    get_the_post_thumbnail() !== '' &&
    (
      (  is_singular() && get_theme_mod( 'thumbnail_content', true ) ) ||
      ( !is_singular() && get_theme_mod( 'thumbnail_index',   true ) )
    )
  ): ?>
    
    <a class="post-thumbnail" href="<?php the_permalink() ?>">
      
      <?php the_post_thumbnail( 'ruffie-featured-image' ); ?>
    
    </a><!-- .post-thumbnail -->
  
  <?php endif; ?>

  <article class="entry-content">
    
    <?php the_excerpt(); ?>
  
  </article><!-- .entry-content -->

</section>