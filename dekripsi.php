<?php
function ciper($passencryp)
{
    $key = 4;
    if (ctype_alpha($passencryp)) {
        $ch = ord($passencryp);
        $mod = ($ch - $key) % 256;
        $hasil = chr($mod);
        return $hasil;
    }
}

function dekripsi($char)
{
    $key = 4;
    $output = "";
    $chars = str_split($char);
    foreach ($chars as $passencryp) {
        $output .= ciper($passencryp, $key);
    }
    return $output;
}
