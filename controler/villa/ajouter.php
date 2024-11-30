<?php
require_once "../../model/CRUD_Villa.php";
$crud = new CRUD_Villa();
include_once "../../view/villa/ajouter.php";

if (isset($_POST["ajout"])) {
    $_POST = array_map(fn($value): string => htmlspecialchars($value), $_POST);
    $proprietaire = $_POST["proprietaire"];
    $localite = $_POST["localite"];
    $surface = $_POST["surface"];
    $nbPieces = $_POST["nbPieces"];
    $domaineUsage = $_POST["domaineUsage"];
    $nbEtages = $_POST["nbEtages"];
    $villa = new villa(null, $proprietaire, $localite, $surface, $nbPieces, $domaineUsage, $nbEtages);
    $added = $crud->ajouter($villa);
    if ($added) {
        header("location:lister.php?etat=0");
        exit;
    } else {
        header("location:lister.php?etat=1");
        exit;
    }
}
