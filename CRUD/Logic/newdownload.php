<?php 
require "./conexionmyc.php";

$response = array();

if (!isset($_POST['imgurl']) || !isset($_POST['title']) || !isset($_POST['duration']) || !isset($_POST['linkone']) || !isset($_POST['linktwo'])) {
    $response['success'] = false;
    $response['message'] = "Datos incompletos";
} else {
    $imgurl = $_POST['imgurl'];
    $title = $_POST['title'];
    $duration = $_POST['duration'];
    $linkone = $_POST['linkone'];
    $linktwo = $_POST['linktwo'];
    $sizeone = $_POST['sizeone'];
    $sizetwo = $_POST['sizetwo'];
    $useremail = $_POST['useremail'];
        $existingEmailQuery = "SELECT id FROM downloads WHERE linkone = '$linkone' AND useremail = '$useremail'";
        $resultEmail = mysqli_query($conexion, $existingEmailQuery);

    if (mysqli_num_rows($resultEmail) > 0){
        $response['success'] = false;
        $response['message'] = "El correo electrónico ya está en uso";
    }else{
    $existingIdQuery = "SELECT id FROM downloads WHERE id = 0"; 
    $result = mysqli_query($conexion, $existingIdQuery);

    if (mysqli_num_rows($result) > 0) {
        $newId = encontrarNuevoId($conexion);
        $response['message'] = "El ID ya está en uso. Se ha asignado el nuevo ID: $newId";
        $insert = "INSERT into downloads (id,imgurl,title,duration,linkone,linktwo,sizeone,sizetwo,useremail,id_user) VALUE($newId, '". $imgurl ."', '". $title ."', '". $duration ."','". $sizeone ."', '". $sizetwo ."', '". $linkone ."', '". $linktwo ."','". $useremail ."', ". 2 .")";
        try {
            mysqli_query($conexion, $insert);       
            if (descargado($conexion,$imgurl)==0){
            $newId2=encontrarNuevoIdvideo($conexion);
            $insert2 = "INSERT into downloadsvotes (id,imgurl,likes,dislikes) VALUE($newId2, '". $imgurl ."',". 0 ." ,". 0 .")";
            mysqli_query($conexion, $insert2);
            }
            
            $response['success'] = true;

        } catch (Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();
        }
    } else {
        $insert = "INSERT into downloads (id,imgurl,title,duration,linkone,linktwo,sizeone,sizetwo,useremail,id_user) VALUE(0, '". $imgurl ."', '". $title ."', '". $duration ."', '". $sizeone ."', '". $sizetwo ."', '". $linkone ."', '". $linktwo ."','". $useremail ."', ". 2 .")";
        try {
            mysqli_query($conexion, $insert);
            $response['success'] = true;
            $response['message'] = "Usuario insertado correctamente";
        } catch (Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();
        }
    }
    }


}

// Devuelve la respuesta como JSON
header('Content-Type: application/json');
echo json_encode($response);

// Función para encontrar un nuevo ID no utilizado
function encontrarNuevoId($conexion) {
    $id = 0; // Establece el valor inicial del ID (puedes cambiar esto según tus necesidades)

    while (true) {
        $existingIdQuery = "SELECT id FROM downloads WHERE id = $id";
        $result = mysqli_query($conexion, $existingIdQuery);

        if (mysqli_num_rows($result) == 0) {
            // El ID no está en uso, se puede utilizar
            return $id;
        }

        // El ID está en uso, intenta con el siguiente
        $id++;
    }
}
function encontrarNuevoIdvideo($conexion) {
    $id = 0; // Establece el valor inicial del ID (puedes cambiar esto según tus necesidades)

    while (true) {
        $existingIdQuery = "SELECT id FROM downloadsvotes WHERE id = $id";
        $result = mysqli_query($conexion, $existingIdQuery);

        if (mysqli_num_rows($result) == 0) {
            // El ID no está en uso, se puede utilizar
            return $id;
        }

        // El ID está en uso, intenta con el siguiente
        $id++;
    }
}
function descargado($conexion,$imgurl) {
    $id = 0; // Establece el valor inicial del ID (puedes cambiar esto según tus necesidades)

    while (true) {
        $existingIdQuery = "SELECT id FROM downloadsvotes WHERE imgurl = '$imgurl'";
        $result = mysqli_query($conexion, $existingIdQuery);

        if (mysqli_num_rows($result) > 0) {
            return 1;
        }else
        {
            return 0;
        }
    }
}
?>
