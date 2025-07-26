<?php
$title = "Liste des utilisateurs";
ob_start(); ?>
<div class="container">
    <a href="create.php" class="btn btn-primary mb-3 float-end">Ajouter un Stagiaire</a>
</div>
 <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Age</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($stagiaires as $stagiaire): ?>
            <tr>
                <td><?= $stagiaire->id; ?></td>
                <td><?= $stagiaire->nom; ?></td>
                <td><?= $stagiaire->prenom; ?></td>
                <td><?= $stagiaire->Age; ?></td>
                <td>
                    <a href="edit.php?id=<?= $stagiaire->id; ?>" class="btn btn-warning">Modifier</a>
                    <a href="delete.php?id=<?= $stagiaire->id; ?>" class="btn btn-danger">Supprimer</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>  
<?php
$content = ob_get_clean();
include_once 'View/layout.php';