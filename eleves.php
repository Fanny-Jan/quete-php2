<?php

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];

var_dump($students);

$total =0;

foreach($students as $age)
{
    $total += $age;
}


$total /= count($students);

echo $total;