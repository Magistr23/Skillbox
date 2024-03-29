<?php
$str = 'abracadabra';
$shift = 1;
$w = "";
for ($i = 0; $i < strlen($str); $i++){
    $strlen = ord($str[$i]);
    $strlenshift = chr($strlen + $shift);
    $w .= $strlenshift;
}
$str1 = $w;
$q = "";
for ($i = 0; $i < strlen($str1); $i++){
    $strlen1 = ord($str1[$i]);
    $strlenshift1 = chr($strlen1 - $shift);
    $q .= $strlenshift1;
}
echo $str1 . "\n$q";
