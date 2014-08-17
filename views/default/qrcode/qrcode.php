<?php
/*************************
 * elgg plugin - QR code for page URL's
 * Creates QR code image placeholders and Bitmap URL
 * @package qrcode
 * @param string $vars['qurl'] The URL to be encoded into hext and passed to Image<IMG ..>
 *  
 *************************/
    elgg_load_library('qrshared');
    
    
    $pos = strrpos($vars['qurl'], elgg_get_site_url()); // Security fix. Prevent other domains from hotlinking
    $body = '<ul class="elgg-qrcode-wrapper"><li>';
    if($pos === false) { //Hotlinked
        $qc_url = elgg_get_site_url() . '/qrcode/qrcode/' . strToHex('Hotlinking not allowed'); //pages link
        $body .= elgg_view('output/img',array('src' => $qc_url, 'alt' => 'No Hotlinking please'));
    } else {
        $qc_url = elgg_get_site_url() . '/qrcode/qrcode/' . strToHex($vars['qurl']); //pages link
        $body .= elgg_view('output/img',array('src' => $qc_url, 'alt' => $vars['qurl']));
    };
    $body.= '</li></ul>';

    echo $body;
    return TRUE;
?>