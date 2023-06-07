<?php

try {
    $pdo = new PDO('mysql:host=localhost:50361;dbname=counter_data', 'root', 'root', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
}
catch(PDOException $e) {
    echo 'Probleme mit der Datenbankverbindung...';
    die();
}