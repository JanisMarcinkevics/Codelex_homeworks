<?php

//Write a program to produce the sum of 1, 2, 3, ..., to 100.
// Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
// Also compute and display the average. The output shall look like:
//
//The sum of 1 to 100 is 5050
//The average is 50.5

$firstNumber = null;
$secondNumber = null;

while ($firstNumber == null) {
    $input = readline("Enter the first number: ");
    if (is_numeric($input) && floor($input) == $input) {
        $firstNumber = $input;
    } else {
        echo "wrong input!\n";
    }
}

while ($secondNumber == null) {
    $input = readline("Enter the second number: ");
    if (is_numeric($input) && floor($input) == $input) {
        $secondNumber = $input;
    } else {
        echo "wrong input!\n";
    }
}

$sum = array_sum(range($firstNumber, $secondNumber));
$average = $sum / abs($secondNumber - $firstNumber + 1);
echo "The sum of $firstNumber to $secondNumber is $sum\n";
echo "The average is $average\n";

//The sum of 1 to 100 is 5050
//The average is 50.5