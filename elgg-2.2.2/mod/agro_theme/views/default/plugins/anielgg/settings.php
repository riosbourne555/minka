<p>
<label>
<?php 
$titulo = elgg_echo ('anielgg:titulo');
echo $titulo;
?>
</label>
<br/><br/>
<?php
$use = elgg_echo ('anielgg:use');
echo $use;
?>
<br/><br/>
<b>if: what ever, on: what ever, do: what ever, to: what ever;</b>
<br/><br/>
<?php 
$try = elgg_echo ('anielgg:try');
echo $try;
?>
<br/><br/>
<b>if: scroll, on:window, do: rollIn animated, to: .elgg-item, before: scrollReveal, after: removeAnim;</b>
<br/><br/>
Docu: <a href="http://anijs.github.io/#documentation">http://anijs.github.io/#documentation</a>
<br/><br/>
<?php 
$entity = elgg_extract('entity', $vars);

$codifica = elgg_view('input/plaintext', array(
	'name' => 'params[elcodigo]',
	'id' => 'codificando',
	'value' => $entity->elcodigo,
));

echo $codifica;
	
?>
</p>