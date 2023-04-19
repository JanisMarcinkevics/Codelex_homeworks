<?php declare(strict_types=1);

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

$amount = readline("Please enter currency amount in EUR: ");
$inputCurrency = readline("Please enter currency to which you would like convert:");

$url = "https://www.latvijasbanka.lv/vk/ecb.xml";

$client = new Client();

    $response = $client->get($url);

$data = simplexml_load_string($response->getBody()->getContents());
var_dump($data->Currencies);

//test
