<?php
ob_start();
?>
<?php if ($villa) { ?>
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
                <th colspan="2">Action</th>


            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
<?php } else { ?><h5>Aucune villa trouvée</h5>


<?php } ?>
<a class="btn btn-dark" href="lister.php">Retour</a>
<?php
$contenu = ob_get_clean();
$titre = "Recherche villa";
include "layout.php";
?>