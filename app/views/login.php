<?php
require_once __DIR__ . '/../../config/app.php';
include __DIR__ . '/includes/head/login-head.php';
include __DIR__ . '/links.php';
?>

<div class="login-container">
    <form id="login-form" class="login-box">
        <div class="logo">
            <a href="\byfrost\index.php">
                <img src="assets\img\horizontal-logo.svg" alt="Byfrost Logo">
            </a>
        </div>
        <input type="text" id="documento" name="documento" placeholder="Número de documento" required pattern="[0-9]+" title="Solo números">
        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>

        <button type="submit" id="iniciar-sesion" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Iniciar sesión</button>
        <span id="password-error" class="error-msg"></span>
        <a href="search-account.html">¿Olvidaste tu contraseña?</a>
        <a href="register.php">
            <button type="button" id="register-bttn" class="bg-green-700 hover:bg-green-800 text-yellow-300 font-bold py-2 px-4 rounded">Crear una nueva cuenta</button>
        </a>
    </form>
</div>

<?php
include __DIR__ . '/includes/footer/footer.php';
?>