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
$site = elgg_get_site_entity();
$site_name = $site->name;
$site_url = elgg_get_site_url();
$site_description = $site->description;
?>
<h1 style="float:left;margin-top:10px;">
    <a class="elgg-heading-site" href="<?php echo $site_url; ?>">
        <img src="<?php echo $site_url . 'mod/purity_theme/graphics/logo.png'; ?>">
    </a>
</h1>
<div style="clear:left;"></div>
<p style="float:left;margin-left:20px;"><?php echo $site_description; ?></p>