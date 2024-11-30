<?php
require_once "../../model/CRUD_Villa.php";
$crud = new CRUD_Villa();
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
