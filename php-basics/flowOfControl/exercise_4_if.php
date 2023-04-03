<?php

//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable
// "dayNumber" is 0, 1, ..., 6, respectively. Otherwise, it shall print "Not a valid day".

//Use:a "nested-if" statement


while (true) {
    $input = readline("Enter a number of a day from 0 to 6: ");
    if (is_numeric($input) && floor($input) == $input && $input >=0 && $input < 7) {
        if ($input == 0) {
            exit ("Sunday \n");
        }
        if ($input == 1) {
            exit ("Monday \n");
        }
        if ($input == 2) {
            exit ("Tuesday \n");
        }
        if ($input == 3) {
            exit ("Wednesday \n");
        }
        if ($input == 4) {
            exit ("Thursday \n");
        }
        if ($input == 5) {
            exit ("Friday \n");
        }
        if ($input == 6) {
            exit ("Saturday \n");
        }
    } else {
        echo "wrong input!\n";
    }
}