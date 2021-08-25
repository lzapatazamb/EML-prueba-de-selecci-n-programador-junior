<?php 
require('models/modelo.php'); //Llamado a archivo para conexion a Base de datos
sleep(1);
if (isset($_POST)) {
    $email = (string)$_POST['email']; //solicitud ingreso usuario en campo email
    
    $result = $connexion->query(
        'SELECT * FROM usario WHERE email = "'.strtolower($email).'"' //se seleccionan todos los elementos en campo email de la tabla usario
    );
    if ($result->num_rows > 0) {
        echo '<div class="alert alert-danger"><strong>Oh no!</strong> email de usuario no disponible.</div>';//se encuentra correo mensaje erroreo
    } else {
        echo '<div class="alert alert-success"><strong>Enhorabuena!</strong> email disponible.</div>'; //no se encuentra correo en BD
    }
}