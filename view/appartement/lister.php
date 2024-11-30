<?php
ob_start();
?>
<form action="rechercher.php" method="post" class="row">
    <a href="ajouter.php" class="btn btn-dark col-2">Ajouter un appartement</a>
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
            <th>Surface espace commun</th>
            <th colspan="2">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($lesApparts as  $appartement) {
        ?>
            <tr>
                <td><?= $appartement["reference"] ?></td>
                <td><?= $appartement["proprietaire"] ?></td>
                <td><?= $appartement["localite"] ?></td>
                <td><?= $appartement["surface"] ?></td>
                <td><?= $appartement["nbPieces"] ?></td>
                <td><?= $appartement["domaineUsage"] ?></td>
                <td><?= $appartement["surfaceEspaceCommun"] ?></td>
                <td><a href="modifier.php?ref=<?= $appartement["reference"] ?>" class="btn btn-dark btn-sm">Modifier</a></td>
                <td><a href="supprimer.php?ref=<?= $appartement["reference"] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
            </tr>

    </tbody>
<?php } ?>
</table>


<?php
$contenu = ob_get_clean();
$titre = "Liste des appartements";
include "layout.php";
?>