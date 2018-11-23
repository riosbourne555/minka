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
echo '<div style="width:990px;margin:0px auto;position:relative;">';
echo '<ul class="elgg-system-messages">';

echo '<li class="hidden"></li>';

if (isset($vars['object']) && is_array($vars['object']) && sizeof($vars['object']) > 0) {
    foreach ($vars['object'] as $type => $list) {
        foreach ($list as $message) {
            echo "<li class=\"elgg-message elgg-state-$type\">";
            echo autop($message);
            echo '</li>';
        }
    }
}

echo '</ul></div>';
