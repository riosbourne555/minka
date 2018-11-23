<?php
$body = elgg_list_entities(array(
    'type' => 'object',
    'subtype' => 'mi_riego',
    'sidebar' => ''
));
$body = elgg_view_layout('one_sidebar', array('content' => $body));

echo elgg_view_page("Todos los riegos registrados", $body);
