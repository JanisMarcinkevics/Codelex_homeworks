<?php declare(strict_types=1);

$surveyed = 12467;
$purchased_energy_drinks = 0.14;
$prefer_citrus_drinks = 0.64;

$energyDrinkers = round($surveyed * $purchased_energy_drinks);
$citrusDrinkers = round($energyDrinkers * $prefer_citrus_drinks);

echo "Total number of people surveyed - {$surveyed}.
Approximately $energyDrinkers bought at least one energy drink.
Of those $citrusDrinkers prefer citrus flavored energy drinks.\n";

