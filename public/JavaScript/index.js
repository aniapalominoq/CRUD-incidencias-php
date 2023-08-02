// index.js

document.getElementById("loginForm").addEventListener("submit", async (e) => {
    e.preventDefault();

    const formData = new FormData(e.target);

    try {
        const response = await fetch("/servidor/login/logear.php", {
            method: "POST",
            body: formData
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
                showConfirmButton: false
            }).then(() => {
                window.location.replace("/inicio.php"); // Redireccionar a la página de inicio del usuario
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: data.message,
            });
        }
    } catch (error) {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'Ha ocurrido un error inesperado',
        });
    }
});
