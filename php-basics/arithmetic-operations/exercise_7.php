<?php

//Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters. The formula in Math notation is:


$fallingTime = 10;

$fallingDistance = 0.5 * 9.81 * $fallingTime**2;

echo "Object has fallen a distance of {$fallingDistance}m\n";

