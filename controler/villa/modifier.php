<?php
require_once "../../model/CRUD_Villa.php";
$crud = new CRUD_Villa();

if (isset($_GET["ref"])) {
    $villa = $crud->recuperer(+$_GET["ref"]);
    include_once "../../view/villa/modifier.php";
    if (isset($_POST['modif'])) {
        $_POST = array_map(fn($value): string => htmlspecialchars($value), $_POST);
        $proprietaire = $_POST["proprietaire"];
        $localite = $_POST["localite"];
        $surface = $_POST["surface"];
        $nbPieces = $_POST["nbPieces"];
        $domaineUsage = $_POST["domaineUsage"];
        $nbEtages = $_POST["nbEtages"];
        $villa = new Villa($_GET["ref"], $proprietaire, $localite, $surface, $nbPieces, $domaineUsage, $nbEtages);
        $updated = $crud->modifier($villa);
        if ($updated) {
            header("location:lister.php?etat=4");
            exit;
        } else {
            header("location:lister.php?etat=5");
            exit;
        }
    }
}
