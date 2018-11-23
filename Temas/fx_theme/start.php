<?php
/**
 * FX theme plugin
 *
 * @package FxTheme
 */

elgg_register_event_handler('init','system','fx_theme_init');

function fx_theme_init() {

	elgg_register_event_handler('pagesetup', 'system', 'fx_theme_pagesetup', 1000);

	// theme specific CSS
	elgg_extend_view('css/elgg', 'fx_theme/css');

	elgg_register_plugin_hook_handler('head', 'page', 'fx_theme_setup_head');

	elgg_register_js('respond', 'mod/fx_theme/vendors/js/respond.min.js');
	elgg_load_js('respond');

	// non-members do not get visible links to RSS feeds
	if (!elgg_is_logged_in()) {
		elgg_unregister_plugin_hook_handler('output:before', 'layout', 'elgg_views_add_rss_link');
	}

}

/**
 * Rearrange menu items
 */
function fx_theme_pagesetup() {

	elgg_unextend_view('page/elements/header', 'search/header');
	elgg_extend_view('page/elements/sidebar', 'search/header', 0);
	if (elgg_is_logged_in()) {
	elgg_extend_view('page/elements/topbar', 'page/elements/header_logo', 0);
	} else {
	elgg_extend_view('page/elements/navbar', 'page/elements/header_logo', 0);
	}

	if (elgg_is_logged_in()) {

		elgg_register_menu_item('topbar', array(
			'name' => 'account',
			'text' => elgg_echo('account'),
			'href' => "#",
			'priority' => 100,
			'section' => 'alt',
			'link_class' => 'elgg-topbar-dropdown',
		));

		if (elgg_is_active_plugin('dashboard')) {
			$item = elgg_unregister_menu_item('topbar', 'dashboard');
			if ($item) {
				$item->setText(elgg_echo('dashboard'));
				$item->setSection('default');
				elgg_register_menu_item('site', $item);
			}
		}

		$item = elgg_get_menu_item('topbar', 'usersettings');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('settings'));
			$item->setPriority(103);
		}

		$item = elgg_get_menu_item('topbar', 'logout');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('logout'));
			$item->setPriority(104);
		}

		$item = elgg_get_menu_item('topbar', 'administration');
		if ($item) {
			$item->setParentName('account');
			$item->setText(elgg_echo('admin'));
			$item->setPriority(101);
		}

		if (elgg_is_active_plugin('site_notifications')) {
			$item = elgg_get_menu_item('topbar', 'site_notifications');
			if ($item) {
				$item->setParentName('account');
				$item->setText(elgg_echo('site_notifications:topbar'));
				$item->setPriority(102);
			}
		}

		if (elgg_is_active_plugin('reportedcontent')) {
			$item = elgg_unregister_menu_item('footer', 'report_this');
			if ($item) {
				$item->setText(elgg_view_icon('report-this'));
				$item->setPriority(500);
				$item->setSection('default');
				elgg_register_menu_item('extras', $item);
			}
		}
	}
}

/**
 * Register items for the html head
 *
 * @param string $hook Hook name ('head')
 * @param string $type Hook type ('page')
 * @param array  $data Array of items for head
 * @return array
 */
function fx_theme_setup_head($hook, $type, $data) {
	$data['metas'][] = array(
		'name' => 'viewport',
		'content' => 'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0',
	);

    // https://developer.chrome.com/multidevice/android/installtohomescreen
    $data['metas'][] = array(
        'name' => 'mobile-web-app-capable',
        'content' => 'yes',
    );

    $data['metas'][] = array(
        'name' => 'apple-mobile-web-app-capable',
        'content' => 'yes',
    );

	$data['links'][] = array(
		'rel' => 'apple-touch-icon',
		'href' => elgg_normalize_url('mod/fx_theme/graphics/homescreen.png'),
	);

	return $data;
}

elgg_register_event_handler('init','system','customizr_init');

function customizr_init() {
    elgg_register_js('ace', 'https://cdnjs.cloudflare.com/ajax/libs/ace/1.1.8/ace.js');
    elgg_register_css('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css');
    elgg_register_ajax_view('customizr/save');

    elgg_extend_view('css/elgg', 'customizr/css');
    elgg_extend_view('js/elgg', 'customizr/js');

    if (elgg_is_admin_logged_in()) {
        elgg_unextend_view('css/elgg', 'customizr/css');
        elgg_unextend_view('js/elgg', 'customizr/js');
        elgg_extend_view('css/elgg', 'customizr/admin-css');
        elgg_extend_view('js/elgg', 'customizr/admin-js');
        elgg_extend_view('page/default', 'customizr/editor');
        elgg_load_css('font-awesome');
        elgg_load_js('ace');
    }
}


function anielgg_init() {	
elgg_extend_view("css/elgg", "css/anielgg");
elgg_extend_view("page/default", "type/order");
elgg_extend_view("page/default", "js/anijs");
elgg_extend_view("page/default", "js/anijs-helper-dom");
elgg_extend_view("page/default", "js/anijs-helper-scrollreveal-min");	
}
elgg_register_event_handler('init','system','anielgg_init'); 

