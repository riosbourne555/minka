<?php
// obtener la entidad
$guid = elgg_extract('guid', $vars);
elgg_entity_gatekeeper($guid, 'object', 'riego');
$riego = get_entity($guid);

// obtener el contenido de la entidad
$content = elgg_view_entity($riego, array('full_view' => true));

$params = array(
    'title' => $riego->title,
    'content' => $content,
    'filter' => '',
);

$body = elgg_view_layout('content', $params);

echo elgg_view_page($riego->title, $body);
