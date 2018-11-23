<?php
// obtener las entradas del formulario
$title = get_input('title');
$body = get_input('body');
$tags = string_to_tag_array(get_input('tags'));

// crear un nuevo objeto y ponerle el contenido
$riego = new ElggObject();
$riego->title = $title;
$riego->body = $body;
$riego->tags = $tags;

// agregar subtipo al objeto
$riego->subtype = 'mi_riego';

// hacer publica las publicaciones
$riego->access_id = ACCESS_PUBLIC;

// el dueño de la publicacion es el que esta conectado
$riego->owner_guid = elgg_get_logged_in_user_guid();

// se guarda en la base de datos el riego
$riego_guid = $riego->save();

// if the my_blog was saved, we want to display the new post
// otherwise, we want to register an error and forward back to the form
if ($riego_guid) {
   system_message("El Riego se guardo correctamente !");
   forward($riego->getURL());
} else {
   register_error("ERROR: No se pudo guardar el Riego !");
   forward(REFERER); // REFERER is a global variable that defines the previous page
}
?>