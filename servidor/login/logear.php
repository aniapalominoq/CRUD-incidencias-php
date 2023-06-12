<?php session_start();
    include "../../clases/Auth.php";
    $name = $_POST['name'];
    $password = $_POST['password'];
    $Auth = new Auth();
    if ($Auth->logear($name, $password)) {
        header("location:../../inicio.php");
    } else {
        echo "No se pudo logear";
    }

?>