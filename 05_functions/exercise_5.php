<?php

//Create a 2D associative array in 2nd dimension with fruits and their weight.
//Create a function that determines if fruit has weight over 10kg.
// Create a secondary array with shipping costs per weight.
// Meaning that you can say that over 10 kg shipping costs are 2 euros,
// otherwise its 1 euro.
// Using foreach loop print out the values of the fruits and how much it would cost to ship this product.

$fruits = [
    ["name" => "apple", "weight" => 5],
    ["name" => "orange", "weight" => 20],
    ["name" => "banana", "weight" => 13],
    ["name" => "pear", "weight" => 4],
];

$shippingCosts = [
    ["weightMargin" => 10, "costs" => 2],
    ["weightMargin" => 0, "costs" => 1],
];

foreach ($fruits as $fruit) {
    if($fruit["weight"] > 10) {
        echo $fruit["name"] . " weight is over 10kg \n";
    }
}

foreach ($fruits as $fruit) {
    if($fruit["weight"] > $shippingCosts[0]["weightMargin"]) {
        echo "shipping costs for {$fruit["name"]} are {$shippingCosts[0]["costs"]}€ \n";
    }
    else {
        echo "shipping costs for {$fruit["name"]} are {$shippingCosts[1]["costs"]}€ \n";
    }
}