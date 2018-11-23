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
?>
<div class="col-md-6 col-md-offset-3">
    <div role="form">
        <div class="form-group">
            <label for="login_username"><?php echo elgg_echo("loginusername"); ?></label>
            <input name='username' type="text" class="form-control" id="login_username" placeholder="<?php echo elgg_echo("loginusername"); ?> required">
        </div>
        <div class="form-group">
            <label for="login_password"><?php echo elgg_echo("password"); ?></label>
            <input name='password' type="password" class="form-control" id="login_password" placeholder="<?php echo elgg_echo("password"); ?> required">
        </div>
        <button type="submit" class="btn btn-success"><?php echo elgg_echo('login'); ?></button>
        <?php
        if (isset($vars['returntoreferer'])) {
            echo elgg_view('input/hidden', array('name' => 'returntoreferer', 'value' => 'true'));
        }
        echo elgg_view_menu('login', array(
            'sort_by' => 'priority',
            'class' => 'elgg-menu-general elgg-menu-hz mtm',
        ));
        ?>
    </div>
</div>