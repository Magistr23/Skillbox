<?php
$a = [
    'a' => 'интересные',
    'd' => 'фильмы',
    'c' => 'это про мистику',
];
$d = array_keys($a);
//var_dump($d);
$c = implode(' ', $d);
echo $c;