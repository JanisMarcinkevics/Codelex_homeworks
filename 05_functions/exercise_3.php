<?php

//Create a person object with name, surname and age.
// Create a function that will determine if the person has reached 18 years of age.
// Print out if the person has reached age of 18 or not.

$person = new stdClass();
$person->name = 'Jānis';
$person->surname = 'Kalniņš';
$person->age = 4;

if($person->age >= 18) {
    echo "You can buy a beer without parents permission :) \n";
} else {
    echo "you are under 18! \n";
}