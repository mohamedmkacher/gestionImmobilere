<?php
ob_start();
?>
<form action="../../controler/villa/ajouter.php" method="post" class="form-control">
    <label for="proprietaire">Propriétaire</label><input type="text" name="proprietaire" class="form-control" id="" required="required"></br>
    <label for="localite">Localité</label><input type="text" name="localite" class="form-control" id="" required="required"></br>
    <label for="surface">Surface</label><input type="number" min="1" class="form-control" name="surface" id="" required="required"></br>
    <label for="nbPieces">Nombre de pièces</label><input type="number" min="1" class="form-control" name="nbPieces" id="" required="required"></br>
    <label for="domaineUsage">Domaine d'usage</label><select name="domaineUsage" class="form-control" id="">
        <option value="domicile">Domicile</option>
        <option value="bureau">Bureau</option>
    </select></br>
    <label for="nbEtages">Nombre d'ètages</label><input type="number" min="1" class="form-control" name="nbEtages" id="" required="required"></br>
    <input type="submit" value="Ajouter" name="ajout" class="btn btn-success btn-lg">
</form>
<?php
$contenu = ob_get_clean();
$titre = "Ajout d'une villa";
include "layout.php";





?>