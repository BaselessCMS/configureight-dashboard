<?php
/**
 * Configure 8 Dashboard
 *
 * @package    Configure 8 Dashboard
 * @subpackage Admin Views
 * @version    1.0.0
 * @since      1.0.0
 */

$die_plugin = sprintf(
	'Please install the Configure 8 <a href="https://github.com/BaselessCMS/configureight" target="_blank" rel="noopener noreferrer">theme</a> and its <a href="https://github.com/BaselessCMS/configureight-plugin" target="_blank" rel="noopener noreferrer">companion plugin</a>.'
);
$die_init = "Add <code>define( 'CFE_DASHBOARD', true );</code> to the Bludit init file (<code>bl-kernel\boot\init.php</code>).";

if ( ! class_exists( 'configureight' ) ) {
	die( $die_plugin );
}

if ( defined( 'CFE_DASHBOARD' ) ) {
	if ( true != CFE_DASHBOARD ) {
		die( $die_init );
	}
} else {
	die( $die_init );
}

$configureight = new configureight();

if ( defined( 'CFE_DASHBOARD' ) && CFE_DASHBOARD && $configureight->custom_dashboard() ) {
	include( $configureight->phpPath() . '/views/dashboard-custom.php' );
} else {
	include( $configureight->phpPath() . '/views/dashboard-original.php' );
}
