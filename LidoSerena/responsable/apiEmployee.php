<?php
require 'db.php';
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $stmt = $pdo->query("
        SELECT commandes.id, commandes.heurePriseCommande, 
        commandes.heureRemisePlat, commandes.idEmployee, employes.nom, employes.prenom, employes.poste FROM commandes JOIN employes ON commandes.idEmployee = employes.id
    ");

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo json_encode($data);
}
?>