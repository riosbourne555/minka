<?php
/*
 *
 * Customizr
 *
 */

$css = elgg_get_plugin_setting('css', 'customizr');
$js = elgg_get_plugin_setting('js', 'customizr');

?>

<div class="customizr-button">
	<i class="fa fa-code"></i>
</div>

<div class="customizr-panel">
	<h1>CSS</h1>
	<div id="customizr-css"><?php echo $css; ?></div>
	<textarea class="customizr-css-input"></textarea>
	<h1 class="customizer-js-title">JS</h1>
	<div id="customizr-js"><?php echo $js; ?></div>
	<textarea class="customizr-js-input"></textarea>

	<ul class="customizr-options">
		<li class="customizr-options-preview">Preview</li>
		<li class="customizr-options-save">Save</li>
		<li class="customizr-options-flush">Flush Cache</li>
		<li class="customizr-options-close">Close</li>
	</ul>

	<style><?php echo $css; ?></style>
	<script><?php echo $js; ?></script>
</div>