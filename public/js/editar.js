document.getElementById('editarUsuarioForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const usuario = document.getElementById('usuario').value.trim();
    const password = document.getElementById('password').value.trim();

    // Validación de campos vacíos
    if (usuario === '' || password === '') {
        mostrarAlerta('error', 'Por favor, completa todos los campos.');
        return; // Detener el envío del formulario
    }

    const formData = new FormData(this);
    const response = await fetch('app/controller/editar.php', {
        method: 'POST',
        body: formData
    });

    const result = await response.json();

    if (result.status === 'success') {
        mostrarAlerta('success', result.message);
        setTimeout(() => {
            window.location.href = 'home'; // Redirige al login después de actualizar
        }, 2000); // Espera 2 segundos antes de redirigir
    } else {
        mostrarAlerta('error', result.message);
    }
});
