<?php 
require_once __DIR__ . '/../../config/app.php';
include __DIR__ . '/includes/head/register-head.php';
include __DIR__ . '/links.php';
?>

<div class = "wrapper-register">
<div class="login-container">
  <div class="login-box">
    <div class="logo">
		<a href="\byfrost\index.php">
      <img src="assets\img\horizontal-logo.svg" alt="Byfrost Logo">
		</a>
    </div>
	  <div class="login-titles">	
      <h3>¡Crea tu cuenta!</h3>
      <p>Rellena los siguientes campos con tus datos</p>
    	</div>

<form id="register-form" method="POST">
  <div class="input-grid">
    <select id="document-type" required>
      <option value="" disabled selected>Tipo de documento</option>
      <option value="cc">Cédula de ciudadanía</option>
      <option value="ti">Tarjeta de identidad</option>
      <option value="ce">Cédula de extranjería</option>
      <option value="pa">Pasaporte</option>
    </select>

    <input type="text" id="credential-number" placeholder="Número de documento" required pattern="\d+" title="Solo números permitidos">
    <input type="text" id="name_user" placeholder="Nombres" required>
    <input type="text" id="lastname_user" placeholder="Apellidos" required>
  </div>

  <button type="submit" class="btn btn-info w-100 text-white">Siguiente</button>
</form>
<a href="login.php">¿Ya tienes una cuenta?</a>
  </div>
</div>
</div>

<?php 
include __DIR__ . '/includes/footer/footer.php';
include __DIR__ . '/includes/register-script.php';
?>