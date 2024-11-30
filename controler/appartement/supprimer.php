<?php
require_once "../../model/CRUD_Appartement.php";
$crud = new CRUD_Appartement();
if (isset($_GET["ref"])) {
    $deleted = $crud->supprimer($_GET["ref"]);
    if ($deleted) {
        header("location:lister.php?etat=2");
        exit;
    } else {
        header("location:lister.php?etat=3");
        exit;
    }
}
