<?php
ob_start();
?>

<?php if ($appartement) { ?>
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
    </table>
<?php } else { ?><h5>Aucun appartement trouvée</h5>

<?php } ?><a class="btn btn-dark" href="lister.php">Retour</a>

<?php
$contenu = ob_get_clean();
$titre = "Recherche appartement";
include "layout.php";
?>