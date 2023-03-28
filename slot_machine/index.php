<?php

$playerCash = 100;

$lines = [
    [[0,0],[1,1],[2,2]],
    [[0,0],[0,1],[0,2]],
    [[1,0],[1,1],[1,2]],
    [[2,0],[2,1],[2,2]],
    [[2,0],[1,1],[0,2]],
    ];

$symbols = ["A" => 5, "K" => 4, "J" => 2, "Q" => 3, "10" => 1];
$board = [];
$boardRows = 3;
$boardColumns = 3;

// welcome screen
echo "Welcome to slot machine!
You have $playerCash$ left.
Please hit y to spin or anything else to leave!
GOOD LUCK!!!\n";

while (true) {

        $response = readline("One more spin? ");
        if($response != "y") {
            break;
        }

        // Cost per spin
        $playerCash -= 1;

    // generate random board
    for ($row = 0; $row < $boardRows ; $row++) {
            $board[$row] = [];
            for ($i = 0; $i < $boardColumns; $i++) {
                $board[$row][] = array_rand($symbols);
            }
        }

    // Create a function to display board.
    forEach($board as $row) {
        $line = [];
            forEach($row as $symbol) {
                $line[] = $symbol;
            }
            echo implode('-',$line).PHP_EOL;
 }

    // check for slot lines
    foreach ($lines as $line) {
        $lineValues = [];

        foreach ($line as $position) {
            $lineValues[] = $board[$position[0]][$position[1]];
        }
    if (count(array_unique($lineValues)) ==1) {
        echo "we got a line!!! \n";
        $playerCash += $symbols[$lineValues[0]];
    };
    }
        echo "Player cash: $playerCash $ \n";
    if ($playerCash < 1) {
        exit("Please come back with some more cash! \n");
    }
}


