<?php 
    include "Conexion.php";

    class Auth extends Conexion {
            public function registrar($name,$rol, $password1) {
                $conexion = parent::conectar();
                $sql = "INSERT INTO usuarios (nombre, rol,contrasena) 
                        VALUES (?,?,?)";
                $query = $conexion->prepare($sql);
                $query->bind_param('sss', $name,$rol, $password1);
                return $query->execute();
                }

            public function logear($name, $password) {
                $conexion = parent::conectar();
                $sql = "SELECT * FROM usuarios WHERE nombre = '$name'";
                $respuesta = mysqli_query($conexion, $sql);

                if ($respuesta && mysqli_num_rows($respuesta) > 0) {
                    $passwordExistente = mysqli_fetch_array($respuesta)['contrasena'];
                    if (password_verify($password, $passwordExistente)) {
                        $_SESSION['nombre'] = $name;
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }

    }

?>