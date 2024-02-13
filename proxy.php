<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");
$url = 'https://creator.zoho.com/api/v2.1/zoho_user12388/franchise-management/report/All_Franchise';
$accessToken = 'Zoho-oauthtoken 1000.9ba3343b380970c483c0039747c31594.303b645e9ba4e8310eb497510b0c4cc1';

$options = [
    'http' => [
        'header' => "Authorization: $accessToken\r\nContent-Type: application/json",
        'method' => 'GET',
    ],
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);

if ($response === FALSE) {
    http_response_code(500); // Internal Server Error
    echo json_encode(['error' => 'Failed to fetch data from Zoho API']);
} else {
    echo $response;
}
?>
