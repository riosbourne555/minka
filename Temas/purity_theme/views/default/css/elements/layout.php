<?php
/**
 * Purity Elgg 1.8 - 1.9 Theme
 *
 * @category   Theme
 * @package    purity_theme
 * @author     Shane Barron <admin@socia.us>
 * @copyright  2008-2014 SocialApparatus
 * @license    GNU General Public License (GPL) version 2
 * @version    1.1
 * @link       http://socia.us
 */
$url = elgg_get_site_url();
?>

    /* ***************************************
            PAGE LAYOUT
    *************************************** */
    /***** DEFAULT LAYOUT ******/
    .elgg-page-default {
        min-width: 998px;
    }
    .elgg-page-default .elgg-page-header > .elgg-inner {
        width: 990px;
        margin: 0 auto;
    }
    .elgg-page-default .elgg-page-header {
        background:url(<?php echo $url; ?>mod/purity_theme/graphics/top.gif) top center no-repeat;
    }
    .elgg-page-default .elgg-page-body > .elgg-inner {
        width: 990px;
        margin: 0 auto;

    }
    .elgg-page-default .elgg-page-body {
        background:url(<?php echo $url; ?>mod/purity_theme/graphics/mid.gif) top center repeat-y;
    }

    .elgg-page-default .elgg-page-footer > .elgg-inner {
        width: 990px;
        margin: 0 auto;
        padding: 5px 0;
    }
    .elgg-page-default .elgg-page-footer {
        background:url(<?php echo $url; ?>mod/purity_theme/graphics/bot.gif) bottom center no-repeat;
        height:50px;
    }

    /***** TOPBAR ******/
    .elgg-page-topbar {
        background: #2D2D2D ;
        position: relative;
        height: 24px;
        z-index: 9000;
        width:940px;
        margin-left:auto;
        margin-right:auto;
    }
    .elgg-page-topbar > .elgg-inner {
        padding: 0 10px;
    }

    /***** PAGE MESSAGES ******/
    .elgg-system-messages {
        position: absolute;
        top: 24px;
        right: 20px;
        max-width: 500px;
        z-index: 2000;
    }
    .elgg-system-messages li {
        margin-top: 10px;
    }
    .elgg-system-messages li p {
        margin: 0;
    }

    /***** PAGE HEADER ******/
    .elgg-page-header {
        position: relative;
    }
    .elgg-page-header > .elgg-inner {
        position: relative;
    }

    /***** PAGE BODY LAYOUT ******/
    .elgg-layout {
        min-height: 360px;
    }
    .elgg-layout-one-sidebar {
        background: transparent url(<?php echo $url; ?>_graphics/sidebar_background.gif) repeat-y right top;
    }
    .elgg-layout-two-sidebar {
        background: transparent url(<?php echo $url; ?>_graphics/two_sidebar_background.gif) repeat-y right top;
    }
    .elgg-sidebar {
        position: relative;
        padding: 20px 10px;
        float: right;
        width: 210px;
        margin: 0 0 0 10px;
        -webkit-border-top-left-radius: 15px;
        -webkit-border-top-right-radius: 15px;
        -moz-border-radius-topleft: 15px;
        -moz-border-radius-topright: 15px;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;}
    .elgg-sidebar-alt {
        position: relative;
        padding: 20px 10px;
        float: left;
        width: 160px;
        margin: 0 10px 0 0;
    }
    .elgg-main {
        position: relative;
        min-height: 360px;
        padding: 10px;
    }
    .elgg-main > .elgg-head {
        padding-bottom: 3px;
        border-bottom: 1px solid #CCCCCC;
        margin-bottom: 10px;
    }

    /***** PAGE FOOTER ******/
    .elgg-page-footer {
        position: relative;
        padding-top:20px;
    }
    .elgg-page-footer {
        color: #999;
    }
    .elgg-page-footer a:hover {
        color: #666;
    }
    .elgg-layout-widgets > .elgg-widgets {
        float: right;
    }