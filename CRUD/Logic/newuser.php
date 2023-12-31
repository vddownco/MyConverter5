<?php 
require "./conexionmyc.php";

$response = array();

if (!isset($_POST['email']) || !isset($_POST['name']) || !isset($_POST['password'])) {
    $response['success'] = false;
    $response['message'] = "Datos incompletos";
} else {
    $email = $_POST['email'];
    $name = $_POST['name'];
    $passwordd = $_POST['password'];
        $existingEmailQuery = "SELECT id FROM users WHERE email = '$email'";
        $resultEmail = mysqli_query($conexion, $existingEmailQuery);

    if (mysqli_num_rows($resultEmail) > 0){
        $response['success'] = false;
        $response['message'] = "El correo electrónico ya está en uso";
    }else{
    $existingIdQuery = "SELECT id FROM users WHERE id = 4"; 
    $result = mysqli_query($conexion, $existingIdQuery);

    if (mysqli_num_rows($result) > 0) {
        $newId = encontrarNuevoId($conexion);
        $response['message'] = "El ID ya está en uso. Se ha asignado el nuevo ID: $newId";
        $response['name'] = $name;
        $response['email'] = $email;
        $response['pass'] = $passwordd;
        $insert = "INSERT into users (id, username, email, pass) VALUE($newId, '".$name ."', '".$email ."', '".$passwordd ."')";
        try {
            mysqli_query($conexion, $insert);
            $response['success'] = true;

        } catch (Exception $e) {
            $response['success'] = false;
            $response['message'] = $e->getMessage();
        }
    } else {
        $insert = "INSERT into users (id, username, email, pass) VALUE(4, '".$name ."', '".$email ."', '".$passwordd ."')";
        $response['name'] = $name;
        $response['email'] = $email;
        $response['pass'] = $passwordd;
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
header('Content-Type: application/json');
echo json_encode($response);

function encontrarNuevoId($conexion) {
    $id = 0; 
    while (true) {
        $existingIdQuery = "SELECT id FROM users WHERE id = $id";
        $result = mysqli_query($conexion, $existingIdQuery);
        if (mysqli_num_rows($result) == 0) {
            return $id;
        }
        $id++;
    }
}
?>
