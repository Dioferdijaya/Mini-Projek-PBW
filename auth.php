<?php
header('Content-Type: application/json');

$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

$lines = file('user.txt', FILE_IGNORE_NEW_LINES);
foreach ($lines as $line) {
    list($savedEmail, $savedPassword, $role) = explode(',', $line);

    // Tambahkan log untuk debugging
    if (trim($email) === trim($savedEmail) && trim($password) === trim($savedPassword)) {
        echo json_encode(['success' => true, 'role' => $role]);
        exit;
    }
}
echo json_encode(['success' => false, 'debug' => ['email' => $email, 'password' => $password]]);
