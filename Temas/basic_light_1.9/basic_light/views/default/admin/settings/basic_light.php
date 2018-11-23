<?php
/**
 * Basic Light tabs
 */

$tab = get_input('tab', 'settings');
		
echo "<div class=\"elggzone-options-panel\">";
	echo "<div class=\"elggzone-holder\">";
		echo "<div class=\"panel-header\">" . elgg_echo('elggzone:panel') . "</div>";
		echo "<div class=\"panel-line\"></div>";

		echo elgg_view('navigation/tabs', array(
			'tabs' => array(
				array(
					'text' => elgg_echo('basic_light:tab:general'),
					'href' => '/admin/settings/basic_light?tab=settings',
					'selected' => ($tab == 'settings'),
				),
				array(
					'text' => elgg_echo('basic_light:tab:sidebar'),
					'href' => '/admin/settings/basic_light?tab=sidebar',
					'selected' => ($tab == 'sidebar'),
				)
			)
		));
		
		switch ($tab) {
			case 'sidebar':
				echo elgg_view_form('basic_light/admin/sidebar', array('class' => 'settings-optionspanel'));
				break;
			default:
			case 'settings':
				echo elgg_view_form('basic_light/admin/settings', array('class' => 'settings-optionspanel'));
				break;
		}

	echo "</div>";
echo "</div>";


