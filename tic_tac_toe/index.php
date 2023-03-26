<?php

$field = [
    ['-', '-', '-'],
    ['-', '-', '-'],
    ['-', '-', '-'],
];

$output = '';
foreach ($field as $line) {
    $output .= '   |';
    foreach ($line as $item) {
        $output .= $item . '|';
    }
    $output .= PHP_EOL;
}
echo $output;


$player = 'X';
$turnCount = 0;
while ($turnCount < 9) {

    echo "Player $player turn! \n";
    $selection = [];
    $validInputs = ["00", "01", "02", "10", "11", "12", "20", "21", "22"];
    $input = readline("Choose your placement: \n");
    if (!in_array($input, $validInputs)|| $field[intval(substr($input,0,1))][intval(substr($input,1,1))] != '-') {
        echo "wrong input! \n";
    } else {
        $selection = str_split($input);
        $turnCount++;
        $field[$selection[0]][$selection[1]] = $player;

        $output = '';
        foreach ($field as $line) {
            $output .= '   |';
            foreach ($line as $item) {
                $output .= $item . '|';
            }
            $output .= PHP_EOL;
        }
        echo $output;

//      winning conditions
        foreach ($field as $line) {
            if ($line[0] == $player && $line[1] == $player && $line[2] == $player) {
                exit("Player $player wins!!! \n");
            }
            foreach ($line as $y => $item) {
                if ($field[0][$y] == $player && $field[1][$y] == $player && $field[2][$y] == $player) {
                    exit("Player $player wins!!! \n");
                }
            }
        }
        if ($field[0][0] == $player && $field[1][1] == $player && $field[2][2] == $player) {
            exit("Player $player wins!!! \n");
        }
        if ($field[2][0] == $player && $field[1][1] == $player && $field[0][2] == $player) {
            exit("Player $player wins!!! \n");
        }

        //turnover
        if ($player == 'X') {
            $player = 'O';
        } else {
            $player = 'X';
        }
    }
}
echo "No winner here!\n";


