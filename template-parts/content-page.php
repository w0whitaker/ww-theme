<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ww-theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="article-content">
		<?php
		the_content()
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
