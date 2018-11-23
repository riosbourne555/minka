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
$frontleft = elgg_get_plugin_setting('frontleft', 'purity_theme');
if (!$frontleft)
    $frontleft = '<h2>You can edit this information in the admin section of this theme.</h2>';
echo $frontleft;
?>