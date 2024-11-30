<?php
ob_start();
?>
<form action="../../controler/villa/modifier.php?ref=<?=$villa['reference'] ?>" method="post" class="form-control">
    <label for="proprietaire">Propriétaire</label><input type="text" name="proprietaire" class="form-control" id="" value="<?= $villa['proprietaire'] ?>"></br>
    <label for="localite">Localité</label><input type="text" name="localite" class="form-control" id="" required="required" value="<?= $villa['localite'] ?>"></br>
    <label for="surface">Surface</label><input type="number" min="1" class="form-control" name="surface" id="" required="required" value="<?= $villa['surface'] ?>"></br>
    <label for="nbPieces">Nombre de pièces</label><input type="number" min="1" class="form-control" name="nbPieces" id="" required="required" value="<?= $villa['nbPieces'] ?>"></br>
    <label for="domaineUsage">Domaine d'usage</label><select name="domaineUsage" class="form-control" id="">
        <?php if ($villa['domaineUsage'] == "domicile") { ?>
            <option value="domicile" selected>Domicile</option>
            <option value="bureau">Bureau</option>
        <?php } else { ?>
            <option value="domicile">Domicile</option>
            <option value="bureau" selected>Bureau</option>
        <?php } ?>

    </select></br>
    <label for="nbEtages">Nombre d'étages</label><input type="number" min="1" class="form-control" name="nbEtages" id="" required="required" value="<?= $villa['nbEtages'] ?>"></br>
    <input type="submit" value="Mettre à jour" name="modif" class="btn btn-success btn-lg">
</form>
<?php
$contenu = ob_get_clean();
$titre = "Mofification d'un villa";
include "layout.php";
