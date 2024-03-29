<?php
$a = ['AAA', 'AAB', 'ABA', 'BAA', 'ABB', 'BAB', 'BBA', 'BBB'];
foreach ($a as $item){
    for ($i = 0; $i <= 999; $i++){
        $c = substr(str_repeat(0, 3).$i, -3);
        $rav[] = $item[0] . $c . substr($item, 1);
    }
}
foreach ($rav as $key => &$item) {
    if ($item[1] != $item[2] || $item[2] != $item[3]) {
        $rav = array_merge(array_slice($rav, 0, $key), array_slice($rav, $key + 1));
    }
}
var_dump($rav);
