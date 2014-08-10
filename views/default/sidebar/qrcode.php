<?php
    $label = elgg_echo('qrcode:label');
    $body = elgg_view('qrcode/qrcode');
    echo elgg_view_module('aside', $label, $body);
?>