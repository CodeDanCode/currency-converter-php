<!--
Daniel Leach
Intro to Internet Computing
COP 3813

Project 4 Conversion App w/ PHP

-->

<?php

// include 'config.php';
require 'config.php';

// set API Endpoint, access key, required parameters
$endpoint = 'latest';
$access_key = $_ENV['ACCESS_KEY'];

$from = 'EUR';


// Initialize CURL:
$ch = curl_init('http://data.fixer.io/api/latest?access_key='.$access_key.'&base=' . $from . '&symbols=EUR,USD,GBP,INR,AUD,CAD,SGD,CHF,MYR,JPY,CNY');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Store the data:
$json = curl_exec($ch);
curl_close($ch);

// Decode JSON response:
$exchangeRates = json_decode($json, true);
?>