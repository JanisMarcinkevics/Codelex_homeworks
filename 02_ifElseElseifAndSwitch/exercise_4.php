<?php

$unknown = readline('input a number:');
$valueX = 10;
$valueY = 100;

if(!is_numeric($unknown)) {
    echo $unknown . " is not a number";
}
if ($unknown > $valueX) {
    echo $unknown . " is larger than " . $valueX . "\n";
    if ($unknown < $valueY) {
        echo $unknown . " is less than " . $valueY . "\n";
        if ($unknown % 2 == 0) {
            echo $unknown . " is even";
        }
    }
}



