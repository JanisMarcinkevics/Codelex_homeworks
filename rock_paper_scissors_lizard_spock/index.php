<?php

$response = readline("Name your element - Rock, Paper, Scissors, Lizard or Spock: ");

$ELEMENT_PAPER = new stdClass();
$ELEMENT_PAPER->title = 'Paper';
$ELEMENT_PAPER->beats = [];

$ELEMENT_ROCK = new stdClass();
$ELEMENT_ROCK->title = 'Rock';
$ELEMENT_ROCK->beats = [];

$ELEMENT_SCISSORS = new stdClass();
$ELEMENT_SCISSORS->title = 'Scissors';
$ELEMENT_SCISSORS->beats = [];

$ELEMENT_LIZARD = new stdClass();
$ELEMENT_LIZARD->title = 'Lizard';
$ELEMENT_LIZARD->beats = [];

$ELEMENT_SPOCK = new stdClass();
$ELEMENT_SPOCK->title = 'Spock';
$ELEMENT_SPOCK->beats = [];

array_push($ELEMENT_LIZARD->beats, "Paper", "Spock");
array_push($ELEMENT_SPOCK->beats, "Rock", "Scissors");
array_push($ELEMENT_ROCK->beats, "Scissors", "Lizard");
array_push($ELEMENT_PAPER->beats, "Rock", "Spock");
array_push($ELEMENT_SCISSORS->beats, "Paper", "Lizard");

$ELEMENTS = [
    'Rock'=>$ELEMENT_ROCK,
    'Paper'=>$ELEMENT_PAPER,
    'Scissors'=>$ELEMENT_SCISSORS,
    'Lizard'=>$ELEMENT_LIZARD,
    'Spock'=>$ELEMENT_SPOCK
];

$PC_SELECTION = $ELEMENTS[array_rand($ELEMENTS)];

if (!array_key_exists($response, $ELEMENTS)) {
    echo "Wrong element!\n";
 } elseif ($PC_SELECTION->title == $response) {
    echo "DRAW!!!\n";
 } elseif (in_array($response, $PC_SELECTION->beats)) {
    echo "PC WON!! \nPC selection was $PC_SELECTION->title\n";
 } else {
    echo "YOU WON! \nPC selection was $PC_SELECTION->title\n";
}





