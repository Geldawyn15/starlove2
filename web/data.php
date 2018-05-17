<?php
session_start();
require 'vendor/autoload.php';

$client = new GuzzleHttp\Client([
        'base_uri' => 'https://cdn.rawgit.com/akabab/starwars-api/0.2.1/api',
    ]
);
$response = $client->request('GET', 'all.json');
$rslt = $response->getBody();
$data = $rslt->getContents();

$dataArray = json_decode($data, true);

$realData = [];
foreach ($dataArray as $key => $v) {
    $realData[$v['id']] = $v;
}
