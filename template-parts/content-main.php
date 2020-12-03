<?php
/**
 * Template for displaying the main content on a page.
 * 
 * @package ww-theme
 */
?>

<main id="primary" class="site-main">
  <section class="main-section">
    <header class="main-section-title">
      <?php
      if ( ! $args['sectionTitle'] == '' ) {
        echo '<h2 class="main-section-title__heading">' . $args['sectionTitle'] . '</h2>';
      }
        ?>
    </header>
    <?php
      // The Loop.
      if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
          get_template_part( 'template-parts/content', $args['templatePart'] );
        endwhile;
      else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
      endif;
    ?>
  </section>
</main>