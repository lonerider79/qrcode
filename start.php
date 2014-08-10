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
    elgg_register_action('qrcode/bitmap', __DIR__ . "/actions/bitmap_action.php",'public');
    elgg_extend_view('css/admin', 'qrcode/admin', 1);

    if (($context != 'admin')&&($context != 'members')&&($context != 'messages')&&($context != 'co-creators')&&($context != 'reportedcontent')&&($context != 'settings')&&($context != 'suggested_friends')&&($context != 'suggested_friends_extended'))
    {
	elgg_extend_view('css/elgg', 'qrcode/css');
        elgg_extend_view('page/elements/sidebar','sidebar/qrcode',700);
        elgg_extend_view('widgets/set_description/content', 'qrcode/simple', 500);
    }


    
    // Register widgets
    elgg_register_widget_type('qrcode', elgg_echo('qrcode:widget:buttons'), elgg_echo('qrcode:widget:buttons_descr'), 'index');
}

// call init
elgg_register_event_handler('init','system','qrcode_init');

?>