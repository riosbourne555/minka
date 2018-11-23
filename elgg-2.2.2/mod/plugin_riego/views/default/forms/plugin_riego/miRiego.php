<?php
/*Esta vista permite mostrar un objeto en la BD de subtipo 'mi_riego' ya que tienen los
output de todas las propiedades definidas para ese objeto: title, body y tags. 

$riego = get_entity($vars['guid']);
$vars['entity'] = $riego;
//$title = elgg_view_title($vars['entity']->title);
*/
$title = $vars['titulo'];
$guid = $vars['guid'];

$boton1 = elgg_view('input/submit', array(
    'value' => $title,
    '#class' => 'elgg-foot',
));
echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $guid));

/*A continuacion se da forma a la pagina HTML con las variables locales definidas 
$titulo, $cuerpo y $tags , esto se debe a que Elgg por si solo
no dibuja la pagina de la mejor manera 
*/
echo <<<HTML
<div class="elgg-foot">
	$boton1
</div>
HTML;
