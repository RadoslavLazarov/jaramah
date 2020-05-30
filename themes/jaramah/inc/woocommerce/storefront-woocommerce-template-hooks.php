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
 */
add_action( 'storefront_header', 'storefront_product_search', 40 );