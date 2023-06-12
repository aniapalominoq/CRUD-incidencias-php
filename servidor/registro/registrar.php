<?php 
 include("../../clases/Auth.php");
// Obtener los datos del formularize
$name = $_POST['name'];
$rol = $_POST['rol'];
$password1 =password_hash($_POST['password1'],PASSWORD_DEFAULT);

//instanciamos el auth
$Auth=new Auth();
if($Auth->registrar($name,$rol,$password1)){
    header("Location:../../index.php");

}else{
    echo"No se pudo registrar";
}


?>