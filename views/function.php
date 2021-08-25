<?php
function db_query($query1) { //conexion base de datos
    $connection1 = mysqli_connect("localhost","root","","usuariosnoticia"); 
    $result1 = mysqli_query($connection1,$query1);

    return $result1;
}

function delete($tblname,$field_id,$id){ //funcion para eliminar usuarios

	$sql1 = "delete from ".$tblname." where ".$field_id."=".$id."";
	
	return db_query($sql1);
}

function select_id($tblname,$field_name,$field_id){ //seleccion de usuario segun ID
	$sql1 = "Select * from ".$tblname." where ".$field_name." = ".$field_id."";
	$db1=db_query($sql1);
	$GLOBALS['row1'] = mysqli_fetch_object($db1);

	return $sql1;

}
?>
