<?php
include("../../clases/Auth.php");

// Obtener los datos del formulario
$name = $_POST['nameUser'];
$rol = $_POST['rolUser'];
$password1 = password_hash($_POST['passwordUser'], PASSWORD_DEFAULT);

// Instanciamos el Auth
$Auth = new Auth();
$registroMensaje = $Auth->registrar($name, $rol, $password1);

// Verificamos el mensaje de registro
if (strpos($registroMensaje, "registrado exitosamente") !== false) {
    echo json_encode(["status" => "success"]);
} else {
    echo json_encode(["status" => "error", "message" => $registroMensaje]);
}
