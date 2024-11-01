<?php
/**
 * Color settings page
 *
 * @author  YITH
 * @package YITH\Mailchimp
 * @version 2.0.0
 */

if ( ! defined( 'YITH_WCMC' ) ) {
	exit;
} // Exit if accessed directly

return array(
	'premium' => array(
		'landing' => array(
			'type'         => 'custom_tab',
			'action'       => 'yith_wcmc_premium_tab',
			'hide_sidebar' => true,
		),
	),
);
