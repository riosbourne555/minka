<?php
// se muestra un formulario miRiego y se pasa a ese formulario las variables 'titulo' y 'guid'
echo elgg_view_form("plugin_riego/miRiego",array(),array('titulo'=>$vars['entity']->title,'guid'=>$vars['entity']->guid));

