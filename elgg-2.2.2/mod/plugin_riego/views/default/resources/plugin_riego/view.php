<?php
/* sidebar es la columna lateral derecha y en este caso no muestra nada, pero hay 
que ver como agragarle cosas a futuro*/
$sidebar = "";
/*A continuacion se arma el cuerpo(body) que contiene la estructura los objetos que se 
van a mostrar, en este caso son de subtipo mi_riego
*/
$content = elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'mi_riego',
    'owner_guid' => elgg_get_logged_in_user_guid (),
));
$content .= elgg_view_form("plugin_riego/Riego");
//Se da forma al body para que pueda ser mostrado
$body = elgg_view_layout('one_sidebar', array(
    'content' => $content,
    'sidebar' => $sidebar
));
//Finalmente se muestra la pagina con el contenido del body
echo elgg_view_page("Mis Riegos", $body);
?>
