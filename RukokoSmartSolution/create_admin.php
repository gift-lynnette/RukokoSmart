<?php
// RUN THIS ONCE to create your first admin login, then DELETE this file from the server.

require 'db_config.php';

$username = 'rukoko_admin';       // change if you like
$plain_password = 'ChangeMe123!'; // CHANGE THIS before running

$hash = password_hash($plain_password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admins (username, password_hash) VALUES (?, ?)");
$stmt->bind_param("ss", $username, $hash);

if ($stmt->execute()) {
    echo "Admin account created successfully. DELETE this file now.";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
