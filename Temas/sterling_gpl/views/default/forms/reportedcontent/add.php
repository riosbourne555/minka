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
$guid = 0;
$title = get_input('title', "");
$address = get_input('address', "");

$description = "";
$owner = elgg_get_logged_in_user_entity();
?>


<div class="form-group">
    <label><?php echo elgg_echo('title'); ?></label>
    <?php
    echo elgg_view('input/text', array(
        'name' => 'title',
        'value' => $title,
    ));
    ?>
</div>

<div class="form-group">
    <label><?php echo elgg_echo('reportedcontent:address'); ?></label>
    <?php
    echo elgg_view('input/url', [
        'name' => 'address',
        'value' => $address,
        'readonly' => (bool) $address,
    ]);
    ?>
</div>

<div class="form-group">
    <label><?php echo elgg_echo('reportedcontent:description'); ?></label>
    <?php
    echo elgg_view('input/plaintext', array(
        'name' => 'description',
        'value' => $description,
    ));
    ?>
</div>

<?php
echo elgg_view('input/submit', array(
    'value' => elgg_echo('reportedcontent:report'),
));
echo elgg_view('input/button', [
    'class' => 'elgg-button-cancel mls',
    'value' => elgg_echo('cancel'),
]);