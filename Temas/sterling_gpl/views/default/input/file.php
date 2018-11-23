<?php
/**
 *
 * Copyright (c) 2016 SocialApparatus
 *
 * @author      Shane Barron <admin@socia.us>
 * @project     Sterling GPL Elgg theme
 * @license     GNU General Public License (GPL) version 2
 * @version     1.0
 * @link        http://socia.us
 */
if (!empty($vars['value'])) {
    echo elgg_echo('fileexists') . "<br />";
}

if (isset($vars['class'])) {
    $vars['class'] = "elgg-input-file {$vars['class']}";
} else {
    $vars['class'] = "elgg-input-file";
}

$defaults = array(
    'disabled' => false,
);

$attrs = array_merge($defaults, $vars);
?>
<div class="fileinput fileinput-new" data-provides="fileinput">
    <span class="btn btn-default btn-file"><span class="fileinput-new">Select file</span><span class="fileinput-exists">Change</span>
        <input type="file" <?php echo elgg_format_attributes($attrs); ?> />
    </span>
    <span class="fileinput-filename"></span>
    <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">&times;</a>
</div>

