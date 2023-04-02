<?php

//Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int.
// Take note that it is the same as factorial of N.

$number = null;

while ($number == null) {
    $input = readline("Enter an integer number to factor: ");
    if (is_numeric($input) && floor($input) == $input) {
        $number = $input;
    } else {
        echo "wrong input!\n";
    }
}

$factorial = array_product(range(1, $number));

echo "Factorial of your number $number is $factorial\n";