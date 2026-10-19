<?php
$rawInput = file_get_contents('php://input');

$data = json_decode($rawInput, true);

if ($data) {
    $username = $data['username'] ?? 'Unknown';
    $password = $data['password'] ?? 'Unknown';

    echo "Username: " . htmlspecialchars($username) . "<br>";
    echo "Password: " . htmlspecialchars($password);
} else {
    echo "No JSON input received.";
}
?>