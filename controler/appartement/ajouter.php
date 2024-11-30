<?php
require_once "../../model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();
include_once "../../view/appartement/ajouter.php";

if (isset($_POST["ajout"])) {
    $_POST = array_map(fn($value): string => htmlspecialchars($value), $_POST);
    $proprietaire = $_POST["proprietaire"];
    $localite = $_POST["localite"];
    $surface = $_POST["surface"];
    $nbPieces = $_POST["nbPieces"];
    $domaineUsage = $_POST["domaineUsage"];
    $surfaceEspaceCommun = $_POST["surfaceEspaceCommun"];
    $appartement = new Appartement(null, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage, $surfaceEspaceCommun);
    $added = $crud->ajouter($appartement);
    if ($added) {
        header("location:lister.php?etat=0");
        exit;
    } else {
        header("location:lister.php?etat=1");
        exit;
    }
}
