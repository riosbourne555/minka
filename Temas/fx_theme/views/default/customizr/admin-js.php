<?php
/*
 *
 * Customizr
 *
 */
?>
/*<script>*/

elgg.provide('elgg.customizr');

elgg.customizr.init = function() {
	var css = ace.edit('customizr-css');
    css.setTheme('ace/theme/monokai');
    css.getSession().setMode('ace/mode/css');
    css.setStyle('customizr-css');
    css.getSession().on('change', function(){
    	$('.customizr-css-input').val(css.getSession().getValue());
	});

    var js = ace.edit('customizr-js');
    js.setTheme('ace/theme/monokai');
    js.setStyle('customizr-js');
    js.getSession().setMode('ace/mode/javascript');
    js.getSession().on('change', function(){
    	$('.customizr-js-input').val(js.getSession().getValue());
	});

    $('.customizr-button').live('click', elgg.customizr.panel);
    $('.customizr-options-preview').live('click', elgg.customizr.preview);
    $('.customizr-options-save').live('click', elgg.customizr.save);
    $('.customizr-options-flush').live('click', elgg.customizr.flush);
    $('.customizr-options-close').live('click', elgg.customizr.close);
}

elgg.customizr.panel = function(e) {
	$('.customizr-panel').show('slide', { direction: 'right' }, 500);
};

elgg.customizr.preview = function(e) {
	var css = $('.customizr-css-input').val();
	var js = $('.customizr-js-input').val();
	$('.customizr-panel style').replaceWith('<style>' + css + '</style>');
	$('.customizr-panel script').replaceWith('<script>' + js + '</script>');
};

elgg.customizr.save = function(e) {
	elgg.post('ajax/view/customizr/save', {
		data: {
			css: $('.customizr-css-input').val(),
			js: $('.customizr-js-input').val()
		},
		success: function() {
			elgg.system_message('Custom CSS and JS saved.');
	   }
	});
};

elgg.customizr.flush = function(e) {
	elgg.action('admin/site/flush_cache');
};

elgg.customizr.close = function(e) {
	$('.customizr-panel').hide('slide', { direction: 'right' }, 500);
};

elgg.register_hook_handler('init', 'system', elgg.customizr.init);