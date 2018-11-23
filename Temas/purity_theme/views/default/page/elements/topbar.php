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
?>
<div id="social_topbar">
    <div style="width:930px;margin:0px auto;">
        <?php
        if (elgg_is_logged_in()):
            echo elgg_view_menu('topbar', array('sort_by' => 'priority', array('elgg-menu-hz')));
        endif
        ?>
    </div>
    <div style="clear:both;"></div>
</div>
<?php
$content = elgg_view("navigation/topbar_tools");
if ($content) {
    elgg_deprecated_notice('navigation/topbar_tools was deprecated. Extend the topbar menus or the page/elements/topbar view directly', 1.8);
    echo $content;
}
