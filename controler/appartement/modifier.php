<?php
require_once "../../model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();

if (isset($_GET["ref"])) {
    $appartement = $crud->recuperer(+$_GET["ref"]);
    include_once "../../view/appartement/modifier.php";
    if (isset($_POST['modif'])) {
        $_POST = array_map(fn($value): string => htmlspecialchars($value), $_POST);
        $proprietaire = $_POST["proprietaire"];
        $localite = $_POST["localite"];
        $surface = $_POST["surface"];
        $nbPieces = $_POST["nbPieces"];
        $domaineUsage = $_POST["domaineUsage"];
        $surfaceEspaceCommun = $_POST["surfaceEspaceCommun"];
        $appartement = new Appartement($_GET["ref"], $proprietaire, $localite, $surface, $nbPieces, $domaineUsage, $surfaceEspaceCommun);
        $updated = $crud->modifier($appartement);
        if ($updated) {
            header("location:lister.php?etat=4");
            exit;
        } else {
            header("location:lister.php?etat=5");
            exit;
        }
    }
}
