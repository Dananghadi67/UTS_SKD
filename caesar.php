<?php
function cipher($text)
{
    $key = 4;
    if (ctype_alpha($text)) {
        $nilai = ord(ctype_upper($text) ? 'A' : 'a');
        $ch = ord($text);
        $mod = fmod($ch + $key - $nilai, 26);
        $hasil = chr($mod + $nilai);
        return $hasil;
    }
}

function encrypt($char)
{
    $key = 4;
    $output = "";
    $chars = str_split($char);
    foreach ($chars as $text) {
        $output .= cipher($text, $key);
    }
    return $output;
}
