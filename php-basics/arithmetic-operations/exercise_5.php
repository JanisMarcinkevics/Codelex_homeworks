<?php

//Write a program that picks a random number from 1-100.
// Give the user a chance to guess it. If they get it right, tell them so.
// If their guess is higher than the number, say "Too high."
// If their guess is lower than the number, say "Too low." Then quit.

$min = 1;
$max = 100;
$randomNumber = rand($min, $max);
$number = null;

while ($number == null) {
    $input = readline("Guess my number between $min and $max? ");
    if (is_numeric($input)) {
        $number = $input;
    } else {
        echo "wrong input!\n";
    }
}


if ($number == $randomNumber) {
    echo "WOW YOU ARE LUCKY ONE!!! 
    I was thinking exactly of $randomNumber";
} else {
    echo $number > $randomNumber ?
        "Sorry, you are too high.  I was thinking of $randomNumber\n" :
        "Sorry, you are too low.  I was thinking of $randomNumber\n";
}
