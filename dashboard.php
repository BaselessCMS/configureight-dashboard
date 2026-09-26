<?php
/**
 * Configure 8 Dashboard
 *
 * @package    Configure 8 Dashboard
 * @subpackage Admin Views
 * @version    1.0.0
 * @since      1.0.0
 */

$die = sprintf(
	'Please install the Configure 8 <a href="https://github.com/BaselessCMS/configureight" target="_blank" rel="noopener noreferrer">theme</a> and its <a href="https://github.com/BaselessCMS/configureight-plugin" target="_blank" rel="noopener noreferrer">companion plugin</a>.'
);

if ( ! class_exists( 'configureight' ) ) {
	die( $die );
}

$configureight = new configureight();

if ( defined( 'CFE_DASHBOARD' ) && CFE_DASHBOARD && $configureight->custom_dashboard() ) {
	include( $configureight->phpPath() . '/views/dashboard-custom.php' );
} else {
	include( $configureight->phpPath() . '/views/dashboard-original.php' );
}
