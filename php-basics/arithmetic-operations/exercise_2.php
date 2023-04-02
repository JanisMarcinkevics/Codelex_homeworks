<?php

//Write a program called CheckOddEven which prints "Odd Number"
// if the int variable “number” is odd, or “Even Number” otherwise.
// The program shall always print “bye!” before exiting.

$userNumber = null;

while ($userNumber == null) {
    $input = readline("Enter an integer number: ");
    if (is_numeric($input) && floor($input) == $input) {
        $userNumber = $input;
    } else {
        echo "wrong input!\n";
    }
}
echo $userNumber % 2 == 0 ? "Even Number\nbye!\n" : "Odd Number \nbye!\n";