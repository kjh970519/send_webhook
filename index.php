<?php
header('Content-Type: application/json');

$response = [
    'status' => 'success',
    'message' => 'Hello from Railway PHP API!'
];

echo json_encode($response);