<?php

//Write a program to accept two integers and return true if the either one is 15 or if their sum or difference is 15.

$firstInteger = null;
$secondInteger = null;

while ($firstInteger == null) {
    $input = readline("Enter first integer: ");
    if (is_numeric($input) && floor($input) == $input) {
        $firstInteger = $input;
    } else {
        echo "wrong input!\n";
    }
}

while ($secondInteger == null) {
    $input = readline("Enter second integer: ");
    if (is_numeric($input) && floor($input) == $input) {
        $secondInteger = $input;
    } else {
        echo "wrong input!\n";
    }
}

if (
    $firstInteger == 15 ||
    $secondInteger == 15 ||
    $firstInteger + $secondInteger == 15 ||
    abs($firstInteger - $secondInteger) == 15) {
    echo "true\n";
}
