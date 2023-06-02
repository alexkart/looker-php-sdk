<?php

require_once(dirname(__DIR__) . '/vendor/autoload.php');

$host = 'https://localhost:20000/api/3.1'; // string | API Host URL
$client_id = ""; // string | client_id part of API3 Key.
$client_secret = ""; // string | client_secret part of API3 Key.

$config = new \Swagger\Client\Configuration();
$config->setHost($host);

$apiInstance = new Swagger\Client\Api\ApiAuthApi(
// If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
// This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client([
        'verify' => false,
    ]),
    $config
);

try {
    $result = $apiInstance->login($client_id, $client_secret);
} catch (Exception $e) {
    echo 'Exception when calling ApiAuthApi->login: ', $e->getMessage(), PHP_EOL;
}

$authenticatedClient = new GuzzleHttp\Client([
    'verify' => false,
    'headers' => [
        'Authorization' => 'token ' . $result->getAccessToken(),
    ],
]);

return [$authenticatedClient, $config];
