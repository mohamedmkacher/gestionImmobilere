<?php
if (isset($_POST['chercher'])) {
    require_once "../../model/CRUD_Appartement.php";
    $crud = new CRUD_Appartement();
    $appartement = $crud->recuperer($_POST['ref']);
    include "../../view/appartement/rechercher.php";
}
