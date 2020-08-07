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

?>
@if ( get_post_type() === 'post' )
	<div class="article__meta">
		<p>
			{{ get_the_time( 'F jS, Y ' ) }}
			{{-- translators: post author attribution --}}
			{{ sprintf( __( 'by %s', 'yunlu_theme' ), get_the_author() ) }}
		</p>

		<p>
			{{ __( 'Posted in ', 'yunlu_theme' ) }}
			@php the_category( ', ' ) @endphp
			@if (comments_open())
				<span> | </span>
				@php comments_popup_link( __( 'No Comments', 'yunlu_theme' ), __( '1 Comment', 'yunlu_theme' ), __( '% Comments', 'yunlu_theme' ) ) @endphp
			@endif
		</p>

		@php the_tags( '<p>' . __( 'Tags:', 'yunlu_theme' ) . ' ', ', ', '</p>' ) @endphp
	</div>
@endif
