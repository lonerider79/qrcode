<?php
/*************************
 * elgg plugin - simply sharing
 * view: creates sharing buttons for social sites
 * notes: image and description for facebook is taken from metatags - so if these are not set in the page header specifically then they will not be shared.
 * process: entity guid is grabbed from the current url if possible. if no guid is available/found then the page context will be used to locate the data to use to populate the sharing fields for the recipient social network. images are used where possible - blog_tools is supported for blog images. videolist currently only supports medium sized icons.
 *  
 *************************/
    elgg_load_library('qrcode');
    $url = current_page_url();
    
    // build buttons
    
    $options = array('url' => $url);

    $body = '<ul class="elgg-qrcode-wrapper">';
    $body .= '<li>';
    $body .= '<img src="' . elgg_get_site_url() . 'qrcode/bitmap/"></div>';
    $body .= '</li>';       
    $body.= '</ul>';

    echo $body;
    return TRUE;
?>