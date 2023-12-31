<?php 
require "./conexionmyc.php";

$response = array();

if (!isset($_POST['email']) && !isset($_POST['password'])) {
    $response['success'] = false;
    $response['message'] = "Datos incompletos";
} else {
    $email = $_POST['email'];
    $passwordd = $_POST['password'];
    $sql = "SELECT * FROM users WHERE email = '$email' AND pass = '$passwordd'";
    $resultado = mysqli_query($conexion, $sql);
    
    if (mysqli_num_rows($resultado) > 0){
        $primerResultado = mysqli_fetch_assoc($resultado);
        $response['id'] = $primerResultado['id'];
        $response['username'] =  $primerResultado['username'];
        $response['pass'] =  $primerResultado['pass'];
        $response['email'] =  $primerResultado['email'];
        $response['success'] = true;
        $response['message'] = "El correo electrónico ya está en uso";
    }else{
        $response['success'] = false;
        $response['message'] = $resultado;
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
