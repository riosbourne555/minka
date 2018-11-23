<?php
// solo lo que iniicaron sesion pueden ver la pagina
gatekeeper();

// titulo de la pagina
$title = "Registro de Riego";

// colocar titulo a la columna principal de la pagina
$content = elgg_view_title($title);

// agregar el formulario a la columna principal de la pagina
$content .= elgg_view_form("plugin_riego/formulario");

// opcionalmente, agregar contenido a la barra lateral
$sidebar = "";

// diseñar la pagina
$body = elgg_view_layout('one_sidebar', array(
   'content' => $content,
   'sidebar' => $sidebar
));

// dibujar la pagina con el contenido en HTML y diseño de la pagina
echo elgg_view_page($title, $body);
?>