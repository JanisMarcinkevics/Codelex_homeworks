<?php

    $words = [
        'toyota',
        'volvo',
        'honda',
        'ferrari',
        'tesla',
        'porsche',
        'subaru',
        'mazda',
        'jaguar',
        'audi',
        'opel'
    ];

    $word = $words[array_rand($words)];
    $wordArray = str_split($word);
    $targetWord = str_split(str_repeat("_", strlen($word)));
    $guesses = 0;
    $maxGuesses = strlen($word) + 3;

    echo  "Guess the car brand!\n". implode(' ', $targetWord).PHP_EOL;

    while($guesses < $maxGuesses) {
        $response = readline("enter a letter: ");
        $guesses++;
        for ($i = 0; $i < strlen($word); $i++) {
            if ($word[$i] == $response) {
                $pos = strpos($word, $response);
                $targetWord[$i] = $response;
                if (implode('', $targetWord) == $word) {
                    echo implode(' ', $targetWord).PHP_EOL;
                    echo "Correct! YOU WON!!!".PHP_EOL;
                    exit;
                }
            }
        }
        echo implode(' ', $targetWord).PHP_EOL;
    }
    if (implode('', $targetWord) != $word) {
    echo "Sorry, YOU LOOSE :( \nMysterious car was $word".PHP_EOL;
}