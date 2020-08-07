<?php
/**
 * Post title helpers.
 *
 * @package YunluTheme
 */

/**
 * Get the main title, based on the current view.
 *
 * @return string The current title.
 */
function yunlu_theme_get_title() {
	$title = '';

	if ( is_home() || ( is_single() && get_post_type() === 'post' ) ) {
		$blog_page_id = get_option( 'page_for_posts' );
		$blog_page    = get_post( $blog_page_id );

		if ( $blog_page_id && $blog_page ) {
			$title = $blog_page->post_title;
		}
	} elseif ( is_search() ) {
		/* translators: search results page title */
		$title = sprintf( __( 'Search Results for: %s', 'yunlu_theme' ), get_search_query() );
	} elseif ( is_category() ) {
		/* translators: category post listing page title */
		$title = sprintf( __( 'Category Archives: %s', 'yunlu_theme' ), single_cat_title( '', false ) );
	} elseif ( is_tag() ) {
		/* translators: tag post listing page title */
		$title = sprintf( __( 'Tag Archives: %s', 'yunlu_theme' ), single_tag_title( '', false ) );
	} elseif ( is_day() ) {
		/* translators: day archive post listing page title */
		$title = sprintf( __( 'Daily Archives: %s', 'yunlu_theme' ), get_the_time( 'F jS, Y' ) );
	} elseif ( is_month() ) {
		/* translators: month archive post listing page title */
		$title = sprintf( __( 'Monthly Archives: %s', 'yunlu_theme' ), get_the_time( 'F, Y' ) );
	} elseif ( is_year() ) {
		/* translators: year archive post listing page title */
		$title = sprintf( __( 'Yearly Archives: %s', 'yunlu_theme' ), get_the_time( 'Y' ) );
	} elseif ( is_author() ) {
		/* translators: author archive post listing page title */
		$title = sprintf( __( 'Posts by %s', 'yunlu_theme' ), get_the_author() );
	} elseif ( is_archive() ) {
		$title = __( 'Archives', 'yunlu_theme' );
	} elseif ( is_404() ) {
		$title = __( 'Error 404 - Not Found', 'yunlu_theme' );
	} elseif ( is_page() ) {
		$title = get_the_title();
	}

	/**
	 * Filter the current main title
	 *
	 * @param string $title The current main title
	 */
	$title = apply_filters( 'yunlu_theme_get_title', $title );

	return $title;
}

/**
 * Display the current main title, based on the current view.
 *
 * @uses yunlu_theme_get_title()
 * @param string $before Optional HTML before the title.
 * @param string $after  Optional HTML after the title.
 * @return void
 */
function yunlu_theme_the_title( $before = '', $after = '' ) {
	/**
	 * Filter the HTML that is displayed before the title
	 *
	 * @param string $before The HTML that is displayed before the title
	 */
	$before = apply_filters( 'yunlu_theme_get_title_before', $before );

	/**
	 * Filter the HTML that is displayed after the title
	 *
	 * @param string $after The HTML that is displayed after the title
	 */
	$after = apply_filters( 'yunlu_theme_get_title_after', $after );

	/**
	 * Get the current main title
	 */
	$title = yunlu_theme_get_title();

	/**
	 * Filter the current main title before it is displayed
	 *
	 * @param string $title The current main title
	 */
	$title = apply_filters( 'yunlu_theme_the_title', $title );

	/**
	 * If we have a title, display it along with its wrappers
	 */
	if ( $title ) {
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		echo $before . esc_html( $title ) . $after;
	}
}
