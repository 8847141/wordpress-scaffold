<?php
/**
 * WP Emerge configuration.
 *
 * @link https://docs.wpemerge.com/#/framework/configuration
 *
 * @package YunluTheme
 */

return [
	/**
	 * Array of service providers you wish to enable.
	 */
	'providers'           => [
		\WPEmergeAppCore\AppCore\AppCoreServiceProvider::class,
		\WPEmergeAppCore\Assets\AssetsServiceProvider::class,
		\WPEmergeAppCore\Avatar\AvatarServiceProvider::class,
		\WPEmergeAppCore\Config\ConfigServiceProvider::class,
		\WPEmergeAppCore\Image\ImageServiceProvider::class,
		\WPEmergeAppCore\Sidebar\SidebarServiceProvider::class,
		\YunluTheme\Routing\RouteConditionsServiceProvider::class,
		\YunluTheme\View\ViewServiceProvider::class,
		\YunluTheme\WordPress\AdminServiceProvider::class,
		\YunluTheme\WordPress\AssetsServiceProvider::class,
		\YunluTheme\WordPress\ContentTypesServiceProvider::class,
		\YunluTheme\WordPress\LoginServiceProvider::class,
		\YunluTheme\WordPress\MenusServiceProvider::class,
		\YunluTheme\WordPress\ShortcodesServiceProvider::class,
		\YunluTheme\WordPress\ThemeServiceProvider::class,
		\YunluTheme\WordPress\WidgetsServiceProvider::class,

		\WPEmergeBlade\View\ServiceProvider::class,
	],

	/**
	 * Array of route group definitions and default attributes.
	 * All of these are optional so if we are not using
	 * a certain group of routes we can skip it.
	 * If we are not using routing at all we can skip
	 * the entire 'routes' option.
	 */
	'routes'              => [
		'web'   => [
			'definitions' => __DIR__ . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . 'web.php',
			'attributes'  => [
				'namespace' => 'YunluTheme\\Controllers\\Web\\',
			],
		],
		'admin' => [
			'definitions' => __DIR__ . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . 'admin.php',
			'attributes'  => [
				'namespace' => 'YunluTheme\\Controllers\\Admin\\',
			],
		],
		'ajax'  => [
			'definitions' => __DIR__ . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . 'ajax.php',
			'attributes'  => [
				'namespace' => 'YunluTheme\\Controllers\\Ajax\\',
			],
		],
	],

	/**
	 * View Composers settings.
	 */
	'view_composers'      => [
		'namespace' => 'YunluTheme\\ViewComposers\\',
	],

	/**
	 * Register middleware class aliases.
	 * Use fully qualified middleware class names.
	 *
	 * Internal aliases that you should avoid overriding:
	 * - 'flash'
	 * - 'old_input'
	 * - 'csrf'
	 * - 'user.logged_in'
	 * - 'user.logged_out'
	 * - 'user.can'
	 */
	'middleware'          => [
		// phpcs:ignore
		// 'mymiddleware' => \YunluTheme\Middleware\MyMiddleware::class,
	],

	/**
	 * Register middleware groups.
	 * Use fully qualified middleware class names or registered aliases.
	 * There are a couple built-in groups that you may override:
	 * - 'web'      - Automatically applied to web routes.
	 * - 'admin'    - Automatically applied to admin routes.
	 * - 'ajax'     - Automatically applied to ajax routes.
	 * - 'global'   - Automatically applied to all of the above.
	 * - 'wpemerge' - Internal group applied the same way 'global' is.
	 *
	 * Warning: The 'wpemerge' group contains some internal WP Emerge
	 * middleware which you should avoid overriding.
	 */
	'middleware_groups'   => [
		'global' => [],
		'web'    => [],
		'ajax'   => [],
		'admin'  => [],
	],

	/**
	 * Optionally specify middleware execution order.
	 * Use fully qualified middleware class names.
	 */
	'middleware_priority' => [
		// phpcs:ignore
		// \YunluTheme\Middleware\MyMiddlewareThatShouldRunFirst::class,
		// \YunluTheme\Middleware\MyMiddlewareThatShouldRunSecond::class,
	],

	/**
	 * Custom directories to search for views.
	 * Use absolute paths or leave blank to disable.
	 * Applies only to the default PhpViewEngine.
	 */
	'views'               => [ get_stylesheet_directory(), get_template_directory() ],

	/**
	 * App Core configuration.
	 */
	'app_core'            => [
		'path' => dirname( __DIR__ ),
		'url'  => get_template_directory_uri(),
	],

	/**
	 * Other config goes after this comment.
	 */

    'blade' => [
		// ... other WP Emerge Blade options
		'replace_default_engine' => true,
		'proxy_php_views' => true,
		'filter_core_templates' => false,
        'options' => [
        	// 'views' defaults to the main ['views'] key of the configuration.
        	'views' => [get_stylesheet_directory(), get_template_directory()],
        	// 'cache' defaults to the main ['cache']['path'] key of the configuration
			//'cache' => get_stylesheet_directory() . DIRECTORY_SEPARATOR . 'blade-cache',
			'cache' => 'wp-content/uploads/wpemerge/cache/blade',
        ],
    ],	 

];
