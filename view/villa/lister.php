<?php
ob_start();
?>
<form action="rechercher.php" method="post" class="row">
    <a href="ajouter.php" class="btn btn-dark col-2">Ajouter une villa</a>
    <div class="col-5"></div>
    <input type="number" name="ref" class="col-2 " id="" placeholder="référence" min="0" required>
    <div class="col-1"></div>
    <input type="submit" value="Chercher" name="chercher" class="col-2 btn btn-dark">
</form>
<hr>
<table class="table">
    <thead>
        <tr>
            <th>Référence</th>
            <th>Propriétaire</th>
            <th>Localité</th>
            <th>Surface</th>
            <th>Nombre de pièces</th>
            <th>Domaine d'usage</th>
            <th>Nombre d'étages</th>
            <th>Action</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lesVillas as  $villa) {
        ?>
            <tr>
                <td><?= $villa["reference"] ?></td>
                <td><?= $villa["proprietaire"] ?></td>
                <td><?= $villa["localite"] ?></td>
                <td><?= $villa["surface"] ?></td>
                <td><?= $villa["nbPieces"] ?></td>
                <td><?= $villa["domaineUsage"] ?></td>
                <td><?= $villa["nbEtages"] ?></td>
                <td><a href="modifier.php?ref=<?= $villa["reference"] ?>" class="btn btn-dark btn-sm">Modifier</a></td>
                <td><a href="supprimer.php?ref=<?= $villa["reference"] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<?php
$contenu = ob_get_clean();
$titre = "Liste des villas";
include "layout.php";
?>