<?php
// Simule une base d'utilisateurs
$users = [
    "alice" => "1234",
    "bob" => "secret"
];

// Récupère les données POST
$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$response = ['success' => false];

// Vérifie si l'utilisateur existe et si le mot de passe correspond
if (isset($users[$username]) && $users[$username] === $password) {
    $response['success'] = true;
}


echo json_encode($response);
