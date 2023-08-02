<?php
    // logear.php
    include '../../clases/Auth.php';


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nameUser"];
        $password = $_POST["passwordUser"];

        $auth = new Auth();
        $loggedIn = $auth->logear($name, $password);

        if ($loggedIn) {
            echo json_encode(["status" => "success"]);
        } else {
            echo json_encode(["status" => "error", "message" => "Usuario o contraseña incorrectos"]);
        }
    }
?>
