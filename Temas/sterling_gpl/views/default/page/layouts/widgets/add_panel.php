<?php
/**
 *
 * Copyright (c) 2016 SocialApparatus
 *
 * @author      Shane Barron <admin@socia.us>
 * @project     Sterling GPL Elgg theme
 * @license     GNU General Public License (GPL) version 2
 * @version     1.0
 * @link        http://socia.us
 */

$widgets = elgg_extract('widgets', $vars);
$context = elgg_extract('context', $vars);
$exact = elgg_extract('exact_match', $vars, false);
$container = elgg_extract('container', $vars, elgg_get_page_owner_entity());

$widget_types = elgg_get_widget_types([
	'context' => $context,
	'exact' => $exact,
	'container' => $container,
]);
uasort($widget_types, function($a, $b) {
	return strcmp($a->name,$b->name);
});

$current_handlers = array();
foreach ($widgets as $column_widgets) {
	foreach ($column_widgets as $widget) {
		$current_handlers[] = $widget->handler;
	}
}

?>
<div class="col-md-12">
<div class="elgg-widgets-add-panel hidden clearfix" id="widgets-add-panel">
	<p>
		<?php echo elgg_echo('widgets:add:description'); ?>
	</p>
	<ul>
<?php
		foreach ($widget_types as $handler => $widget_type) {
			// check if widget added and only one instance allowed
			if ($widget_type->multiple == false && in_array($handler, $current_handlers)) {
				$class = 'elgg-state-unavailable';
				$tooltip = elgg_echo('widget:unavailable');
			} else {
				$class = 'elgg-state-available';
				$tooltip = $widget_type->description;
			}

			if ($widget_type->multiple) {
				$class .= ' elgg-widget-multiple';
			} else {
				$class .= ' elgg-widget-single';
			}

			echo "<li title=\"$tooltip\" class=\"$class\" data-elgg-widget-type=\"$handler\">$widget_type->name</li>";
		}
?>
	</ul>
<?php
	echo elgg_view('input/hidden', array(
		'name' => 'widget_context',
		'value' => $context
	));
	echo elgg_view('input/hidden', array(
		'name' => 'show_access',
		'value' => (int)$vars['show_access']
	));
?>
</div>
</div>