<?php session_start();
session_destroy();

// Devolver un mensaje JSON indicando el resultado
http_response_code(200);
echo json_encode(["message" => "Sesión cerrada correctamente"]);
exit(); // Asegúrate de usar exit() después de la redirección para asegurar