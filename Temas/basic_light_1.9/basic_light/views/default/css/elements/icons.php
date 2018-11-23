<?php
/**
 * Elgg icons
 *
 * @package Elgg.Core
 * @subpackage UI
 */
?>
/* <style> /**/

/* ***************************************
	ICONS
*************************************** */

.elgg-icon {
	background: transparent url(<?php echo elgg_get_site_url(); ?>_graphics/elgg_sprites.png) no-repeat left;
	width: 16px;
	height: 16px;
	margin: 0 2px;
}
.elgg-icon-arrow-left {
	width: 15px;
	height: 22px;
    margin: 0 10px;
	background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/icons/arrow_left.png) no-repeat;
	background-position: 0 0;
}
.elgg-icon-arrow-right {
	width: 15px;
	height: 22px;
    margin: 0 10px;
	background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/icons/arrow_right.png) no-repeat;
	background-position: 0 0;
}
.elgg-icon-arrow-two-head {
	background-position: 0 -36px;
}
.elgg-icon-attention:hover {
	background-position: 0 -54px;
}
.elgg-icon-attention {
	background-position: 0 -72px;
}
.elgg-icon-calendar {
	background-position: 0 -90px;
}
.elgg-icon-cell-phone {
	background-position: 0 -108px;
}
.elgg-icon-checkmark:hover {
	background-position: 0 -126px;
}
.elgg-icon-checkmark {
	background-position: 0 -144px;
}
.elgg-icon-clip:hover {
	background-position: 0 -162px;
}
.elgg-icon-clip {
	background-position: 0 -180px;
}
.elgg-icon-cursor-drag-arrow {
	background-position: 0 -198px;
}
.elgg-icon-delete-alt:hover {
	background-position: 0 -216px;
}
.elgg-icon-delete-alt {
	background-position: 0 -234px;
}
.elgg-icon-delete:hover {
	background-position: 0 -252px;
}
.elgg-icon-delete {
	background-position: 0 -270px;
}
.elgg-icon-download:hover {
	background-position: 0 -288px;
}
.elgg-icon-download {
	background-position: 0 -306px;
}
.elgg-icon-eye {
	background-position: 0 -324px;
}
.elgg-icon-facebook {
	background-position: 0 -342px;
}
.elgg-icon-grid {
	width: 22px;
	height: 22px;
	background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/icons/grid.png) no-repeat;
	background-position: 0 0;
}
.elgg-icon-home:hover {
	display: none;
}
.elgg-icon-home {
	display: none !important;
}
.elgg-icon-hover-menu:hover {
    background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/avatar_menu_arrows.png) no-repeat;
    background-position: right bottom;
    width: 100%;
    height: 100%;
}
.elgg-icon-hover-menu {
    background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/avatar_menu_arrows.png) no-repeat;
    background-position: right bottom;
    width: 100%;
    height: 100%;
}
.elgg-icon-info:hover {
	background-position: 0 -468px;
}
.elgg-icon-info {
	background-position: 0 -486px;
}
.elgg-icon-link:hover {
	background-position: 0 -504px;
}
.elgg-icon-link {
	background-position: 0 -522px;
}
.elgg-icon-list {
	width: 24px;
	height: 21px;
	background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/icons/list.png) no-repeat;
	background-position: 0 0;
}
.elgg-icon-lock-closed {
	background-position: 0 -558px;
}
.elgg-icon-lock-open {
	background-position: 0 -576px;
}
.elgg-icon-mail-alt:hover {
	background-position: 0 -594px;
}
.elgg-icon-mail-alt {
	background-position: 0 -612px;
}
.elgg-icon-mail:hover {
	background-position: 0 -630px;
}
.elgg-icon-mail {
	background-position: 0 -648px;
}
.elgg-icon-photo {
	background-position: 0 -666px;
}
.elgg-icon-print-alt {
	background-position: 0 -684px;
}
.elgg-icon-print {
	background-position: 0 -702px;
}
.elgg-icon-push-pin-alt {
	width: 24px;
	height: 24px;
	background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/icons/bookmark.png) no-repeat;
	background-position: 0 0;
}
.elgg-icon-push-pin {
	background-position: 0 -738px;
}
.elgg-icon-redo {
	background-position: 0 -756px;
}
.elgg-icon-refresh:hover {
	background-position: 0 -774px;
}
.elgg-icon-refresh {
	background-position: 0 -792px;
}
.elgg-icon-round-arrow-left {
	background-position: 0 -810px;
}
.elgg-icon-round-arrow-right {
	background-position: 0 -828px;
}
.elgg-icon-round-checkmark {
	background-position: 0 -846px;
}
.elgg-icon-round-minus {
	background-position: 0 -864px;
}
.elgg-icon-round-plus {
	background-position: 0 -882px;
}
.elgg-icon-rss {
	width: 24px;
	height: 24px;
	background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/icons/rss.png) no-repeat;
	background-position: 0 0;
}
.elgg-icon-search-focus {
	background-position: 0 -918px;
}
.elgg-icon-search {
	background-position: 0 -936px;
}
.elgg-icon-settings-alt:hover {
	background-position: 0 -954px;
}
.elgg-icon-settings-alt {
	background-position: 0 -972px;
}
.elgg-icon-settings {
	display: none !important;
}
.elgg-icon-share:hover {
	background-position: 0 -1008px;
}
.elgg-icon-share {
	background-position: 0 -1026px;
}
.elgg-icon-shop-cart:hover {
	background-position: 0 -1044px;
}
.elgg-icon-shop-cart {
	background-position: 0 -1062px;
}
.elgg-icon-speech-bubble-alt:hover {
	background-position: 0 -1080px;
}
.elgg-icon-speech-bubble-alt {
	background-position: 0 -1098px;
}
.elgg-icon-speech-bubble:hover {
	background-position: 0 -1116px;
}
.elgg-icon-speech-bubble {
	background-position: 0 -1134px;
}
.elgg-icon-star-alt {
	background-position: 0 -1152px;
}
.elgg-icon-star-empty:hover {
	background-position: 0 -1170px;
}
.elgg-icon-star-empty {
	background-position: 0 -1188px;
}
.elgg-icon-star:hover {
	background-position: 0 -1206px;
}
.elgg-icon-star {
	background-position: 0 -1224px;
}
.elgg-icon-tag {
	width: 24px;
	height: 24px;
	background: transparent url(<?php echo elgg_get_site_url();?>mod/basic_light/graphics/icons/tag.png) no-repeat;
	background-position: 0 0;
}
.elgg-sidebar .elgg-icon-tag,
.elgg-sidebar-alt .elgg-icon-tag {
	margin-right: 10px;
}
.elgg-icon-thumbs-down-alt:hover {
	background-position: 0 -1278px;
}
.elgg-icon-thumbs-down:hover,
.elgg-icon-thumbs-down-alt {
	background-position: 0 -1296px;
}
.elgg-icon-thumbs-down {
	background-position: 0 -1314px;
}
.elgg-icon-thumbs-up-alt:hover {
	background-position: 0 -1332px;
}
.elgg-icon-thumbs-up:hover,
.elgg-icon-thumbs-up-alt {
	background-position: 0 -1350px;
}
.elgg-icon-thumbs-up {
	background-position: 0 -1368px;
}
.elgg-icon-trash {
	background-position: 0 -1386px;
}
.elgg-icon-twitter {
	background-position: 0 -1404px;
}
.elgg-icon-undo {
	background-position: 0 -1422px;
}
.elgg-icon-user:hover {
	background-position: 0 -1440px;
}
.elgg-icon-user {
	background-position: 0 -1458px;
}
.elgg-icon-users:hover {
	background-position: 0 -1476px;
}
.elgg-icon-users {
	background-position: 0 -1494px;
}
.elgg-icon-video {
	background-position: 0 -1512px;
}


.elgg-avatar > .elgg-icon-hover-menu {
	display: none;
	position: absolute;
	right: 0;
	bottom: 0;
	margin: 0;
	cursor: pointer;
}

.elgg-ajax-loader {
	background: white url(<?php echo elgg_get_site_url(); ?>_graphics/ajax_loader_bw.gif) no-repeat center center;
	min-height: 31px;
	min-width: 31px;
}

/* ***************************************
	AVATAR ICONS
*************************************** */
.elgg-avatar {
	position: relative;
	display: inline-block;
}
.elgg-avatar > a > img {
	display: block;
}
.elgg-avatar-tiny > a > img {
	width: 25px;
	height: 25px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	border-radius: 3px;
	
	background-clip:  border;
	background-size: 25px;
}
.elgg-avatar-small > a > img {
	width: 40px;
	height: 40px;
	
	/* remove the border-radius if you don't want rounded avatars in supported browsers */
	border-radius: 5px;
	
	background-clip:  border;
	background-size: 40px;
}
.elgg-avatar-medium > a > img {
	width: 100px;
	height: 100px;
}
.elgg-avatar-large > a > img {
	max-width: 100%;
	height: auto;
}
.elgg-state-banned {
	opacity: 0.5;
}
