<?php

// registrar en elgg la inicializacion
elgg_register_event_handler('init', 'system', 'plugin_riego_init');
	
    function plugin_riego_init()
    {
    // registrar la accion de guardar riego
    elgg_register_action("plugin_riego/formulario", __DIR__ . "/actions/plugin_riego/formulario.php");
    elgg_register_action("plugin_riego/miRiego", __DIR__ . "/actions/plugin_riego/miRiego.php");
    elgg_register_action("plugin_riego/unRiego", __DIR__ . "/actions/plugin_riego/unRiego.php");
    elgg_register_action("plugin_riego/Riego", __DIR__ . "/actions/plugin_riego/Riego.php");
    // registrar el manejador de pagina
    elgg_register_page_handler('plugin_riego', 'riego_page_handler');

    // registrar un manejador de hook para eliminar urls
    elgg_register_plugin_hook_handler('entity:url', 'object', 'mi_riego_set_url');
}
function mi_riego_set_url($hook, $type, $url, $params) {
    $entity = $params['entity'];
    if (elgg_instanceof($entity, 'object', 'user')) {
        return "plugin_riego/view/".$entity->getGUID() ;
    }
    if (elgg_instanceof($entity, 'object', 'mi_riego')) {
        return "plugin_riego/viewmiriego/".$entity->getGUID() ;
    }
}
function riego_page_handler($segments) {
    switch ($segments[0]) {
        case 'add':
           echo elgg_view_resource('plugin_riego/add');
           break;

           case 'view':
           echo elgg_view_resource('plugin_riego/view', [ 'guid' => $segments[1],]);
           break;

           case 'viewmiriego':
           echo elgg_view_resource('plugin_riego/viewmiriego', [ 'guid' => $segments[1],]);
           break;

            case 'all':
           echo elgg_view_resource('plugin_riego/all');
           break;
           
           default:
			return false;
	}
	return true;
}

