<?php
$a = [
    'a' => 'word a',
    'b' => 'hello',
    'c' => 'privet!',
    'd' => 'super hard',
    'i' => 'word a',
];
$d = count($a);
var_dump($d);
//$c = array_reverse($a);
$c = array_flip($a);
$q = array_flip($c);
var_dump($q);
$w = count($q);
$s = $d != $w;
var_dump($s);
