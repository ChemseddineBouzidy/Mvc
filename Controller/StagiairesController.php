<?php
require_once 'Model/stagiaires.php';
function index() {
    $stagiaires = Liste_stagiaires();
    require_once 'View/List_stagiaires.php';
}
function create($data) {
    $stagiaires = create_stagiaires($data   );
    require_once 'View/Create_stagiaire.php';
}
// function edit($id) {
//     $stagiaire = get_stagiaire($id);
//     require_once 'View/Edit_stagiaire.php';
// }
// function destroy($id) {
//     $stagiaire = get_stagiaire($id);
//     require_once 'View/Delete_stagiaire.php';
// }