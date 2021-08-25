<?php 
include("../views/function.php");
$id = $_GET['id'];
delete('usario','id',$id);
header("location:../views/vista.php");
?>