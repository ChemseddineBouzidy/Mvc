<?php
$title = "Supprimer stagiaire";
ob_start();
var_dump($id);
?>
<p>Voulez vous vraiment supprimer le stagiaire ?</p>
    <a class="btn btn-danger" href="destroy.php?id=<?php echo $id?>">Valider la suppression</a>
    <a class="btn btn-warning" href="index.php">Annuler la suppression</a>
<?php
$content = ob_get_clean();
include_once 'View/layout.php';