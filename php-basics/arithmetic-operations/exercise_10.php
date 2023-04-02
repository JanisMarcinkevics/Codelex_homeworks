<?php

echo "Welcome to Geometry Calculator.
To execute following calculation please choose:
To calculate the Area of a Circle please input 1
To calculate the Area of a Rectangle please input 2
To calculate the Area of a Triangle please input 3
To quit press 4\n";

$userChoice = null;
while ($userChoice == null) {
    $input = readline("Enter your choice (1-4) : ");
    if (is_numeric($input) && floor($input) == $input && $input <= 4 && $input >=1) {
        $userChoice = $input;
    } else {
        echo "wrong input!\n";
    }
}

if ($userChoice == 1) {
    $radius = null;
    while ($radius == null) {
        $input = readline("Enter radius of a circle in meters: ");
        if (is_numeric($input) && $input > 0) {
            $radius = $input;
        } else {
            echo "wrong input!\n";
        }
    }
    $area = number_format((M_PI * $radius**2), 2);
    exit("Rounded area of your circle is {$area}m\n");
}

if ($userChoice == 2) {
    $length = null;
    $width = null;
    while ($length == null) {
        $input = readline("Enter length of the rectangle in meters: ");
        if (is_numeric($input) && $input > 0) {
            $length = $input;
        } else {
            echo "wrong input!\n";
        }
    }
    while ($width == null) {
        $input = readline("Enter width of the rectangle in meters: ");
        if (is_numeric($input) && $input > 0) {
            $width = $input;
        } else {
            echo "wrong input!\n";
        }
    }
    $area = number_format(($length * $width), 2);
    exit("Rounded area of your rectangle is {$area}m\n");
}


if ($userChoice == 3) {
    $base = null;
    $height = null;
    while ($base == null) {
        $input = readline("Enter length of a triangle’s base in meters: ");
        if (is_numeric($input) && $input > 0) {
            $base = $input;
        } else {
            echo "wrong input!\n";
        }
    }
    while ($height == null) {
        $input = readline("Enter triangle’s height in meters: ");
        if (is_numeric($input) && $input > 0) {
            $height = $input;
        } else {
            echo "wrong input!\n";
        }
    }
    $area = number_format(($base * $height * 0.5), 2);
    exit("Rounded area of your triangle is {$area}m\n");
}