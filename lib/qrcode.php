<?php

/* 
 * Common Internal Functions to encode URL to hex(and decode vice vera)
 *  to pass on to the QR Library to create QR Image
 * @package qrcode
 */

/**
 * Convert String to Hex (MB supported)
 * 
 * @param string $urlstring        The URL String to be encoded into Hex String
 * @return string   The Hex Encoded String Sequence
 */

function strToHex($urlstring)
{
    $hex='';
    for ($i=0; $i < strlen($urlstring); $i++)
    {
        $hex .= dechex(ord($urlstring[$i]));
    }
    return $hex;
}

/**
 * Convert HexString to URL String (MB supported)
 * 
 * @param string $urlhex    The Hex Encoded string to be decoded to url
 * @return string   The decoded string
 */
function hexToStr($urlhex)
{
    $string='';
    for ($i=0; $i < strlen($urlhex)-1; $i+=2)
    {
        $string .= chr(hexdec($urlhex[$i].$urlhex[$i+1]));
    }
    return $string;
}
