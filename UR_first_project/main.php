<?php
declare(strict_types=1);

require_once 'vendor/autoload.php';

use GuzzleHttp\Client;


    $idNumber = readline("Please enter VAT ID number of the company you are curious about: ");
    $url = "https://data.gov.lv/dati/lv/api/3/action/datastore_search?q=$idNumber&resource_id=25e80bf3-f107-4ab4-89ef-251b5b9374e9";

    $client = new Client();
    $response = $client->request('GET', $url);
    $data = json_decode($response->getBody()->getContents(), true);


    $companyName = $data["result"]["records"][0]["name"];
    $companyAddress = $data["result"]["records"][0]["address"];
    $registrationDate = substr($data["result"]["records"][0]["registered"], 0, 10);


echo "Your requested ID number belongs to:
Company name:        $companyName 
Company address:     $companyAddress
Company established: $registrationDate \n";
