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

if (isset($vars['breadcrumbs'])) {
	$breadcrumbs = $vars['breadcrumbs'];
} else {
	$breadcrumbs = elgg_get_breadcrumbs();
}

$class = 'elgg-menu elgg-breadcrumbs';
$additional_class = elgg_extract('class', $vars, '');
if ($additional_class) {
	$class = "$class $additional_class";
}

if (is_array($breadcrumbs) && count($breadcrumbs) > 0) {
	echo "<ol class='breadcrumb'>";
	foreach ($breadcrumbs as $breadcrumb) {
		if (!empty($breadcrumb['link'])) {
			$crumb = elgg_view('output/url', array(
				'href' => $breadcrumb['link'],
				'text' => $breadcrumb['title'],
				'is_trusted' => true,
			));
		} else {
			$crumb = $breadcrumb['title'];
		}
		echo "<li>$crumb</li>";
	}
	echo '</ol>';
}