
<?php
if ((isset($_POST['email'])) && ($_POST['email'] != '') && (isset($_POST['pass'])) && ($_POST['pass'] != '') && (isset($_POST['Nombre'])) && ($_POST['Nombre'] != '') && (isset($_POST['Telefono'])) && ($_POST['Telefono'] != '')) {
    include "models/modelo.php";
    $nuevo = new Usuario();
    $asd = $nuevo->setUsuario($_POST['email'], $_POST['pass'], $_POST['Nombre'], $_POST['Telefono']); 
}//POST de informacion en base de datos
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="views/imagenes/Logo EML.png">
    <title>Login</title>
    <link rel="stylesheet" href="../estilo.css">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">
    <link href="views/bootstrap.min.css" rel="stylesheet"><!-- Bootstrap core CSS -->
    <link href="views/floating-labels.css" rel="stylesheet"><!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Comprobar disponibilidad de nombre de usuario en vivo."/>
    <meta name="author" content="Jose Aguilar">
    <link rel="shortcut icon" href="https://www.jose-aguilar.com/blog/wp-content/themes/jaconsulting/favicon.ico" />
    <link rel="stylesheet" href="css/font-awesome.min.css"><!-- Latest compiled and minified CSS -->
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {	
    $('#email').on('blur', function(){ //validacion email repetidos
        $('#result-email').html('<img src="images/loader.gif" />').fadeOut(1000);

        var email = $(this).val();		
        var dataString = 'email='+email;

        $.ajax({
            type: "POST",
            url: "check_username_availablity.php",
            data: dataString,
            success: function(data) {
                $('#result-email').fadeIn(1000).html(data);   
            }

        });
    });              
});    
</script>
  </head>

  <body>
    <form class="form-signin" action="#" method="post">
      <div class="text-center mb-4"><p></p>      	
        <img class="mb-9" src="views/imagenes/Logo EML.png" alt="" width=60% height=60%>
        <p>Bienvenidos !! *Laura Zapata*.</p>
      </div>

		<div class="form-label-group">        <!-- Solicitud Nombres -->           
         <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Your Name" required autofocus> 
         <label for="Nombre">Nombres</label>
    </div>

	   <div class="form-label-group" ><!-- Solicitud telefono -->
        <input type="number" name="Telefono" class="form-control" placeholder="Your Number" required autofocus>
        <label for="inputNumber">Your Number</label>
      </div>

      <div class="form-label-group" ><!-- Solicitud Email -->
        <input type="email" name="email" class="form-control" id="email" placeholder="Email address" required autofocus>
        <label for="inputEmail">Email address</label>
        <div id="result-email"></div> <!-- Validacion email repetido -->
      </div>

      <div class="form-label-group"><!-- Solicitud Password -->
        <input type="password" name="pass" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>

      <div class="checkbox mb-3"> <!-- Checkbox de recordarme -->
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>

      <button class="btn btn-lg btn-primary btn-block" type="submit" >Sign in <!-- Registro usuario -->
      <script type="text/javascript"> alert("Usuario registrado");</script></button> <p> </p>
      <a href="controllers/controlador.php"><i class="fa fa-align-justify"></i> <h6>Mira Nuestros usuarios</h6></a> <!-- Lista usuarios -->
      <a href="views/home.html"><i class="fa fa-align-justify"></i> <h6>Pagina Home</h6></a><!-- Link Pagina home-->
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 - 2021</p>
  
    </form>
  </body>
</html>