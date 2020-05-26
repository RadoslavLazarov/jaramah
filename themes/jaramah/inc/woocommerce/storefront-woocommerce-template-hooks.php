<?php
/**
 * Storefront WooCommerce hooks
 *
 * @package storefront
 */

/**
 * Header
 *
 * @see storefront_product_search()
 * @see storefront_header_cart()
 */
add_action( 'storefront_header', 'storefront_product_search', 40 );