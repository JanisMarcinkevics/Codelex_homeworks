<?php

$persons = [
    ["name" => "Jānis", "surname" => "Krūmiņš", "age" => 44],
    ["name" => "Anna", "surname" => "Ozoliņa", "age" => 34],
    ["name" => "Pēteris", "surname" => "Vītoliņš", "age" => 56],
    ["name" => "Līga", "surname" => "Saule", "age" => 14],
];

foreach ($persons as $person) {
    if($person["age"] >= 18) {
        echo $person["name"] . " can buy a beer without parents permission :) \n";
    } else {
        echo $person["name"] . " is under 18! \n";
    }
}