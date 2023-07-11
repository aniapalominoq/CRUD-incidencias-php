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
 <!-- <?php
        session_start();
        include "../../clases/Auth.php";
        $name = $_POST['name'];
        $password = $_POST['password'];
        $Auth = new Auth();
        if ($Auth->logear($name, $password)) {
            header("location:../../inicio.php");
        } else {
            echo "<script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>";
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Error de inicio de sesión',
                text: 'No se pudo iniciar sesión',
                showConfirmButton: true,
                confirmButtonText: 'Aceptar'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '../../index.php';
                }
            });
        </script>";
        }
        ?> -->