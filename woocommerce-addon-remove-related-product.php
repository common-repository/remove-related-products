<?php
/**
 * @link              https://profiles.wordpress.org/hellomohsinkhan
 * @since             1.0.0
 * @package           Remove Related Products
 *
 * @wordpress-plugin
 * Plugin Name:       Remove Related Products
 * Plugin URI:        http://webprepration.com/
 * Description:       This plugin removed related products from single plroducts page
 * Version:           1.0.0
 * Author:            Mohsin Khan
 * Author URI:        https://profiles.wordpress.org/mohsin-khan
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       Remove Related Products
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}
function woo_remove_related_product($args) {
    return array();
}
add_filter('woocommerce_related_products_args', 'woo_remove_related_product', 10);