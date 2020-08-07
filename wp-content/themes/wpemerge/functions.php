<?php
/**
 * Bootstrap theme.
 *
 * The purpose of this file is to bootstrap your theme by loading all dependencies and helpers.
 *
 * YOU SHOULD NORMALLY NOT NEED TO ADD ANYTHING HERE - any custom functionality unrelated
 * to bootstrapping the theme should go into a service provider or a separate helper file
 * (refer to the directory structure in README.md).
 *
 * @package YunluTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define a content width for the theme.
 *
 * @link https://developer.wordpress.com/themes/content-width/
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1080;
}

// Make sure we can load a compatible version of WP Emerge.
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'version.php';

$name = trim( get_file_data( __DIR__ . DIRECTORY_SEPARATOR . 'style.css', [ 'Theme Name' ] )[0] );
$load = yunlu_theme_should_load_wpemerge( $name, '0.16.0', '2.0.0' );

if ( ! $load ) {
	// An incompatible WP Emerge version is already loaded - stop further execution.
	// yunlu_theme_should_load_wpemerge() will automatically add an admin notice.
	return;
}

// Load composer dependencies.
if ( file_exists( __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php' ) ) {
	require_once __DIR__ . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
}

yunlu_theme_declare_loaded_wpemerge( $name, 'theme', __FILE__ );

// Load helpers.
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'YunluTheme.php';
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'helpers.php';

// Bootstrap theme after all dependencies and helpers are loaded.
\YunluTheme::make()->bootstrap( require __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'config.php' );

/*
\YunluTheme::make()->bootstrap( [
    'routes' => [
        // Assuming your route files are created in /wp-content/themes/my-theme/routes/
        'web'   => [
            'definitions' => get_template_directory() . '/routes/web.php',
        ],
        'admin' => [
            'definitions' => get_template_directory() . '/routes/admin.php',
        ],
        'ajax'  => [
            'definitions' => get_template_directory() . '/routes/ajax.php',
        ],
    ],
    // ... other options go here
] );
*/


// Register hooks.
require_once __DIR__ . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'hooks.php';
