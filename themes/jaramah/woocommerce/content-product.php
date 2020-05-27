<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Remove 'Add to cart' button
 */
add_action( 'woocommerce_after_shop_loop_item', function(){
	remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
}, 1 );


if ( ! function_exists( 'jaramah_excerpt_in_product_archives' ) ) {

	/**
	 * Output the product short description.
	 */
	function jaramah_excerpt_in_product_archives() {
		the_excerpt();
    }
}

add_action( 'woocommerce_shop_loop_item_title', 'jaramah_excerpt_in_product_archives', 40 );


if ( ! function_exists( 'jaramah_show_sale_percentage_loop' ) ) {

	/**
	 * Show product sale percent and add "DISCOUNT" badge if it is on sale.
	 */
	function jaramah_show_sale_percentage_loop() {
		global $product;
		if ( ! $product->is_on_sale() ) return;
		if ( $product->is_type( 'simple' ) ) {
			$max_percentage = ( ( $product->get_regular_price() - $product->get_sale_price() ) / $product->get_regular_price() ) * 100;
		} elseif ( $product->is_type( 'variable' ) ) {
			$max_percentage = 0;
			foreach ( $product->get_children() as $child_id ) {
				$variation = wc_get_product( $child_id );
				$price = $variation->get_regular_price();
				$sale = $variation->get_sale_price();
				if ( $price != 0 && ! empty( $sale ) ) $percentage = ( $price - $sale ) / $price * 100;
				if ( $percentage > $max_percentage ) {
					$max_percentage = $percentage;
				}
			}
		}
		if ( $max_percentage > 0 ) echo "<div class='sale-perc'>" . round($max_percentage) . "% off</div><div class='discount-badge'>" . esc_html__( 'discount', 'woocommerce' ) . "</div>"; 
	}

}

add_action( 'woocommerce_after_shop_loop_item_title', 'jaramah_show_sale_percentage_loop', 25 );


if ( ! function_exists( 'jaramah_new_badge_shop_page' ) ) {
		  
	/**
	 * Show a "NEW" badge for products added in the last 30 days.
	 */
	function jaramah_new_badge_shop_page() {
		global $product;
		$newness_days = 30; // Days to show
		$created = strtotime( $product->get_date_created() );

		if ( ( time() - ( 60 * 60 * 24 * $newness_days ) ) < $created ) {
			echo '<div class="new-badge">' . esc_html__( 'new!', 'woocommerce' ) . '</div>';
		}
	}

	// add_action( 'woocommerce_after_shop_loop_item_title', 'jaramah_new_badge_shop_page', 3 );
}


// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( '', $product ); ?>>


	<?php 
	/**
	 * Show 'add to wishlist' icon on product if YITH WooCommerce Wishlist plugin is activated.
	 */
	if (class_exists('YITH_WCWL')) {
		echo do_shortcode('[yith_wcwl_add_to_wishlist]');
	}
	?>     

	<?php
	/**
	 * Hook: woocommerce_before_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_open - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item' );

	/**
	 * Hook: woocommerce_before_shop_loop_item_title.
	 *
	 * @hooked woocommerce_show_product_loop_sale_flash - 10
	 * @hooked woocommerce_template_loop_product_thumbnail - 10
	 */
	do_action( 'woocommerce_before_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_product_title - 10
	 */
	do_action( 'woocommerce_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item_title.
	 *
	 * @hooked woocommerce_template_loop_rating - 5
	 * @hooked woocommerce_template_loop_price - 10
     * @hooked jaramah_excerpt_in_product_archives - 40
	 */
	do_action( 'woocommerce_after_shop_loop_item_title' );

	/**
	 * Hook: woocommerce_after_shop_loop_item.
	 *
	 * @hooked woocommerce_template_loop_product_link_close - 5
	 * @hooked woocommerce_template_loop_add_to_cart - 10
	 */
	do_action( 'woocommerce_after_shop_loop_item' );
	?>
</li>