<?php

$city = readline("Enter city name: ");
$countryCode = readline("Enter country code: ");
$apiKey = "a021c762d4f72ec8f4e799bf62f9b676";
$url = "http://api.openweathermap.org/data/2.5/weather?q=$city,$countryCode&appid=$apiKey&units=metric";


$response = file_get_contents($url);
$data = json_decode($response, true);


$temperature = $data['main']['temp'];
$feelsLike = $data['main']["feels_like"];
$wind = $data['wind']["speed"];
$description = $data['weather'][0]['description'];


echo "Now it's $temperature °C in $city, though it feels like $feelsLike °C. 
There is $description and $wind m/s wind. \n";
