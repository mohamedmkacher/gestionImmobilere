<?php
require_once "../../model/CRUD.php";
$crud = new CRUD();
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
