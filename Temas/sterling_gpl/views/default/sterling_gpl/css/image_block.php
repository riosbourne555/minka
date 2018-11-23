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
$color0 = "294ECC";
$color1 = "9da2ab";
$color2 = "818181";
$color3 = "bdbdbd";
?>
/* <style> /**/

    .elgg-list-river {
        margin-top:0px;
        .elgg-image-block {
            padding:8px 8px 8px 64px;
        }
    }

    .elgg-avatar >a > img {
        border-radius:200px;
        border:3px solid #<?php echo $color3; ?>;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }

    .elgg-avatar-tiny > a > img {
        border-radius:200px;
        border:3px solid #<?php echo $color3; ?>;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }

    .elgg-image > a > img {
        border-radius:200px;
        border:3px solid #<?php echo $color3; ?>; 
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }

    .elgg-item-object-file > .elgg-image-block,
    .elgg-item-object-page_top > .elgg-image-block {
        background:#f1f1f1;
        padding:8px;
        -webkit-border-top-left-radius: 16px;
        -webkit-border-bottom-right-radius: 16px;
        -moz-border-radius-topleft: 16px;
        -moz-border-radius-bottomright: 16px;
        border-top-left-radius: 16px;
        border-bottom-right-radius: 16px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
        margin-bottom:8px;
    }

    .elgg-item-object-blog > .elgg-image-block,
    .elgg-item-object-bookmarks > .elgg-image-block,
    .elgg-item-object-discussion > .elgg-image-block,
    .elgg-river-item.elgg-image-block,
    .elgg-item-group > .elgg-image-block {
        background:#f1f1f1;
        margin-bottom:8px;
        position:relative;
        padding:8px 8px 8px 50px;        
        -webkit-border-top-right-radius:0px;
        -webkit-border-top-left-radius: 16px;
        -webkit-border-bottom-left-radius:0px;
        -webkit-border-bottom-right-radius: 16px;
        -moz-border-radius-topright: 0px;
        -moz-border-radius-topleft: 16px;
        -moz-border-radius-bottomleft: 0px;
        -moz-border-radius-bottomright: 16px;
        border-top-right-radius:0px;
        border-top-left-radius: 16px;
        border-bottom-left-radius:0px;
        border-bottom-right-radius: 16px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }

    .elgg-item-object-blog > .elgg-image-block .panel-body,
    .elgg-item-object-bookmarks > .elgg-image-block .panel-body,
    .elgg-item-object-discussion > .elgg-image-block .panel-body,
    .elgg-river-item.elgg-image-block .panel-body,
    .elgg-item-group > .elgg-image-block .panel-body{
        padding:0px;
    }

    .elgg-item-object-blog > .elgg-image-block h3,
    .elgg-item-object-bookmarks > .elgg-image-block h3,
    .elgg-item-object-discussion > .elgg-image-block h3,
    .elgg-river-item.elgg-image-block h3,
    .elgg-item-group > .elgg-image-block h3 {
        font-size:1.4em;
    }

    .elgg-item-object-blog > .elgg-image-block .elgg-image,
    .elgg-item-object-bookmarks > .elgg-image-block .elgg-image,
    .elgg-item-object-discussion > .elgg-image-block .elgg-image,
    .elgg-river-item.elgg-image-block .elgg-image,
    .elgg-item-group > .elgg-image-block .elgg-image {
        position:absolute;
        top:0px;
        left:0px;
        background:#<?php echo $color1; ?>;
        padding:8px 8px 4px 8px;
        -webkit-border-top-left-radius: 16px;
        -webkit-border-bottom-right-radius: 16px;
        -moz-border-radius-topleft: 16px;
        -moz-border-radius-bottomright: 16px;
        border-top-left-radius: 16px;
        border-bottom-right-radius: 16px;
    }

    .elgg-list-river .elgg-image-block {
        padding:8px 8px 8px 15px;
    }

    .elgg-module-info > .elgg-head {
        background:none;
    }

    .elgg-river-item > .elgg-body {
        padding-left:46px;
    }
    .elgg-item-object-comment,
    .elgg-item-object-discussion_reply{
        position:relative;
        background:#ffffff;
    }

    .elgg-river-comments > li,
    .elgg-river-comments > li:last-child,
    .elgg-river-comments > li:first-child {
        background:#ffffff;
        padding-left:31px;
        -webkit-border-top-left-radius: 16px;
        -webkit-border-bottom-right-radius: 16px;
        -moz-border-radius-topleft: 16px;
        -moz-border-radius-bottomright: 16px;
        border-top-left-radius: 16px;
        border-bottom-right-radius: 16px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }
    .elgg-river-comments li {
        background-color:transparent;
        border-bottom:none;
        padding:0px;
    }
    .dropdown-menu > .active > a,
    .dropdown-menu > .active > a:hover,
    .dropdown-menu > .active > a:focus {
        background-color:transparent;
    }
    .navbar-default .navbar-nav > .open > a,
    .navbar-default .navbar-nav > .open > a:hover,
    .navbar-default .navbar-nav > .open a:focus {
        background-color:transparent;
        color:#ffffff;
    }
    .dropdown-menu > li > a:hover,
    .dropdown-menu > li > a:focus {
        color:#ffffff;
        background-color:transparent;
    }