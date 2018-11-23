<?php
/*Este formulario mustra y captura los datos de riego que suministra el usuario
y a la vez envia a ../actions/plugin_riego/formulario.php los valores capturados
usando las variables 'title', 'body' y 'tags'. */

$valor = elgg_view('input/text', array(
    '#label' => elgg_echo('title'), 
    'name' => 'title',
    'required' => true,
));

$descripcion = elgg_view('input/longtext', array(
    '#label' => elgg_echo('body'),
    'name' => 'body',
    'required' => true,
));

$tags = elgg_view('input/tags', array(
    '#label' => elgg_echo('tags'),
    '#help' => elgg_echo('tags:help'),
    'name' => 'tags',
));

/*La siguiente funcion muestra un boton GUARDAR y captura la accion de apretar
dicho boton y todo lo envia a ../actions/plugin_riego/formulario.php que se encarga 
de guardar los datos de riego capturados en las funciones anteriores */
$boton = elgg_view('input/submit', array(
    '#class' => 'elgg-foot',
    'value' => elgg_echo('save'),
));

/*A continuacion se da forma a la pagina HTML con las variables locales definidas 
$valor, $descripcion, $tags y $boton, esto se debe a que Elgg por si solo
no dibuja la pagina de la mejor manera */

echo <<< HTML
<p> $valor</p>
<div>
	<label for="invitefriends-emails">Descripcion:</label>
	$descripcion
</div>
<div>
	<label for="invitefriends-emailmessage">Tags</label>
    $tags
</div>
<div class="elgg-foot">
    $boton
</div>
HTML;
