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
            Typography
    *************************************** */
    body {
        font-size: 80%;
        line-height: 1.4em;
        font-family: 'Droid Sans', sans-serif;}

    a {
        color: #535353;
    }

    a:hover,
    a.selected { <?php //@todo remove .selected  ?>
        color: #555555;
        text-decoration: underline;
    }

    p {
        margin-bottom: 15px;
    }

    p:last-child {
        margin-bottom: 0;
    }

    pre, code {
        font-size: 11px;

        background:#EBF5FF;
        color:#000000;
        overflow:auto;

        overflow-x: auto; /* Use horizontal scroller if needed; for Firefox 2, not needed in Firefox 3 */

        white-space: pre-wrap;
        word-wrap: break-word; /* IE 5.5-7 */

    }

    pre {
        padding:3px 15px;
        margin:0px 0 15px 0;
        line-height:1.3em;
    }

    code {
        padding:1px 3px;
    }

    .elgg-monospace {
    }

    blockquote {
        line-height: 1.3em;
        padding:3px 15px;
        margin:0px 0 15px 0;
        background:#EBF5FF;
        border:none;

    }

    h1, h2, h3, h4, h5, h6 {
        font-weight: bold;
        color: #333333;
    }

    h1 { font-size: 1.8em; }
    h2 { font-size: 1.5em; line-height: 1.1em; padding-bottom:5px}
    h3 { font-size: 1.2em; }
    h4 { font-size: 1.0em; }
    h5 { font-size: 0.9em; }
    h6 { font-size: 0.8em; }

    .elgg-heading-site, .elgg-heading-site:hover {
        font-size: 1.2em;
        line-height: 1.2em;
        color: #333333;
        text-decoration: none;
        margin-top:40px;
        margin-left:40px;
        float:left;
    }

    .elgg-heading-main {
        float: left;
        max-width: 530px;
        margin-right: 10px;
    }
    .elgg-heading-basic {
        color: #333333;
        font-size: 1.2em;
        font-weight: bold;
    }

    .elgg-subtext {
        color: #666666;
        font-size: 85%;
        line-height: 1.2em;
        font-style: italic;
    }

    .elgg-text-help {
        display: block;
        font-size: 85%;
        font-style: italic;
    }

    .elgg-quiet {
        color: #666;
    }

    .elgg-loud {
        color: #333333;
    }

    /* ***************************************
            USER INPUT DISPLAY RESET
    *************************************** */
    .elgg-output {
        margin-top: 10px;
    }

    .elgg-output dt { font-weight: bold }
    .elgg-output dd { margin: 0 0 1em 1em }

    .elgg-output ul, ol {
        margin: 0 1.5em 1.5em 0;
        padding-left: 1.5em;
    }
    .elgg-output ul {
        list-style-type: disc;
    }
    .elgg-output ol {
        list-style-type: decimal;
    }
    .elgg-output table {
        border: 1px solid #ccc;
    }
    .elgg-output table td {
        border: 1px solid #ccc;
        padding: 3px 5px;
    }
    .elgg-output img {
        max-width: 100%;
    }