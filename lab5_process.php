<?php
header('Content-Type: application/json');

$rawInput = file_get_contents('php://input');
$data = json_decode($rawInput, true);

$username = $data['username'] ?? 'Guest';

$response = [
    "status" => "success",
    "message" => "Welcome, " . $username . "!"
];

echo json_encode($response);
?>