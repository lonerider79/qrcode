<?php
/*************************
 * elgg plugin - QR code for page URL's
 * view: creates QR code image placeholders
 *  
 *************************/

    $body = '<ul class="elgg-qrcode-wrapper">';
    $body .= '<li>';
    $body .= elgg_view('output/img',array('src' => elgg_get_site_url() . 'qrbitmap/','alt' => 'QR Code'));
    $body .= '</li>';       
    $body.= '</ul>';

    echo $body;
    return TRUE;
?>