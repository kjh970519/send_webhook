<?php
header('Content-Type: application/json');

$response = [
    'status' => 'success',
    'message' => 'Hello from Railway PHP API! test2222'
];

echo json_encode($response);