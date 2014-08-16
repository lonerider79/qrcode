<?php

/**
 * QR Code Image in PNG format
 * Part of view qrcode/bitmap
 * Outputs the QR Image for the URL
 * @param string $vars[qurl] Contains the URL to be displayed(Non Hex)
 * @param int $vars[qrcode_ECC] ECC Constant Required for the library
 * @param int $vars[qrcode_Size] Size Constant(1-10). Actual library can take upto 40
 * @return binary PNG Binary data with MIME headers.
 */

header('Content-type:image/png');
elgg_load_library('qrcode');
QRcode::png($vars['qurl'],false,$vars['qrcode_ECC'],$vars['qrcode_Size']);

