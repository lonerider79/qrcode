<?php

/**
 * qrcode - QR Code for page URL plugin for elgg
 * @license GNU Public License version 3
 * @author Vinu Felix <vinu.felix@gmail.com>
 */


define("NEW_LINE", "%0D%0A");


function qrcode_init() {
    $context = elgg_get_context();
   // elgg_dump($context);
    elgg_register_library("qrcode", dirname(__FILE__) . "/vendors/phpqrcode/qrlib.php");
    elgg_register_library('qrcore', __DIR__ . "/lib/qrcode.php",'public');
    // Register a pagehandler
    elgg_register_page_handler('qrbitmap', 'qrbitmap_page_handler');
    elgg_extend_view('css/admin', 'qrcode/admin', 1);

    if (($context != 'admin')&&($context != 'members')&&($context != 'messages')&&($context != 'co-creators')&&($context != 'reportedcontent')&&($context != 'settings')&&($context != 'suggested_friends')&&($context != 'suggested_friends_extended'))
    {
	elgg_extend_view('css/elgg', 'qrcode/css');
        elgg_extend_view('page/elements/sidebar','sidebar/qrcode',700);
    }
}

function qrbitmap_page_handler($page, $handler) {

    if (!isset($page[0])) {
        $page[0] = 'index';
    }
    $plugin_path = elgg_get_plugins_path();
    $pages = $plugin_path . 'qrcode/pages/qrcode';
    switch ($page[0]) {
        case 'url':
            $vars["qurl"]=urldecode($page[1]);
            include "$pages/index.php";
            break;
        default:
            return false;
    }
    return true;
}

// call init
elgg_register_event_handler('init','system','qrcode_init');

?>