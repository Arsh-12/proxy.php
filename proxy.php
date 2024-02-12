<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$url = 'https://creator.zoho.com/api/v2.1/zoho_user12388/franchise-management/report/All_Franchise';
$accessToken = 'Zoho-oauthtoken 1000.92134220e0bdf066f7e0464d555e3368.7a9c581231cc5f1836f76332ccaa22da';

$options = [
    'http' => [
        'header' => "Authorization: $accessToken\r\nContent-Type: application/json",
        'method' => 'GET',
    ],
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

echo $response;
?>
