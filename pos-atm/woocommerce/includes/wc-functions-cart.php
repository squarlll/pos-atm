<?php 

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'pos_atm_woocommerce_cart_link_fragment' ) ) {
	/**
	 * Cart Fragments.
	 *
	 * Ensure cart contents update when products are added to the cart via AJAX.
	 *
	 * @param array $fragments Fragments to refresh via AJAX.
	 * @return array Fragments to refresh via AJAX.
	 */
	function pos_atm_woocommerce_cart_link_fragment( $fragments ) {
		ob_start();
		pos_atm_woocommerce_cart_link();
		$fragments['a.cart-contents'] = ob_get_clean();

		return $fragments;
	}
}
add_filter( 'woocommerce_add_to_cart_fragments', 'pos_atm_woocommerce_cart_link_fragment' );

if ( ! function_exists( 'pos_atm_woocommerce_cart_link' ) ) {
	/**
	 * Cart Link.
	 *
	 * Displayed a link to the cart including the number of items present and the cart total.
	 *
	 * @return void
	 */
	function pos_atm_woocommerce_cart_link() {
		?>
		<a class="header__basket cart-contents" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'Корзина', 'pos-atm' ); ?>">
			<?php
			$item_count_text = sprintf(
				/* translators: number of items in the mini cart. */
				_n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'pos-atm' ),
				WC()->cart->get_cart_contents_count()
			);
			?>
			<svg class="header__basket-icon" style="width: 18rem; height: 18rem; fill: #FF5707"><use xlink:href="#basket"></use></svg>
			<span class="header__basket-text">Товаров: <span><?php echo esc_html( $item_count_text ); ?></span> (<span><?php echo wp_kses_data( WC()->cart->get_cart_subtotal() ); ?></span>)</span>
			<span class="header__basket-text_mobile">Корзина</span>
		</a>
		<?php
	}
}

if ( ! function_exists( 'pos_atm_woocommerce_header_cart' ) ) {
	/**
	 * Display Header Cart.
	 *
	 * @return void
	 */
	function pos_atm_woocommerce_header_cart() {
		if ( is_cart() ) {
			$class = 'current-menu-item';
		} else {
			$class = '';
		}
		?>
		<ul id="site-header-cart" class="site-header-cart">
			<li class="<?php echo esc_attr( $class ); ?>">
				<?php pos_atm_woocommerce_cart_link(); ?>
			</li>
			<li>
				<?php
				$instance = array(
					'title' => '',
				);

				the_widget( 'WC_Widget_Cart', $instance );
				?>
			</li>
		</ul>
		<?php
	}
}
