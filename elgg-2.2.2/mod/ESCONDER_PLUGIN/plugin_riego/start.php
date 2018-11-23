<?php

// registrar en elgg la inicializacion
elgg_register_event_handler('init', 'system', 'plugin_riego_init');
	
    function plugin_riego_init()
    {
    // registrar la accion de guardar riego
    elgg_register_action("plugin_riego/formulario", __DIR__ . "/actions/plugin_riego/formulario.php");

    // registrar el manejador de pagina
    elgg_register_page_handler('plugin_riego', 'riego_page_handler');

    // registrar un manejador de hook para eliminar urls
    elgg_register_plugin_hook_handler('entity:url', 'object', 'mi_riego_set_url');
}
function mi_riego_set_url($hook, $type, $url, $params) {
    $entity = $params['entity'];
    if (elgg_instanceof($entity, 'object', 'riego')) {
        return "plugin_riego/view/{$entity->guid}";
    }
}
function riego_page_handler($segments) {
    switch ($segments[0]) {
        case 'add':
           echo elgg_view_resource('plugin_riego/add');
           break;

        case 'all':
        default:
           echo elgg_view_resource('plugin_riego/all');
           break;
           
           case 'view':
        default:
           echo elgg_view_resource('plugin_riego/view', [ 'guid' => $segments[1],]);
           break;
        }
    return true;
    }
