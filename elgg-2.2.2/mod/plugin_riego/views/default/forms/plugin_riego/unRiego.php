<?php
/*Esta vista permite mostrar un objeto en la BD de subtipo 'mi_riego' ya que tienen los
output de todas las propiedades definidas para ese objeto: title, body y tags. 

$riego = get_entity($vars['guid']);
$vars['entity'] = $riego;
//$title = elgg_view_title($vars['entity']->title);
*/
$guid = $vars['guid'];

$titulo = elgg_view('output/text', array(
    'value' => get_entity($guid)->title,
    'name' => 'title',
));
$boton1 = elgg_view('input/submit', array(
    'value' => elgg_echo('volver'),
    '#class' => 'elgg-foot',
));
$body = elgg_view('output/longtext', array(
    'value' => get_entity($guid)->body,
    'name' => 'body',
));
$tag = elgg_view('output/tags', array(
    'value' => get_entity($guid)->tags,
    'name' => 'tags',
));
//pasar al action un hider con name guid para buscarlo en el otro lado.
//echo elgg_view('input/hidden', array('name' => 'guid', 'value' => $guid));

/*A continuacion se da forma a la pagina HTML con las variables locales definidas 
$titulo, $cuerpo y $tags , esto se debe a que Elgg por si solo
no dibuja la pagina de la mejor manera 
*/
echo <<<HTML
<h1>
    $titulo
</h1>
<h2>
    $body
</h2>
<div>
    $tag
</div>
<div class="elgg-foot">
	$boton1
</div>
HTML;

