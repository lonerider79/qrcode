<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
elgg_load_library('qrcode'); // To get constants

$qrcode_ECC = elgg_get_plugin_setting('qrcode_ECC', 'qrcode');
$qrcode_Size = elgg_get_plugin_setting('qrcode_Size', 'qrcode');
$url = current_page_url();
//set defaults
$qrcode_ECC = ($qrcode_ECC == '') ? QR_ECLEVEL_M : $qrcode_ECC;
$qrcode_Size = ($qrcode_Size == '') ? 5 : intval($qrcode_Size);

echo elgg_view('qrcode/png', array('url' => $url, 'qrcode_ECC' => $qrcode_ECC, 'qrcode_Size' => $qrcode_Size));