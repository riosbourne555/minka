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
if (elgg_get_config('allow_registration') != false) {
    $friend_guid = (int) get_input('friend_guid', 0);
    $invitecode = get_input('invitecode');
    $register_url = elgg_get_site_url() . 'action/register';
    if (elgg_get_config('https_login')) {
        $register_url = str_replace("http:", "https:", $register_url);
    }
    $form_params = array(
        'action' => $register_url,
        'class' => 'elgg-form-account float',
    );
    $body_params = array(
        'friend_guid' => $friend_guid,
        'invitecode' => $invitecode
    );
    $content = elgg_view_form('register', $form_params, $body_params);
    $content .= elgg_view('help/register');
} else {
    $content = '';
}
?>
<div class="custom-index elgg-main elgg-grid clearfix">
    <div class="elgg-col elgg-col-1of2">
        <div class="elgg-inner pvm phm prl">
            <div class="front_left">
                <?php echo elgg_view('purity_theme/leftside'); ?>
                <?php if (!elgg_is_logged_in()) echo $content; ?>
            </div>
        </div>
    </div>
    <div class="elgg-col elgg-col-1of2">
        <div class="elgg-inner pvm">
            <div class="front_right">
                <?php echo elgg_view('purity_theme/rightside'); ?>
            </div>
        </div>
    </div>
</div>