<?php
/**
 * Displays the post date/time, author, tags, categories and comments link.
 *
 * Should be called only within The Loop.
 *
 * It will be displayed only for post type "post".
 *
 * @package YunluTheme
 */

if ( get_post_type() !== 'post' ) {
	return;
}
?>
<div class="article__meta">
	<p>
		<?php
		the_time( 'F jS, Y ' );
		/* translators: post author attribution */
		echo esc_html( sprintf( __( 'by %s', 'yunlu_theme' ), get_the_author() ) );
		?>
	</p>

	<p>
		<?php
		esc_html_e( 'Posted in ', 'yunlu_theme' );
		the_category( ', ' );
		if ( comments_open() ) {
			echo '<span> | </span>';
			comments_popup_link( __( 'No Comments', 'yunlu_theme' ), __( '1 Comment', 'yunlu_theme' ), __( '% Comments', 'yunlu_theme' ) );
		}
		?>
	</p>

	<?php the_tags( '<p>' . __( 'Tags:', 'yunlu_theme' ) . ' ', ', ', '</p>' ); ?>
</div>
