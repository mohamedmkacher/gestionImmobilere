<?php
require_once "../model/config.php";
$config = new Config();
$pdo = $config->getPdo();
$sql = "";
$dom = ['Bureau', 'Domicile'];
for ($i = 0; $i < 100; $i++) {
    $proprietaire = 'proprietaire' . random_int(1, 25);
    $localite = 'localite' . random_int(1, 10);
    $surface = random_int(50, 200);
    $nbPieces = random_int(1, 5);
    $domaineUsage = $dom[random_int(0, 1)];
    $sql .= "insert into immobilier values (null,'$proprietaire','$localite',$surface,$nbPieces,'$domaineUsage',";

    if ($i % 2 == 0) {

        $surfaceEspaceCommun = random_int(10, 30);
        $sql .= "null,$surfaceEspaceCommun);";
    } else {

        $nbEtages = random_int(1, 3);
        $sql .= "$nbEtages,null);";
    }
}
$res = $pdo->exec($sql);
