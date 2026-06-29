<?php
require 'db.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->query("
        SELECT client.id, client.nom, client.prenom, client.points from client
    ");

    $points = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($points);
}
?>