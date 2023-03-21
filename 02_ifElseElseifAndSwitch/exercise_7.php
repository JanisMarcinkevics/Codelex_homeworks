<?php

$number = 50;

switch ($number) {
    case ($number <= 50):
        echo "low";
        break;
    case ($number < 100 && $number > 50):
        echo "medium";
        break;
    case ($number >= 100):
        echo "high";
}
