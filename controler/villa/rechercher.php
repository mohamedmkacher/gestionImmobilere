<?php

if (isset($_POST['chercher'])) {
    require_once "../../model/CRUD_Villa.php";
    $crud = new CRUD_Villa();
    $villa = $crud->recuperer($_POST['ref']);
    include "../../view/villa/rechercher.php";
}
