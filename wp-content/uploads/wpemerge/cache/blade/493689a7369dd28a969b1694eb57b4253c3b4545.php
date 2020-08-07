<?php
/**
 * Sidebar partial.
 *
 * @link https://codex.wordpress.org/Customizing_Your_Sidebar
 *
 * @package YunluTheme
 */

?>
<div class="sidebar">
	<ul class="widgets">
		<?php dynamic_sidebar( \YunluTheme::core()->sidebar()->getCurrentSidebarId() ); ?>
	</ul>
</div>
<?php /**PATH D:\xampp\htdocs\wordpress-scaffold\wp-content\themes\wpemerge/sidebar.php ENDPATH**/ ?>