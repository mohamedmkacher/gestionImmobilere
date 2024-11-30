<?php
if (isset($_GET["etat"])) {
    switch ($_GET["etat"]) {
        case '0':
            echo "<script>alert('Appartement ajouté avec succès')</script>";
            break;
        case '1':
            echo "<script>alert('Problème d`ajout veillez réessayer')</script>";
            break;
        case '2':
            echo "<script>alert('Appartement supprimé avec succès')</script>";
            break;
        case '3':
            echo "<script>alert('Problème de suppression veillez réessayer')</script>";
            break;
        case '4':
            echo "<script>alert('Appartement mis à jour avec succès')</script>";
            break;
        case '5':
            echo "<script>alert('Problème de mise à jour veillez réessayer')</script>";
            break;
    }
}
require_once "../../model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();
$lesApparts = $crud->lister();
include "../../view/appartement/lister.php";
