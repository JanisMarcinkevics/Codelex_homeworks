<?php


//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable
// "dayNumber" is 0, 1, ..., 6, respectively. Otherwise, it shall print "Not a valid day".

//Use a "switch-case-default" statement.

while (true) {
    $input = readline("Enter a number of a day from 0 to 6: ");
    switch($input) {
        case "0":
            var_dump($input);
            exit ("Sunday \n");
        case 1:
            exit ("Monday \n");
        case 2:
            exit ("Tuesday \n");
        case 3:
            exit ("Wednesday \n");
        case 4:
            exit ("Thursday \n");
        case 5:
            exit ("Friday \n");
        case 6:
            exit ("Saturday \n");
        default:
            var_dump($input);
            echo "wrong input!\n";
    }
}