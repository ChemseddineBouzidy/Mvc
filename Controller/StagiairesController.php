<?php
require_once 'Model/stagiaires.php';
function index()
{
    $stagiaires = Liste_stagiaires();
    require_once 'View/List_stagiaires.php';
}
function create()
{
    require_once 'View/Create_stagiaire.php';
}
function store()
{
    $isCreated = create_stagiaires();
    if ($isCreated) {
        header('Location: index.php');
    } else {
        echo "Erreur lors de l'ajout du stagiaire.";
    }
}
// function edit($id) {
//     $stagiaire = get_stagiaire($id);
//     require_once 'View/Edit_stagiaire.php';
// }

function delete()
{
    $id = $_GET['id'] ?? null;
    if (!$id) {
        header('Location: index.php');
        exit;
    }
    require_once 'View/Delete_stagiaire.php';
}
function destroy($id)
{
    $stagiaire = delete_stagiaires($id);
    if ($stagiaire) {
        header('Location: index.php');
    } else {
        echo "Erreur lors de la suppression du stagiaire.";
    }
    require_once 'View/Delete_stagiaire.php';
}