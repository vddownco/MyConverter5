<?php 
require "./conexionmyc.php";

if (!isset($_POST['imgurl'])) {
    header("Location: http://localhost/ejerciciosparcial3/CRUD/usuarios.php");
    return;
}

$id = $_POST['imgurl'];
$response = array();
// Construir la consulta UPDATE

try {
    $newId = encontrarNuevoId($conexion,$id);
    
    $response['success'] = true;
    $response['message'] =$newId;
} catch (Exception $e) {
    header("Location: http://localhost/ejerciciosparcial3/CRUD/usuarios.php?error=".$e->getMessage());
}

header('Content-Type: application/json');
echo json_encode($response);

function encontrarNuevoId($conexion,$image) {

    while (true) {
        $existingIdQuery = "SELECT id_user FROM downloads WHERE imgurl = '$image' AND id_user = 0";
        $existingIdQuery2 = "SELECT id_user FROM downloads WHERE imgurl = '$image' AND id_user = 1";
        $result = mysqli_query($conexion, $existingIdQuery);
        $result2 = mysqli_query($conexion, $existingIdQuery2);
        $likes = mysqli_num_rows($result2);
        $dislikes = mysqli_num_rows($result);
        $update = "UPDATE downloadsvotes SET likes = $likes WHERE imgurl = '$image'";
        mysqli_query($conexion,$update);
        $update = "UPDATE downloadsvotes SET dislikes = $dislikes WHERE imgurl = '$image'";
        mysqli_query($conexion,$update);
        return  mysqli_num_rows($result2)/(mysqli_num_rows($result)+mysqli_num_rows($result2));
        $id++;
    }
}
?>



