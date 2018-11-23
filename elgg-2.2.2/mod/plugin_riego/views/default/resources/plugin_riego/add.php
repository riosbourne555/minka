<?php
// solo lo que iniicaron sesion pueden ver la pagina
gatekeeper();
// opcionalmente, agregar contenido a la barra lateral
$sidebar = "";
// titulo de la pagina
$title = "Registrar Nuevo Riego";

// colocar titulo a la columna principal de la pagina
$content = elgg_view_title($title);

// agregar el formulario a la columna principal de la pagina
$content .= elgg_view_form("plugin_riego/formulario");

// diseñar la pagina
$body = elgg_view_layout('one_sidebar', array(
   'content' => $content,
   'sidebar' => $sidebar
));

// dibujar la pagina con el contenido en HTML y diseño de la pagina
echo elgg_view_page($title, $body);
?>