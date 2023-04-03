<?php

//On your phone keypad, the alphabets are mapped to digits as follows:
// ABC(2), DEF(3), GHI(4), JKL(5), MNO(6), PQRS(7), TUV(8), WXYZ(9).
//Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
// and converts to a sequence of keypad digits.

//Use a "nested-if" statement
$letterArray = [
    ["ABC", 2],
    ["DEF", 3],
    ["GHI", 4],
    ["JKL", 5],
    ["MNO", 6],
    ["PQRS", 7],
    ["TUV", 8],
    ["WXYZ", 9]
];
$string = '';
$output = '';
while ($string == '') {
    $input = readline("Enter a string consisting only from letters A-Z: ");
    if (preg_replace("/[^A-Za-z]/", '', $input) == $input) {
        $string = strtoupper($input);
        for ($i = 0; $i < strlen($string); $i++) {
            foreach ($letterArray as $letters) {
                if (strpos($letters[0], $string[$i]) || strpos($letters[0], $string[$i]) === 0) {
                    $output .= str_repeat($letters[1], strpos($letters[0], $string[$i]) + 1) . " ";
                }
            }
        }
        echo $output;
    } else {
        echo "wrong input!\n";
    }
}