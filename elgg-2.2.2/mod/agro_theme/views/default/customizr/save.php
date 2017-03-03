<?php
/*
 *
 * Customizr
 *
 */

$css = get_input('css');
$js = get_input('js');

elgg_set_plugin_setting('css', $css, 'customizr');
elgg_set_plugin_setting('js', $js, 'customizr');