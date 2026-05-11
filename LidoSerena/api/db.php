<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit();
}

$host = 'localhost';
$dbname = 'lidoserena';
$username = 'root';
$password = ''; // Remplace par ton vrai mot de passe

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo; // 🚨 Important : Ce fichier doit retourner `$pdo`
} catch (PDOException $e) {
    die(json_encode(["success" => false, "message" => "Connexion échouée : " . $e->getMessage()]));
}
?>