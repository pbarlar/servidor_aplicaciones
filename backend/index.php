<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$response = [
    'status' => 'success',
    'message' => 'Backend IP is working correctly',
    'timestamp' => date('c')
];

echo json_encode($response);
