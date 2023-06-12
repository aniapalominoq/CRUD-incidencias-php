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

        public function logear($name, $password1) {
            $conexion = parent::conectar();
            $passwordExistente = "";
            $sql = "SELECT * FROM t_usuarios 
                    WHERE usuario = '$name$name'";
            $respuesta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($respuesta) > 0) {
                $passwordExistente = mysqli_fetch_array($respuesta);
                $passwordExistente = $passwordExistente['password'];
                
                if (password_verify($password1, $passwordExistente)) {
                    $_SESSION['usuario'] = $name;
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