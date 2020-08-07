<?php
/**
 * Base layout.
 *
 * @link https://docs.wpemerge.com/#/framework/views/layouts
 *
 * @package YunluTheme
 */

\YunluTheme::render( 'header' );

if ( ! is_singular() ) {
	yunlu_theme_the_title( '<h2 class="post-title">', '</h2>' );
}

\YunluTheme::layoutContent();

\YunluTheme::render( 'sidebar' );

\YunluTheme::render( 'footer' );
