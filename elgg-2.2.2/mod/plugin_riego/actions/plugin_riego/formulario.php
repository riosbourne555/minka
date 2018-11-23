<?php
/* Obtiene las entradas del formulario: 
Pone en la variables locales $title, $body y $tags el contenido traido 
del formulario  ../forms/plugin_riego/formulario.php mediante las
variables 'title', 'body' y 'tags'.
*/
$title = get_input('title');
$body = get_input('body');
$tags = string_to_tag_array(get_input('tags'));

/* Crea un nuevo objeto y le pone contenido:
Crea una variable local $riego y le coloca un ElggObject vacio, y luego las variables 
locales definidas anteriormente ($title, $body y $tags) pasan su contenido a las
propiedades definidas por Elgg para ElggObject estas son title, body,tags y subtype; 
*/
$riego = new ElggObject();
$riego->title = $title;
$riego->body = $body;
$riego->tags = $tags;
/* se agrega una propiedad subtype creada en el momento 'mi_riego', esto personaliza
al ElggObject y sirve para clasificarlo y buscarlo posteriormente */
$riego->subtype = 'mi_riego';

// se agrega una propiedad que permite que todos vean el riego
$riego->access_id = ACCESS_PUBLIC;

// se agrega una propiedad que define al dueño del riego, que es el que esta conectado
$riego->owner_guid = elgg_get_logged_in_user_guid();

// se guarda en la base de datos el riego
$riego_guid = $riego->save();

// si se guarda correctamente el riego te lo avisa con un mensaje y te lo muestra
if ($riego_guid) {
   system_message("El Riego se guardo correctamente !");
   //forward('plugin_riego/viewmiriego/'.elgg_get_logged_in_user_guid()); // ver esta funcion que no anda bien
   forward($riego->getURL());
} else {
   register_error("ERROR: No se pudo guardar el Riego !");
   forward(REFERER); // REFERER es una variable global que te envia a la pagina anterior
}
?>