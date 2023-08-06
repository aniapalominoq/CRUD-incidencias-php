
document.getElementById("loginForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(e.target);

    try {
        const response = await fetch("/servidor/login/logear.php", {
            method: "POST",
            body: formData,
        });

        if (!response.ok) {
            throw new Error("Error al enviar la solicitud");
        }

        const data = await response.json();

        if (data.status === "success") {
            Swal.fire({
                icon: 'success',
                title: '¡Inicio de sesión exitoso!',
                text: 'Bienvenido(a) Gestion de incidencias CGC',
                timer: 2000,
                showConfirmButton: false,
                confirmButtonText: 'Aceptar',
                 toast: true,
                position: 'top-right', // Establecer el texto del botón
                didOpen: () => {
/*                     // Personalizar el color de fondo del alert
                    const alert = Swal.getPopup();
                    alert.style.backgroundColor = '#48C78E'; */
                    // Personalizar el botón Aceptar con el color y sin bordes
                    const button = Swal.getPopup().querySelector('.swal2-confirm');
                    button.style.backgroundColor = '#19459D';
                    button.style.border = 'none';
                    button.style.boxShadow = 'none';
                }
            }).then(() => {
                window.location.replace("/inicio.php"); // Redireccionar a la página de inicio del usuario
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message,
                toast: true,
                position: 'top-right',
                confirmButtonText: 'Aceptar',// Establecer el texto del botón
                didOpen: () => {

                    // Personalizar el botón Aceptar con el color y sin bordes
                    const button = Swal.getPopup().querySelector('.swal2-confirm');
                    button.style.backgroundColor = '#F14668';
                    button.style.border = 'none';
                    button.style.boxShadow = 'none';
                }
            });
        }
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Ha ocurrido un error inesperado',
            confirmButtonText: 'Aceptar', // Establecer el texto del botón
            toast: true,
            position: 'top-right',
            didOpen: () => {
                // Personalizar el botón Aceptar con el color y sin bordes
                const button = Swal.getPopup().querySelector('.swal2-confirm');
                button.style.backgroundColor = '#FFE08A';
                button.style.border = 'none';
                button.style.boxShadow = 'none';
            }
        });
    }
});



