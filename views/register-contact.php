<?php 
require_once __DIR__ . '/../../config/app.php';
include __DIR__ . '/includes/head/register-head.php';
include __DIR__ . '/links.php';
include __DIR__ . '/includes/header/header.php';
?>

<div class="login-container">
  <div class="login-box">
    <div class="logo">
		<a href="\byfrost\index.php">
      <img src="assets\img\horizontal-logo.svg" alt="Byfrost Logo">
			</a>
      <div class="login-titles">	
        <h3>¡Crea tu cuenta!</h3>
        <p>Rellena los siguientes campos con tus datos</p>
        </div>
      </div>

      <form id="contact-form" method="POST">
        <div class="input-grid">
          <input type="tel" id="phone-user" placeholder="Número de teléfono" pattern="\d{10}" required>
          <input type="address" id="adress_user" placeholder="Dirección" required>
      
          <input type="email" id="email_user" placeholder="Correo electrónico" required>
          <input type="email" id="conf-email_user" placeholder="Confirmar correo electrónico" required>
      
          <input type="password" id="password_user" placeholder="Contraseña" minlength="8" required>
          <input type="password" id="conf-password_user" placeholder="Confirmar contraseña" required>
        </div>
        <ul id="form-errors" class="error-list"></ul>
      
        <button type="submit" class="btn btn-info w-100 text-white">Enviar</button>
      </form>
<div class="terms-politics">
  <p>Al registrarte, aceptas nuestros Términos y condiciones y nuestra Política de privacidad. 
  <a href="terms-cond.html">Aprende más.</a>
</div>
</div>
</div>

<?php 
include __DIR__ . '/includes/footer/footer.php';
include __DIR__ . '/includes/register-script.php';
?>