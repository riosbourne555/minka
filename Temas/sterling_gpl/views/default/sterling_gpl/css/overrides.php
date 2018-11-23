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

    .elgg-module-highlight,
    .elgg-module-highlight:hover {
        box-shadow:none;
    }

    .navbar-default {
        background-color:transparent;
        border-color:transparent;
    }
    .elgg-page-header {
        background-color:#<?php echo $color0; ?>;
        padding-bottom:0px;
        margin-bottom:10px;
        border-bottom:10px solid #<?php echo $color3; ?>;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }
    .navbar-default .navbar-nav > li > a {
        color:#e1e1e1;
    }
    .navbar-default .navbar-nav > li > a:hover {
        color:#ffffff;
    }
    #header h1 {
        margin-left:0px;
        color:#ffffff;
        display:block;
        line-height:50px;
    }
    .dropdown-menu {
        background:#<?php echo $color0; ?>;
        box-shadow:none;
        border:none;
    }
    .dropdown-menu > li > a {
        color:#e1e1e1;
        text-shadow:none;
    }
    .navbar {
        margin-bottom:0px;
    }
    .panel-default > .panel-heading {
        border:none;
        background:none;
    }
    .panel-default > .panel-heading h3 {
        color:#<?php echo $color2; ?>;
    }
    h2.elgg-heading-main {
        font-size:2.5em;
    }
    h3 {
        font-size:1.8em;
    }
    h3.elgg-widget-title {
        font-size:1.2em;
    }
    .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
        background-color:transparent;
        color:#ffffff;
    }
    .elgg-module-widget {
        border:none;

        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }
    .elgg-module-widget > .elgg-head h3 {
        color:#<?php echo $color2; ?>;
    }
    .elgg-module-widget:hover {
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }
    .btn-primary:hover, 
    .btn-primary:focus,
    .btn-primary.focus,
    .btn-primary:active,
    .btn-primary.active,
    .open > .dropdown-toggle.btn-primary,
    .btn-primary{
        background-color:#<?php echo $color0; ?>;
        border-color:#<?php echo $color0; ?>;
    }
    .elgg-module-widget > .elgg-head {
        background-color:transparent;
        border:none;
        padding:8px 0px;
        margin-bottom:8px;
    }
    .elgg-widget-content {
        background-color:#ffffff;
        border:none;
    }
    a,
    a:focus,
    a:hover {
        color:#ff6f0d;
    }
    h3 {
        color:#<?php echo $color0; ?>;
    }
    .elgg-menu > li > a {
        margin-bottom:0px;
    }
    .elgg-menu-entity, .elgg-menu-annotation {
        height:auto;
    }
    .elgg-widget-content {
        padding:0px;
    }
    .elgg-module-widget > .elgg-body {
        border:none;
    }
    .profile_container {
        display:block;
        margin:10px;
        margin-bottom:50px;
        margin-top:0px;
        padding-top:15px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }
    .elgg-river-layout .elgg-list-river {
        border:none;
    }
    .elgg-no-results {
        margin-top:20px;
    }
    .elgg-menu-longtext {
        margin-top:4px;
    }
    .well {
        border:none;
        background:none;
        box-shadow: 0 1px 3px rgba(0,0,0,0.08), 0 1px 2px rgba(0,0,0,0.08);
    }
    .elgg-foot {
        margin-top:10px;
    }
    .btn:hover,
    .btn:focus,
    .btn.focus {
        color:#ffffff;
    }
    .btn {
        border:none;
        color:#ffffff;
    }
    .btn-default {
        color:#<?php echo $color0; ?>;
    }
    #socia_footer {
        background:#333333;
        padding-top:20px;
        padding-bottom:20px;
        margin-top:40px;
        color:#ffffff;
    }

    #socia_footer a {
        color:#ffffff;
    }
    #socia_footer a.btn {
        color:#333333;
    }
    #socia_footer .nav > li > a:hover, 
    #socia_footer .nav > li > a:focus {
        color:#333333;
    }
    .elgg-page-footer {
        padding:0;
        margin:0;
    }

    /*Footer Styles*/

    .title-widget {
        color: #898989;
        font-size: 20px;
        font-weight: 300;
        line-height: 1;
        position: relative;
        text-transform: uppercase;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: 25px;
        margin-left: 0;
        padding-left: 28px;
    }

    .title-widget::before {
        background-color: #ffffff;
        content: "";
        height: 22px;
        left: 0px;
        position: absolute;
        top: -2px;
        width: 5px;
    }



    .widget_nav_menu ul {
        list-style: outside none none;
        padding-left: 0;
    }

    .widget_archive ul li {
        background-color: rgba(0, 0, 0, 0.3);
        content: "";
        height: 3px;
        left: 0;
        position: absolute;
        top: 7px;
        width: 3px;
    }


    .widget_nav_menu ul li {
        font-size: 13px;
        font-weight: 700;
        line-height: 20px;
        position: relative;
        text-transform: uppercase;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        margin-bottom: 7px;
        padding-bottom: 7px;
        width:95%;
    }



    .title-median {
        color: #636363;
        font-size: 20px;
        line-height: 20px;
        margin: 0 0 15px;
        text-transform: uppercase;
    }

    #social:hover {
        -webkit-transform:scale(1.1); 
        -moz-transform:scale(1.1); 
        -o-transform:scale(1.1); 
    }
    #social {
        -webkit-transform:scale(0.8);
        /* Browser Variations: */
        -moz-transform:scale(0.8);
        -o-transform:scale(0.8); 
        -webkit-transition-duration: 0.5s; 
        -moz-transition-duration: 0.5s;
        -o-transition-duration: 0.5s;
    }           
    /* 
        Only Needed in Multi-Coloured Variation 
    */
    .social-fb:hover {
        color: #3B5998;
    }
    .social-tw:hover {
        color: #4099FF;
    }
    .social-gp:hover {
        color: #d34836;
    }
    .social-em:hover {
        color: #f39c12;
    }
    .nomargin { margin:0px; padding:0px;}





    .footer-bottom {
        min-height: 30px;
        width: 100%;
    }
    .copyright {
        color: #fff;
        line-height: 30px;
        min-height: 30px;
        padding: 7px 0;
    }
    .design {
        color: #fff;
        line-height: 30px;
        min-height: 30px;
        padding: 7px 0;
        text-align: right;
    }
    .design a {
        color: #fff;
    }
