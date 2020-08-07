<?php
/**
 * An example view.
 *
 * Layout: layouts/example.php
 *
 * @package YunluPlugin
 */

?>
<div class="yunlu_plugin__view">
	<?php \YunluPlugin::render( 'partials/example', [ 'message' => __( 'Hello World!', 'yunlu_plugin' ) ] ); ?>
</div>
