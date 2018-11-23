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
$on_label = $vars['on_label'];
$off_label = $vars['off_label'];
$value = $vars['value'];
$id = $vars['id'];
?>
<div class="Switch <?php echo $value; ?>" id="<?php echo $id; ?>">
    <div class="Toggle"></div>
    <span class="On"><?php echo $on_label; ?></span> 
    <span class="Off"><?php echo $off_label; ?></span>
</div>