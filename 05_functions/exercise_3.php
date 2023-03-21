<?php

$person = new stdClass();
$person->name = 'Jānis';
$person->surname = 'Kalniņš';
$person->age = 4;

if($person->age >= 18) {
    echo "You can buy a beer without parents permission :) \n";
} else {
    echo "you are under 18! \n";
}