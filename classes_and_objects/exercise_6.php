<?php declare(strict_types=1);

$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrusDrinks = 0.64;

$energyDrinkers = round($surveyed * $purchasedEnergyDrinks);
$citrusDrinkers = round($energyDrinkers * $preferCitrusDrinks);

echo "Total number of people surveyed - {$surveyed}.
Approximately $energyDrinkers bought at least one energy drink.
Of those $citrusDrinkers prefer citrus flavored energy drinks.\n";

