<?php

namespace YunluPlugin\WordPress;

use WPEmerge\ServiceProviders\ServiceProviderInterface;

/**
 * Register plugin options.
 */
class PluginServiceProvider implements ServiceProviderInterface
{
	/**
	 * {@inheritDoc}
	 */
	public function register( $container ) {
		// Nothing to register.
	}

	/**
	 * {@inheritDoc}
	 */
	public function bootstrap( $container ) {
		register_activation_hook( YUNLU_PLUGIN_PLUGIN_FILE, [$this, 'activate'] );
		register_deactivation_hook( YUNLU_PLUGIN_PLUGIN_FILE, [$this, 'deactivate'] );

		add_action( 'plugins_loaded', [$this, 'loadTextdomain'] );
	}

	/**
	 * Plugin activation.
	 *
	 * @return void
	 */
	public function activate() {
		// Nothing to do right now.
	}

	/**
	 * Plugin deactivation.
	 *
	 * @return void
	 */
	public function deactivate() {
		// Nothing to do right now.
	}

	/**
	 * Load textdomain.
	 *
	 * @return void
	 */
	public function loadTextdomain() {
		load_plugin_textdomain( 'yunlu_plugin', false, basename( dirname( YUNLU_PLUGIN_PLUGIN_FILE ) ) . DIRECTORY_SEPARATOR . 'languages' );
	}
}
