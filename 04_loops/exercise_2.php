<?php

//Create an array with integers (up to 10) and print them out using for loop.

$array = [1,8,3,4,5,6];

for ($number = 0;  $number < count($array); $number++) {
    echo $array[$number] . "\n";
}