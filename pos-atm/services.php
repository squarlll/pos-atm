<?php /*

Template Name: Шаблон страницы с услугами

*/ 

get_header(); ?>



<?php/*
$args = array(
 'number'     => $number,
 'orderby'    => $orderby,
 'order'      => $order,
 'hide_empty' => $hide_empty,
 'include'    => $ids
 );
$product_categories = get_terms( 'product_cat', $args );
$count = count($product_categories);
 if ( $count > 0 ){
 echo "<ul>";
 foreach ( $product_categories as $product_category ) {
 echo '<li><a href="' . get_term_link( $product_category ) . '">' . $product_category->name . '</li>';
}
 echo "</ul>";
 } */
?>
<section class="breadcrumbs container">
	<?php
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
		}
	?>

	<?php /*echo do_shortcode( '[product_category category="katgoriya-2" paginate="true"]' ); */
	 ?>
</section>
<main class="services container">
  <h1 class="services__title title_1">Услуги</h1>
  <ul class="services__list">
  	<?php 
  		// параметры по умолчанию
  		$my_posts = get_posts( array(
  			'post_type'   => 'services',
  			'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
  		) );

  		global $post;

  		foreach( $my_posts as $post ){
  			setup_postdata( $post );
  			?>

  			<li class="services__item">
  				<a class="services__link" href="<?php the_permalink(); ?>" style="background: linear-gradient(0deg, rgba(17, 95, 167, 0.5), rgba(17, 95, 167, 0.5)), url('<?php the_post_thumbnail_url(); ?>') no-repeat center / cover;"><span><?php the_title(); ?></span></a>
  			</li>

  		<?php	}

  		wp_reset_postdata(); // сброс

  	?>
  </ul>
</main>

<?php get_footer(); ?>