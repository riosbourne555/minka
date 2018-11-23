<?php
/* sidebar es la columna lateral derecha y en este caso no muestra nada, pero hay 
que ver como agragarle cosas a futuro*/
$sidebar = "";
/*A continuacion se arma el cuerpo(body) que contiene la estructura los objetos que se 
van a mostrar, en este caso son de subtipo mi_riego
*/
$guid = elgg_extract('guid',$vars);
$mi_riego=get_entity($guid);

$content = elgg_view_form("plugin_riego/unRiego",array(),array('guid'=>$guid));
//$content = elgg_view_form("plugin_riego/unRiego",array(),array('titulo'=>$vars['entity']->title,'guid'=>$vars['entity']->guid));
//Se da forma al body para que pueda ser mostrado
$body = elgg_view_layout('one_sidebar', array(
   'content' => $content,
    'sidebar' => $sidebar
));
//Finalmente se muestra la pagina con el contenido del body
echo elgg_view_page("Riego #".$guid, $body);

echo <<<HTML
HTML;

