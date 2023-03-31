<?php

//Given variable (int) 50 create a condition that prints out "correct" if the variable is inside the range.
//Range should be stored within the 2 separated variables $y and $z.

$integer = 50;

$y = 10;
$z = 20;

if($integer > $y && $integer < $z ) {
    echo "It's in the range";
}
else {
    echo "Out of the range";
}
