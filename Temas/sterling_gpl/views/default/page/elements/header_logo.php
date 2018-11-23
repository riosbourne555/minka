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
$menu = elgg_view_menu('site', array(
    'sort_by' => 'priority'
        ));
?>
<section id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo elgg_get_site_url(); ?>"><h1><?php echo elgg_get_site_entity()->name; ?></h1></a>
            </div>
            <div class="col-md-9">
                <?php echo $menu; ?>
            </div>
        </div>
    </div>
</section>