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
<div class="col-md-12">
    <div class="elgg-widget-add-control">
        <?php
        echo elgg_view('output/url', array(
            'href' => '#',
            'text' => elgg_echo('widgets:add'),
            'class' => 'elgg-button elgg-button-action',
            'rel' => 'toggle',
            'is_trusted' => true,
            'data-toggle-selector' => '#widgets-add-panel, .elgg-widget-add-control > a',
            'data-toggle-slide' => 0,
        ));
        echo elgg_view('output/url', array(
            'href' => '#',
            'text' => elgg_echo('widgets:panel:close'),
            'class' => 'elgg-button elgg-button-action hidden',
            'rel' => 'toggle',
            'is_trusted' => true,
            'data-toggle-selector' => '#widgets-add-panel, .elgg-widget-add-control > a',
            'data-toggle-slide' => 0,
        ));
        ?>
    </div>
</div>