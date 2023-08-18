<?php
include "Conexion.php";

class Auth extends Conexion
{

    public function registrar($name, $rol, $password1)
    {
        $conexion = parent::conectar();

        // Verificar si el usuario ya existe
        $sql_verificar = "SELECT COUNT(*) as count FROM usuarios WHERE nombre = ?";
        $query_verificar = $conexion->prepare($sql_verificar);
        $query_verificar->bind_param('s', $name);
        $query_verificar->execute();
        $resultado = $query_verificar->get_result();
        $fila = $resultado->fetch_assoc();

        if (
            $fila['count'] > 0
        ) {
            return "El nombre de usuario ya está registrado.";
        }

        // Si el usuario no existe, realizar la inserción
        $sql_insertar = "INSERT INTO usuarios (nombre, rol, contrasena) 
                    VALUES (?,?,?)";
        $query_insertar = $conexion->prepare($sql_insertar);
        $query_insertar->bind_param('sss', $name, $rol, $password1);

        if ($query_insertar->execute()) {
            return "Usuario registrado exitosamente.";
        } else {
            return "Error al registrar el usuario.";
        }
    }

    public function logear($name, $password)
    {
        $conexion = parent::conectar();
        $sql = "SELECT * FROM usuarios WHERE nombre = '$name'";
        $respuesta = mysqli_query($conexion, $sql);

        if ($respuesta && mysqli_num_rows($respuesta) > 0) {
            $passwordExistente = mysqli_fetch_array($respuesta)['contrasena'];
            if (password_verify($password, $passwordExistente)) {
                session_start();
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
