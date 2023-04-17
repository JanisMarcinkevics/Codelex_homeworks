<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';
require 'api_key.php';
use GuzzleHttp\Client;

$city = readline("Enter city name: ");
$countryCode = readline("Enter country code: ");
$url = "https://api.openweathermap.org/data/2.5/weather?q=$city,$countryCode&appid=$apiKey&units=metric";

$client = new Client();
$response = $client->request('GET', $url);
$data = json_decode($response->getBody()->getContents(), true);


$temperature = $data['main']['temp'];
$feelsLike = $data['main']["feels_like"];
$wind = $data['wind']["speed"];
$description = $data['weather'][0]['description'];


echo "Now it's $temperature °C in $city, though it feels like $feelsLike °C. 
There is $description and $wind m/s wind. \n";
