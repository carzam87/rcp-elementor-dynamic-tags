<?php
/**
 * Plugin Name:     RCP Elementor Dynamic Tags
 * Plugin URI:      https://chrisbibby.com.au
 * Description:     Add RCP Dynamic Tag to Elementor
 * Author:          Chris Bibby
 * Author URI:      https://chrisbibby.com.au
 * Text Domain:     rcp-elementor-dynamic-tags
 * Domain Path:     /languages
 * Version:         1.0.0
 *
 * @package         Rcp_Elementor_Dynamic_Tags
 */


add_action( 'elementor/dynamic_tags/register_tags', function( $dynamic_tags ) {
	// In our Dynamic Tag we use a group named request-variables so we need
	// To register that group as well before the tag
	\Elementor\Plugin::$instance->dynamic_tags->register_group( 'rcp-tags', [
		'title' => 'RCP Tags'
	] );

	// Include the Dynamic tag class file
	include_once( __DIR__ . '/inc/class-rcp-is-active-member.php' );

	// Finally register the tag
	$dynamic_tags->register_tag( 'RCP_Is_Active_Member' );
} );
