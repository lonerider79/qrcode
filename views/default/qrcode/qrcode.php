<?php
/*************************
 * elgg plugin - QR code for page URL's
 * view: creates QR code image placeholders
 *  
 *************************/

    $body = '<ul class="elgg-qrcode-wrapper">';
    $body .= '<li>';
    $body .= '<img src="' . elgg_get_site_url() . 'qrcode/bitmap/"></div>';
    $body .= '</li>';       
    $body.= '</ul>';

    echo $body;
    return TRUE;
?>