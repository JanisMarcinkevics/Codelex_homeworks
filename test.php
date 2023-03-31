<?php
function dirReduc($arr): array
{
    $stack = []; //initialize an empty stack
    $opposites = [ //define the opposite directions
        'NORTH' => 'SOUTH',
        'SOUTH' => 'NORTH',
        'WEST' => 'EAST',
        'EAST' => 'WEST'
    ];

    foreach ($arr as $direction) {
        $lastDirection = end($stack); //get the last direction added to the stack
        if ($lastDirection === $opposites[$direction]) { //if the current direction is opposite of the last direction
            array_pop($stack); //remove the last direction from the stack
        } else {
            array_push($stack, $direction); //add the current direction to the stack
        }
    }

    return $stack; //return the simplified path
}
echo dirReduc(["NORTH", "SOUTH", "SOUTH", "EAST", "WEST", "NORTH", "WEST"]);

