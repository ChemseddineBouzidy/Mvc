<?php

function db_connection()
{
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=mvc', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        echo "Erreur de connexion : " . $e->getMessage();
        return null;
    }
}
function Liste_stagiaires() {
    // global $pdo;
    $pdo = db_connection();
    $stagiaires = $pdo->query("SELECT * FROM stagiaires")->fetchAll(PDO::FETCH_OBJ);
    return $stagiaires;
}
function create_stagiaires() {
  
}