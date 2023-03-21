<?php

$buyer = new stdClass();
$buyer->name = 'Jānis';
$buyer->licenses = ["a", "b", "c"];
$buyer->cash = 2000;

$weapons = [
    ["name" => "stick", "license" => "a", "price" => 10],
    ["name" => "knive", "license" => "a", "price" => 20],
    ["name" => "sword", "license" => "b", "price" => 50],
    ["name" => "PPK", "license" => "c", "price" => 200],
    ["name" => "striker", "license" => "d", "price" => 800],
    ["name" => "AR-52", "license" => "d", "price" => 1000],
    ["name" => "granate M1", "license" => "e", "price" => 500]
];

$purchase = readline("which weapon do you want to buy? ");
$sum = 0;
$chosenOne = [];
foreach ($weapons as $weapon) {
    if ($purchase !== $weapon["name"]) {
        $sum++;
    } else {
        $chosenOne = $weapon;
    }
}
if (count($weapons) === $sum) {
    echo "We don't have such weapon. \n";
} elseif (!in_array($chosenOne["license"],$buyer->licenses)) {
    echo "Sorry, but you don't have a license for this weapon! \n";
} elseif ($buyer->cash < $chosenOne["price"]){
    echo "Sorry, but seems you are short of cash for this weapon! \n";
} else {
    echo "Congratulation $buyer->name! You can have your own $chosenOne[name] \n";
}


