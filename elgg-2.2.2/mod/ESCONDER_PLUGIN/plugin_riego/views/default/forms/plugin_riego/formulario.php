<?php
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

$boton = elgg_view('input/submit', array(
    '#class' => 'elgg-foot',
    'value' => elgg_echo('save'),
));

echo <<< HTML
<p> $valor</p>
<div>
	<label for="invitefriends-emails">Descripcion:</label>
	$descripcion
</div>
<div>
	<label for="invitefriends-emailmessage"></label>
</div>
<div class="elgg-foot">
    $boton
</div>
HTML;
