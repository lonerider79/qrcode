<?php
/*************************
 * elgg plugin - QR code for page URL's
 * Creates QR code image placeholders and Bitmap URL
 * @package qrcode
 * @param string $vars['qurl'] The URL to be encoded into hext and passed to Image<IMG ..>
 *  
 *************************/
    elgg_load_library('qrshared');
    $qc_url = elgg_get_site_url() . '/qrcode/qrcode/' .	strToHex($vars['qurl']); //pages link
    $body = '<ul class="elgg-qrcode-wrapper"><li>';
    $body .= elgg_view('output/img',array('src' => $qc_url, 'alt' => $vars['qurl']));
    $body.= '</li></ul>';

    echo $body;
    return TRUE;
?>