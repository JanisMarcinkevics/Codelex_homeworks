<?php


// print the largest number

$quantity = 3;
$numArray = [];
while ($quantity > 0) {
    $number = null;
    while ($number == null) {
        $input = readline("Please input a number: ");
        if (is_numeric($input)) {
            $number = $input;
            $numArray[] = $number;
            $quantity--;
        } else {
            echo "wrong input!\n";
        }
    }
}
echo "The largest number you entered is: " . max($numArray) . PHP_EOL;
