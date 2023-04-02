<?php

//Write a program that calculates and displays a person's body mass index (BMI).
// A person's BMI is calculated with the following formula: BMI = weight (kg) ÷ height^2 (meters)
// Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
// A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
// If the BMI is less than 18.5, the person is considered underweight.
// If the BMI value is greater than 25, the person is considered overweight.
//Your program must accept metric units.

$weight = null;
$height = null;

while ($weight == null) {
    $input = readline("Enter your weight in kg.: ");
    if (is_numeric($input)) {
        $weight = $input;
    } else {
        echo "wrong input!\n";
    }
}

while ($height == null) {
    $input = readline("Enter your height in meters: ");
    if (is_numeric($input)) {
        $height = $input;
    } else {
        echo "wrong input!\n";
    }
}

$bodyMassIndex = number_format(($weight / $height**2), 2);

If ($bodyMassIndex > 40) {
    exit("Your BMI is $bodyMassIndex \nYou are OBESE!!!\n");
}
If ($bodyMassIndex > 25) {
    exit("Your BMI is $bodyMassIndex \nYou are overweight!\n");
}
If ($bodyMassIndex > 18.5) {
    exit("Your BMI is $bodyMassIndex \nCongrats! You have a perfect shape!\n");
}

echo "Your BMI is $bodyMassIndex \nYou are underweight. Get some cookies!\n";

