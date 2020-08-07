<?php
/**
 * This file is required by WordPress. Delegates the actual rendering to sidebar.blade.php.
 *
 * @package YunluTheme
 * phpcs:disable
 */
add_filter( 'wpemerge.partials.sidebar.hook', '__return_false' );
\YunluTheme::render( 'views.partials.sidebar' );
remove_filter( 'wpemerge.partials.sidebar.hook', '__return_false' );
