<?php
require_once '/../config/app.php';
include VIEWS_PATH . 'includes/head/contact-head.php';
include VIEWS_PATH . 'links.php';
include VIEWS_PATH . 'includes/header/header.php';
?>


<div class="form-container">
    <h2>Contáctanos</h2>
    <form action="#" method="POST">
      <div class="form-group">
        <label for="nombre">Nombre completo *</label>
        <input type="text" id="nombre" name="nombre" required minlength="3" maxlength="50" placeholder="Tu nombre">
      </div>

      <div class="form-group">
        <label for="email">Correo electrónico *</label>
        <input type="email" id="email" name="email" required placeholder="ejemplo@correo.com">
      </div>

      <div class="form-group">
        <label for="telefono">Teléfono</label>
        <input type="tel" id="telefono" name="telefono" pattern="[0-9]{10}" placeholder="Teléfono sin espacios" maxlength="10">
      </div>

      <div class="form-group">
        <label for="asunto">Asunto</label>
        <select id="asunto" name="asunto" required>
          <option value="">Seleccione una opción</option>
          <option value="consulta">Consulta general</option>
          <option value="soporte">Soporte técnico</option>
          <option value="sugerencia">Sugerencia</option>
        </select>
      </div>

      <div class="form-group">
        <label for="mensaje">Mensaje *</label>
        <textarea id="mensaje" name="mensaje" rows="5" required maxlength="500" placeholder="Escribe tu mensaje aquí..."></textarea>
      </div>

      <button type="submit" class="submit-btn">Enviar mensaje</button>
    </form>
  </div>

<?php 
include __DIR__ . '/includes/footer/footer.php';
?>