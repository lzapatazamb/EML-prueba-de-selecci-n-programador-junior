<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">

        <title>Usuarios en BD</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class=" text-center">
                <hr/>
                <h3>Listado Usuarios:</h3>
                   <?php
                        include("function.php"); //se llama funcion eliminar
                        include "../controllers/controlador.php"; //se llaman funciones como la de conectar a la base de datos
                    ?>
              
<?php 
    $sql1 = "select * from usario"; // se solicita toda la informacion del un usuario para proceder a eliminarlo
    $result1 = db_query($sql1);
    while($row1 = mysqli_fetch_object($result1)){
?>

                     <table class="table">  <!-- Se realiza creacion de tabla de lista de usuarios -->
                    <tr>
                        <td><strong>Nombres</strong></td>
                        <td><strong>Email</strong></td> 
                        <td><strong>Telefono</strong></td> 
                        <td><strong>Fecha Registro</strong></td> 
                        <td><strong>Opcion</strong></td> 
                        <td><strong>Opcion</strong></td> 
                    </tr>
                    
                    <?php
                    for ($i = 0; $i < count($datos); $i++) {
                        ksort($datos,2); //validacion de nombres para orden alfabetico 
                        ?>
                        <tr>     <!-- Se colocan datos en espacio de tabla -->                       
                            <td><?php echo $datos[$i]["Nombre"]; ?></td>
                            <td><?php echo $datos[$i]["email"]; ?> </td>
                            <td><?php echo $datos[$i]["Telefono"]; ?> </td>
                            <td><?php echo $datos[$i]["FechaRegistro"]; ?> </td>
                            <td><a href="../controllers/modificar.php"><i class="fa fa-align-justify"></i> <h6>Modificar</h6></a> </td>
                            <td><a  href="../controllers/eliminar.php?id=<?php echo $row1->id;?>"><i></i> <h6>Eliminar</h6></a> </td> <!-- metodo que elimina usuarios teniendo en cuenta id seleccionado por cliente -->   
                        </tr>
                        <?php }  }  ?>
                      
                    </table>
                <a href="../index.php"> <i class="fa fa-arrow-circle-left"></i> Volver a la página principal</a><hr/>
            </div> 
        </div>
    </body>
</html>