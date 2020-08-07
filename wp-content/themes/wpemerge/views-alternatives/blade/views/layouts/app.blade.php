<?php
/**
 * Base layout.
 *
 * @package YunluTheme
 */

?>
@include('views.partials.header')

@if (!is_singular())
	@php yunlu_theme_the_title( '<h2 class="post-title">', '</h2>' ) @endphp
@endif

@yield('content')

@include('views.partials.sidebar')

@include('views.partials.footer')
