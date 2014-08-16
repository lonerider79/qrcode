<?php
/**
 * Sidebar Setup for QRCode Image
 * @package qrcode
 */
    $label = elgg_echo('qrcode:label');
    $body = elgg_view('qrcode/qrcode',array('qurl' => current_page_url()));
    echo elgg_view_module('aside', $label, $body);
?>