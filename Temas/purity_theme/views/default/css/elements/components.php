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
    /* ***************************************
            Image Block
    *************************************** */
    .elgg-image-block {
        padding: 3px 0;
    }
    .elgg-image-block .elgg-image {
        float: left;
        margin-right: 5px;
    }
    .elgg-image-block .elgg-image-alt {
        float: right;
        margin-left: 5px;
    }

    /* ***************************************
            List
    *************************************** */
    .elgg-list {
        border-top: 1px dotted #CCCCCC;
        margin: 5px 0;
        clear: both;
    }
    .elgg-list > li {
        border-bottom: 1px dotted #CCCCCC;
    }

    .elgg-item .elgg-subtext {
        margin-bottom: 5px;
    }
    .elgg-item .elgg-content {
        margin: 10px 5px;
    }

    /* ***************************************
            Gallery
    *************************************** */
    .elgg-gallery {
        border: none;
        margin-right: auto;
        margin-left: auto;
    }
    .elgg-gallery td {
        padding: 5px;
    }
    .elgg-gallery-fluid > li {
        float: left;
    }
    .elgg-gallery-users > li {
        margin: 0 2px;
    }

    /* ***************************************
            Tables
    *************************************** */
    .elgg-table {
        width: 100%;
        border-top: 1px solid #ccc;
    }
    .elgg-table td, .elgg-table th {
        padding: 4px 8px;
        border: 1px solid #ccc;
    }
    .elgg-table th {
        background-color: #ddd;
    }
    .elgg-table tr:nth-child(odd), .elgg-table tr.odd {
        background-color: #fff;
    }
    .elgg-table tr:nth-child(even), .elgg-table tr.even {
        background-color: #f0f0f0;
    }
    .elgg-table-alt {
        width: 100%;
        border-top: 1px solid #ccc;
    }
    .elgg-table-alt td {
        padding: 2px 4px 2px 4px;
        border-bottom: 1px solid #ccc;
    }
    .elgg-table-alt td:first-child {
        width: 200px;
    }
    .elgg-table-alt tr:hover {
        background: #E4E4E4;
    }

    /* ***************************************
            Owner Block
    *************************************** */
    .elgg-owner-block {
        margin-bottom: 20px;
    }

    /* ***************************************
            Messages
    *************************************** */
    .elgg-message {
        color: white;
        font-weight: bold;
        display: block;
        padding: 3px 10px;
        cursor: pointer;
        opacity: 0.9;
        padding:10px;
        -moz-border-radius:15px;
        -webkit-border-radius:15px;
        border-radius:15px;
        border:4px solid #EEEEEE;
    }
    .elgg-state-success {
        background-color: black;
    }
    .elgg-state-error {
        background-color: red;
    }
    .elgg-state-notice {
        background-color: #535353;
    }

    /* ***************************************
            River
    *************************************** */
    .elgg-river {
        border-top: 1px solid #CCC;
    }
    .elgg-river > li {
        border-bottom: 1px solid #CCC;
    }
    .elgg-river-item {
        padding: 7px 0;
    }
    .elgg-river-item .elgg-pict {
        margin-right: 20px;
    }
    .elgg-river-timestamp {
        color: #666;
        font-size: 85%;
        font-style: italic;
        line-height: 1.2em;
    }

    .elgg-river-attachments,
    .elgg-river-message,
    .elgg-river-content {
        border-left: 1px solid #CCC;
        font-size: 85%;
        line-height: 1.5em;
        margin: 8px 0 5px 0;
        padding-left: 5px;
    }
    .elgg-river-attachments .elgg-avatar,
    .elgg-river-attachments .elgg-icon {
        float: left;
    }
    .elgg-river-layout .elgg-input-dropdown {
        float: right;
        margin: 10px 0;
    }

    .elgg-river-comments-tab {
        display: block;
        background-color: #EEE;
        color: #535353;
        margin-top: 5px;
        width: auto;
        float: right;
        font-size: 85%;
        padding: 1px 7px;
    }

    <?php //@todo components.php ?>
    .elgg-river-comments {
        margin: 0;
        border-top: none;
    }
    .elgg-river-comments li:first-child {
    }
    .elgg-river-comments li:last-child {
    }
    .elgg-river-comments li {
        background-color: #EEE;
        border-bottom: none;
        padding: 4px;
        margin-bottom: 2px;
    }
    .elgg-river-comments .elgg-media {
        padding: 0;
    }
    .elgg-river-more {
        background-color: #EEE;
        padding: 2px 4px;
        font-size: 85%;
        margin-bottom: 2px;
    }

    <?php //@todo location-dependent styles ?>
    .elgg-river-item form {
        background-color: #EEE;
        padding: 4px;
        height: 30px;
    }
    .elgg-river-item input[type=text] {
        width: 80%;
    }
    .elgg-river-item input[type=submit] {
        margin: 0 0 0 10px;
    }


    /* **************************************
            Comments (from elgg_view_comments)
    ************************************** */
    .elgg-comments {
        margin-top: 25px;
    }
    .elgg-comments > form {
        margin-top: 15px;
    }

    /* ***************************************
            Image-related
    *************************************** */
    .elgg-photo {
        border: 1px solid #ccc;
        padding: 3px;
        background-color: white;
    }

    /* ***************************************
            Tags
    *************************************** */
    .elgg-tags {
        display: inline;
        font-size: 85%;
    }
    .elgg-tags li {
        display: inline;
        margin-right: 5px;
    }
    .elgg-tags li:after {
        content: ",";
    }
    .elgg-tags li:last-child:after {
        content: "";
    }
    .elgg-tagcloud {
        text-align: justify;
    }