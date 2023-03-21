<?php

$persons = [
    ["name" => "Jānis", "surname" => "Krūmiņš", "age" => 44, "birthday" => "July 4, 1978"],
    ["name" => "Anna", "surname" => "Ozoliņa", "age" => 34, "birthday" => "July 14, 1988"],
    ["name" => "Pēteris", "surname" => "Krūmiņš", "age" => 56, "birthday" => "May 21, 1966"]
];

foreach ($persons as $person) {
    echo "Name: " . $person["name"] . "
";
    echo "Surname: " . $person["surname"] . "
";
    echo "Age: " . $person["age"] . "
";
    echo "Birthday: " . $person["birthday"] . "
";
}


//$john = new stdClass();
//$john->name = 'Jānis';
//$john->surname = 'Kalniņš';
//$john->age = 44;
//$john->birthday = 'July 4, 1978';
//
//$ann = new stdClass();
//$ann->name = 'Anna';
//$ann->surname = 'Ozoliņa';
//$ann->age = 34;
//$ann->birthday = 'July 14, 1988';
//
//$peter = new stdClass();
//$peter->name = 'Pēteris';
//$peter->surname = 'Krūmiņš';
//$peter->age = 56;
//$peter->birthday = 'May 21, 1966';
//
//$persons = [$john, $ann, $peter];
//
//foreach ($persons as $person) {
//    echo "$person->name $person->surname $person->age $person->birthday \n";
//}
