<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Global function-holder. Works similar to a singleton's instance().
 *
 * @since 1.0.0
 *
 * @return WPMailSMTP\Core;
 */
function wp_mail_smtp() {
	/**
	 * @var \WPMailSMTP\Core
	 */
	static $core;

	require __DIR__ . '/vendor/autoload.php';

	if ( ! isset( $core ) ) {
		$core = new \WPMailSMTP\Core();
	}

	return $core;
}

wp_mail_smtp();
