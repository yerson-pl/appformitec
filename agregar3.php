<?php
include("conexion2.php");
$link=conectarse();
$sql="insert into clientes2(codigo, nombres, apellidos, edad, sexo, dni, curso, procedencia, fecha) values('".$_POST['codigo']."','".$_POST['nombre']."','".$_POST['apellidos']."','".$_POST['edad']."','".$_POST['sexo']."','".$_POST['dni']."','".$_POST['curso']."','".$_POST['procedencia']."','".$_POST['fecha']."')";
mysql_query($sql,$link);
header("location:reservacion.php?msg=Registro Satisfactorio");

?>