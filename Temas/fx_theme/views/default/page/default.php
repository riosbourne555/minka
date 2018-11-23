<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// backward compatability support for plugins that are not using the new approach
// of routing through admin. See reportedcontent plugin for a simple example.
if (elgg_get_context() == 'admin') {
	if (get_input('handler') != 'admin') {
		elgg_deprecated_notice("admin plugins should route through 'admin'.", 1.8);
	}
	_elgg_admin_add_plugin_settings_menu();
	elgg_unregister_css('elgg');
	echo elgg_view('page/admin', $vars);
	return true;
}

// render content before head so that JavaScript and CSS can be loaded. See #4032

$messages = elgg_view('page/elements/messages', array('object' => $vars['sysmessages']));

$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);

$body = <<<__BODY
<div class="elgg-page elgg-page-default">
	<div class="elgg-page-messages">
		$messages
	</div>
__BODY;

if (elgg_is_logged_in()) {
	$topbar = elgg_view('page/elements/topbar', $vars);

	$body .= <<<__BODY
	<div class="elgg-page-topbar">
		<div class="elgg-inner">
			$topbar
		</div>
	</div>
__BODY;
}
$body .= <<<__BODY
	
	<div class="elgg-page-navbar">
		<div class="elgg-inner">
			$navbar
		</div>
	</div>
	<div class="elgg-page-body">
		<div class="elgg-inner">
			$content
		</div>
	</div>
	<div class="elgg-page-footer">
		<div class="elgg-inner">
			$footer
		</div>
	</div>
</div>
__BODY;

$body .= elgg_view('page/elements/foot');

$head = elgg_view('page/elements/head', $vars['head']);

$params = array(
	'head' => $head,
	'body' => $body,
);

if (isset($vars['body_attrs'])) {
	$params['body_attrs'] = $vars['body_attrs'];
}

echo elgg_view("page/elements/html", $params);

?>
<script>
jQuery(window).bind('scroll', function() {
         if (jQuery(window).scrollTop() > 29) {
             jQuery('.elgg-page-navbar').addClass('fixed');
         }
         else {
             jQuery('.elgg-page-navbar').removeClass('fixed');
         }
    });
jQuery(window).bind('scroll', function() {
         if (jQuery(window).scrollTop() > 29) {
             jQuery('.elgg-page-body').addClass('separated');
         }
         else {
             jQuery('.elgg-page-body').removeClass('separated');
         }
    });
jQuery(document).ready(function(){ 
jQuery("a.elgg-topbar-dropdown").removeAttr("href");
jQuery("li.elgg-more > a").removeAttr("href");
 });
jQuery( "li.elgg-more > a" ).click(function() {
  jQuery( ".elgg-menu-site > li > ul" ).slideToggle( "fast", function() {  
  
  });
});
jQuery( ".elgg-topbar-dropdown" ).click(function() {
  jQuery( ".elgg-menu-topbar-alt ul" ).slideToggle( "fast", function() {  

  });
});
$(document).click(function(event) { 
    if(!$(event.target).closest('li.elgg-menu-item-account').length) {
        if($('.elgg-menu-topbar-alt ul').is(":visible")) {
            $('.elgg-menu-topbar-alt ul').hide()
        }
    }        
})
$(document).click(function(event) { 
    if(!$(event.target).closest('li.elgg-more').length) {
        if($('ul.elgg-menu-site-more').is(":visible")) {
            $('ul.elgg-menu-site-more').hide()
        }
    }        
})
</script>

