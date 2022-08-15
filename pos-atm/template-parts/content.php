<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pos-atm
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php the_title( '<h1 class="service__title title_1">', '</h1>' ); ?>
	<div class="service__text">
		<?php the_content(); ?>
	</div>
</article>
