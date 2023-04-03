<?php

//Write a program that reads an positive integer and count the number of digits the number has.


while (true) {
    $input = readline("Enter a positive integer: ");
    if (is_numeric($input) && floor($input) == $input && $input >=0) {
        exit ("Number of digits in your integer is " . strlen($input)) . PHP_EOL;
    } else {
        echo "wrong input!\n";
    }
}