<?php
if (isset($_SESSION['usuario'])) {
    header("location:inicio");
    exit();
}
?>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./public/css/registro.css">
    <title>Registro</title>
    
<div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <div class="card shadow gamer-card">
                    <div class="card-header text-center">
                        <i class="fas fa-user-plus icon"></i> Registrar Usuario
                    </div>
                    <div class="card-body">
                        <form id="registroForm" action="app/controller/Usuarios.php" method="POST">
                            <div class="mb-3">
                                <label for="usuario" class="form-label">Usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario" required>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Contraseña</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="btn-container">
                                <button type="submit" class="btn btn-blue w-100">
                                    <i class="fas fa-user-check"></i> Registrar Usuario
                                </button>
                                <a class="btn btn-red w-100" href="login">
                                    <i class="fas fa-sign-in-alt"></i> Regresar al login
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./public/js/registrar.js"></script>