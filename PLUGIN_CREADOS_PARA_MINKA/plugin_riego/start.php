<?php
    elgg_register_event_handler('init', 'system', 'plugin_riego_init');
	
    function plugin_riego_init()
    {
        $funcion = 'riego_page_handler';
        elgg_register_page_handler('plugin_riego', $funcion);
    }

    function riego_page_handler()
    {		
        elgg_register_page_handler('riego', 'plugin_riego_pagina'));
    }
    function plugin_riego_pagina()
    {
        $params = array(
        'title' => 'REGISTRO DE DATOS DE RIEGO!',
        'content' => 'This is my first plugin.',
        'filter' => '',
        );
    $body = elgg_view_layout('content', $params);
    echo elgg_view_page('RIEGO', $body);
    }
?>
