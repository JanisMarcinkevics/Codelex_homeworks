<?php

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