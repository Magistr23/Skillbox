<?php
$a = [
    'a' => 'word a',
    'b' => 'hello',
    'c' => 'privet!',
    'd' => 'super hard',
    'i' => 'word a',
];
$d = count($a);
//var_dump($d);
$c = array_flip($a);
$q = array_flip($c);
$w = array_keys($q);
//var_dump($w);
$s =['!'];
$e = array_merge($w, $s);
//var_dump($e);
$r = array_values($e);
$x = array_combine($r, $a);
var_dump($x);