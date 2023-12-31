<?php 
require "./conexion.php";

if(!isset($_POST['id']) || !isset($_POST['nombre']) || !isset($_POST['precio'])){
    header("Location: http://localhost/ejerciciosparcial3/CRUD/usuarios.php");
    return;
}
$id =$_POST['id'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];

$insert = "INSERT into productos (id,nombre,activo,precio,imagen) VALUE(". $id .",'".$nombre."',1,". $precio .", '')";
try{
mysqli_query($conexion,$insert);
header("Location: http://localhost/ejerciciosparcial3/CRUD/usuarios.php");
}
catch(Exception $e)
{
    header("Location: http://localhost/ejerciciosparcial3/CRUD/usuarios.php?error=" .$e->getMessage());
}
echo $insert;
?>