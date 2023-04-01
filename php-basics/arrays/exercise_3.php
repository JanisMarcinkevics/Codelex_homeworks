<?php

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

//todo check if an array contains a value user entered

$valueToCheck = readline("Enter the value to search for: ");

echo  in_array($valueToCheck, $numbers)? "$valueToCheck is present un the array\n" : "There is no such value in the array.\n";

