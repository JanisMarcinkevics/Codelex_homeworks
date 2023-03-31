<?php

$products = [
    "coffee"=>200,
    "tea"=>100,
    "late"=>250,
    "hot chocolate"=>350,
    "nuts"=>250,
    "candy"=>150,
    "water"=>50
    ];

$coins = [200, 100, 50, 20, 10, 5, 2, 1];
$insertedCoins = 0;

echo "Welcome to our vending machine! 
We have following products to choose from:
__________________________________________\n";
foreach($products as $key => $value) {
   echo "$key " . $value/100 . "€ \n";
}
//input correct selection
$selection = '';
while (!array_key_exists($selection, $products)) {
    $selection = readline("Please select your product: \n");
    if (!array_key_exists($selection, $products)) {
        echo "Wrong product!\n";
    } else {
        echo "Please insert coins for ". $products[$selection]/100 ."€\n";
    }
}

while($insertedCoins < $products[$selection]) {

    echo "Inserted amount is " . $insertedCoins/100 . "€ \n";
    $insertedCoins += readline("Add more coins: \n");
}
$change = $insertedCoins - $products[$selection];


echo "-----------------------
Your change is " . $change/100 .  "€
You will receive it in following coins: \n";

foreach ($coins as $coin) {
    $times = floor($change / $coin);
    if ($times > 0) {
      echo $coin/100 . "€ * " . $times . PHP_EOL;
    }
    $change -= $coin * $times;
}

echo "Enjoy your $selection !\n";
