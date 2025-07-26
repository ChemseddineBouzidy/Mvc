<?php
$title = "Liste des utilisateurs";
ob_start(); ?>

<form action="store.php" method="post"  class="mb-3">
    <input type="text" name="nom" placeholder="Nom du stagiaire" class="form-control mb-2" required>
    <input type="text" name="prenom" placeholder="Prenom du stagiaire" class="form-control mb-2" required>
    <input type="number" name="Age" placeholder="Age du stagiaire" class="form-control mb-2" required>
    <input type="submit" value="Ajouter" class="btn btn-success">
</form>
<?php
$content = ob_get_clean();
include_once 'View/layout.php';