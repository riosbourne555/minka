<?php
/*Se muestra un boton "Nuevo Riego" que se mostrara despues de los objetos
mi_riego*/
$boton = elgg_view('input/submit', array(
    'value' => elgg_echo('Nuevo Riego'),
    '#class' => 'elgg-foot',
));
/*A continuacion se da forma a la pagina HTML con el boton, esto se debe a que Elgg por si solo
no dibuja la pagina de la mejor manera */
echo <<< HTML
<p> <br> </>
<div class="elgg-foot">
    $boton
</div>
HTML;
