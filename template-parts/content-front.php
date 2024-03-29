<?php
/**
 * Template part for displaying content on the front page.
 * 
 * @package ww-theme
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="<?php echo get_post_type()?>-image">
    <?php $image = wp_get_attachment_image_src( get_field('image'), 'full'); ?>
    <a href="<?php echo esc_url( get_permalink() ) ?>">
      <img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image'))?>" />
    </a>
  </div><!--.*-image -->
  <div class="<?php echo get_post_type()?>-caption">
    <a href="<?php echo esc_url( get_permalink() )?>" rel="bookmark" class="<?php echo get_post_type(); ?>-caption__title <?php echo get_post_type(); ?>-caption__anchor"><?php  the_field('title'); ?></a><!--.*-caption_title -->
  </div><!-- .*-caption -->
 </article>