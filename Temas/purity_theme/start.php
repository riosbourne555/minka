<?php

/**
 * Purity Elgg 1.8 - 1.9 Theme
 *
 * @category   Theme
 * @package    purity_theme
 * @author     Shane Barron <admin@socia.us>
 * @copyright  2008-2014 SocialApparatus
 * @license    GNU General Public License (GPL) version 2
 * @version    1.1
 * @link       http://socia.us
 */
function purity_theme_init() {
    elgg_extend_view('page/elements/head', 'purity_theme/meta');
    elgg_unregister_menu_item('topbar', 'elgg_logo');
    elgg_register_css("search_override", elgg_get_site_url() . "mod/purity_theme/css/search.css");
    elgg_load_css("search_override");
    elgg_register_css("purity", elgg_get_site_url() . "mod/purity_theme/css/purity.css");
    elgg_load_css("purity");
    elgg_register_css("font-awesome", elgg_get_site_url() . "mod/purity_theme/vendors/font-awesome-4.2.0/css/font-awesome.min.css");
    elgg_load_css("font-awesome");
    elgg_register_event_handler('pagesetup', 'system', 'purity_theme_pagesetup', 1000);
}

if (!function_exists("fa")) {

    function fa($name) {
        return "<i class='fa fa-{$name}'></i>";
    }

}

function purity_theme_pagesetup() {
    if (elgg_is_logged_in()) {
        if (elgg_is_active_plugin('dashboard')) {
            if ($item = elgg_unregister_menu_item('topbar', 'dashboard')) {
                $item->setText(fa("tachometer"));
                $item->setSection('default');
                elgg_register_menu_item('topbar', $item);
            }
        }
        if ($item = elgg_unregister_menu_item('topbar', 'friends')) {
            $item->setText(fa("group"));
            $item->setSection("default");
            elgg_register_menu_item('topbar', $item);
        }
        if (elgg_is_active_plugin("messages")) {
            if ($item = elgg_unregister_menu_item('topbar', 'messages')) {
                $messages = messages_count_unread();
                $item->setText(fa("envelope") . "&nbsp;[" . $messages . "]");
                $item->setSection("default");
                elgg_register_menu_item("topbar", $item);
            }
        }
        if (elgg_is_admin_logged_in()) {
            if ($item = elgg_unregister_menu_item("topbar", "administration")) {
                $item->setText(fa("wrench") . "&nbsp;" . elgg_echo("admin"));
                elgg_register_menu_item("topbar", $item);
            }
        }
        if (elgg_is_active_plugin("site_notifications")) {
            if ($item = elgg_unregister_menu_item("topbar", "site_notifications")) {
                $item->setText(fa("info-circle") . "&nbsp;" . elgg_echo("site_notifications:topbar"));
                elgg_register_menu_item("topbar", $item);
            }
        }
        if ($item = elgg_unregister_menu_item("topbar", "usersettings")) {
            $item->setText(fa("cog") . "&nbsp;" . elgg_echo("settings"));
            elgg_register_menu_item("topbar", $item);
        }
    }
}

elgg_register_event_handler('init', 'system', 'purity_theme_init');
