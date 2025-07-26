<?php
$title = "Liste des utilisateurs";
ob_start(); ?>
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
            <tr>

            
        </tbody>
    </table>  
<?php
$content = ob_get_clean();
include_once 'View/layout.php';