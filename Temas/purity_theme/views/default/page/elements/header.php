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
echo elgg_view('page/elements/header_logo', $vars);
echo elgg_view('core/account/login_dropdown');
?>
<div id="social_menu">
    <?php echo elgg_view_menu('site'); ?>
    <div style="clear:both;"></div>
</div>
<?php echo elgg_view('page/elements/topbar', $vars); ?>
<div style="clear:both;"></div>