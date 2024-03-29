<?php
$deposit = 100000;
$money = $deposit;
$years = 0;
$rate = 8;
while ($money < $deposit * 2) {
    $money += $money / 100 * $rate;
    echo 'Деньги '. $money . PHP_EOL;
    echo 'Процент ' . $rate . PHP_EOL;
    echo 'Год ' . $years . PHP_EOL;
    $years++;
    if ($years % 3 === 0 && $years != 0) {
        $rate += 2;
    }
}