<?php 
require('../models/modelo.php');
sleep(1);
if (isset($_POST)) {
    $email = (string)$_POST['email'];
    
    $result = $connexion->query(
        'UPDATE * FROM usario WHERE email = "'.strtolower($email).'"'
    );
    if ($result->num_rows > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> email de usuario no disponible.</div>';
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> email disponible.</div>';
    }
}