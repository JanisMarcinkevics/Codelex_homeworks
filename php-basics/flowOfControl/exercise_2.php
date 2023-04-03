<?php

//print if number is positive or negative


while (true) {
    $input = readline("Please input a number: ");
    if (is_numeric($input)) {
        if ($input >= 0) {
            exit("Your input is positive\n");
        }
        else{
            exit("Your input is negative\n");
        }
    } else {
        echo "wrong input!\n";
    }
}