<?php
/**
 * pos-atm functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pos-atm
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


/* Регистрация типов записей */
require get_template_directory() . '/includes/post_types.php';
require get_template_directory() . '/includes/theme-settings.php';
require get_template_directory() . '/includes/widget-areas.php';
require get_template_directory() . '/includes/enqueue-script-style.php';

require get_template_directory() . '/includes/options-panel.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
  require get_template_directory() . '/woocommerce/includes/wc-functions.php';
  require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
  require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
}

add_action('woocommerce_catalog', 'catalog_categories');
function catalog_categories() {
  $cat_args = array(
    'parent' => '0',
    'taxonomy' => 'product_cat'
  );
  $categories = get_categories( $cat_args );

  foreach ($categories as $category) { 
    echo $category->cat_name;
    echo do_shortcode('[product_category category="'.$category->cat_name.'" per_page="12" columns="4" orderby="date" order="DESC" paginate="true"]'); 
  }
}

add_filter('woocommerce_cart_needs_payment', 'disabled_payment');
function disabled_payment () {
  return false;
}

show_admin_bar( false );