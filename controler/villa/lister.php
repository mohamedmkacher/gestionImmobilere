<?php
if (isset($_GET["etat"])) {
    switch ($_GET["etat"]) {
        case '0':
            echo "<script>alert('Villa ajoutée avec succès')</script>";
            break;
        case '1':
            echo "<script>alert('Problème d`ajout veillez réessayer')</script>";
            break;
        case '2':
            echo "<script>alert('Villa supprimée avec succès')</script>";
            break;
        case '3':
            echo "<script>alert('Problème de suppression veillez réessayer')</script>";
            break;
        case '4':
            echo "<script>alert('Villa mise à jour avec succès')</script>";
            break;
        case '5':
            echo "<script>alert('Problème de mise à jour veillez réessayer')</script>";
            break;
    }
}
require_once "../../model/CRUD_Villa.php";
$crud = new CRUD_Villa();
$lesVillas = $crud->lister();
include "../../view/villa/lister.php";
