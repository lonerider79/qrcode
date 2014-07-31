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
    $lib = elgg_get_plugins_path() . 'qrcode/lib/interconnected.php';
    elgg_register_library('qrcode', $lib);
    elgg_load_library('qrcode');

    elgg_extend_view('css/admin', 'interconnected/admin', 1);
    elgg_extend_view('page/elements/head', 'interconnected/metatags', 500);
    if (($context != 'admin')&&($context != 'members')&&($context != 'messages')&&($context != 'co-creators')&&($context != 'reportedcontent')&&($context != 'settings')&&($context != 'suggested_friends')&&($context != 'suggested_friends_extended'))
    {
	    elgg_extend_view('css/elgg', 'interconnected/css');
        elgg_extend_view('page/elements/sidebar','sidebar/interconnected',700);
      	elgg_extend_view('profile/details','interconnected/profile',500);
        elgg_extend_view('widgets/set_description/content', 'interconnected/simple', 500);
	}

    if (elgg_is_active_plugin('profile_manager'))
        elgg_extend_view('profile/owner_block', 'interconnected/social-shortcuts',500);
    
    // Register widgets
    elgg_register_widget_type('qrcode', elgg_echo('interconnected:widget:buttons'), elgg_echo('interconnected:widget:buttons_descr'), 'profile,index');
}

// call init
elgg_register_event_handler('init','system','qrcode_init');

?>