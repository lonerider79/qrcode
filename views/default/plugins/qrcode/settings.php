<div class="plugin-panel">
<?php 
    /**
     * QR Code Administration Page. Uses default action submitter
     * @package qrcode
     * 
     */
    elgg_load_library('qrcode'); //To get the Constants
    elgg_load_library('qrcore');
    $ecc_options = array(
            QR_ECLEVEL_L => "L(minimum)",
            QR_ECLEVEL_M => "M",
            QR_ECLEVEL_Q => "Q",
            QR_ECLEVEL_H => "H(maximum)"
    );
    $size_options = array_combine(range(1,10),range(1,10)); /* 1-10 */
    
    $qrcode_ECC = elgg_get_plugin_setting('qrcode_ECC', 'qrcode');
    $qrcode_Size = elgg_get_plugin_setting('qrcode_Size', 'qrcode');

    //set defaults
    $qrcode_ECC = ($qrcode_ECC == '') ? QR_ECLEVEL_M : $qrcode_ECC;
    $qrcode_Size = ($qrcode_Size == '') ? 5 : intval($qrcode_Size);
    
    echo "<h4>";
    echo elgg_echo('qrcode:admin:title:qrcode');
    echo "</h4><br/>";
    echo '<label>' . elgg_echo('qrcode:admin:ecc-level') . ':' . '</label>';
    echo "<br />";
    echo elgg_view("input/dropdown", array("name" => "params[qrcode_ECC]", "options_values" =>$ecc_options, "value" => $qrcode_ECC, "class" => "mls"));
    echo "<div class='elgg-subtext'>" . elgg_echo("qrcode:admin:ecc-level:description") . "</div>";
    echo "<br />";
    
    echo '<label>' . elgg_echo('qrcode:admin:size') . ':' . '</label>';
    echo "<br />";
    echo elgg_view("input/dropdown", array("name" => "params[qrcode_Size]", "options_values" =>$size_options, "value" => $qrcode_Size, "class" => "mls"));
    echo "<div class='elgg-subtext'>" . elgg_echo("qrcode:admin:ecc-size:description") . "</div>";
    echo "<br />";                    



$url = current_page_url();
echo "<h3>" . elgg_echo('qrcode:admin:preview') . "</h3><br/>";

echo elgg_view('output/img',array('src' => elgg_get_site_url() . 'qrbitmap/url/' . strToHex(current_page_url()),'alt' => 'QR Code'));
?>	
</div>
