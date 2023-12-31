<?php 
require "./conexionmyc.php";

if (!isset($_POST['id']) || !isset($_POST['id_user'])) {
    header("Location: http://localhost/ejerciciosparcial3/CRUD/usuarios.php");
    return;
}

$id = $_POST['id'];
$voto = $_POST['id_user'];
$response = array();
$update = "UPDATE downloads SET id_user = ".$voto." WHERE id = ".$id;

try {
    mysqli_query($conexion, $update);
    
    $response['success'] = true;
    $response['message'] = "se hizo la modificacion";
} catch (Exception $e) {
    header("Location: http://localhost/ejerciciosparcial3/CRUD/usuarios.php?error=".$e->getMessage());
}

header('Content-Type: application/json');
echo json_encode($response);

?>
