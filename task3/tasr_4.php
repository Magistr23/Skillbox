<?php
$a = rand(0, 1);
$d = $a == 0 ? null : rand(1, 3);
var_dump($d);
switch ($d) {
    case null:
        $d = null;
        echo "null";
        break;
    case 1:
        $d = 1;
        echo "1";
        break;
    default:
        echo "Пройдет время, и жизнь покажет, что все было только к лучшему.";
        break;
}
var_dump(isset($d));
/*$c = $d ?? null ''*/
/*switch ($d ?? null) {
    case null:
        $c = $d;
        break;
    default:
        $c = rand(20, 30);
        break;

}*/
$c = $d ?? rand(20, 30);
var_dump($c);
