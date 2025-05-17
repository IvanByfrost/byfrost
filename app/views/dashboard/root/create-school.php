<?php
include __DIR__ . '/menu-dashboard.php';
?>
<div class="main-dashboard">
    <div class="mdashboard-header">
        <h1>Bienvenido al Dashboard del Colegio</h1>
        <p>Desde aquí puedes gestionar los colegios de Byfrost.</p>
    </div>

<div class="main-dashboard">
    <form class="dash-form" id="school-form" method="POST">
        <div class="form-header">
            <h2><i data-lucide="school"></i>Registrar colegio</h2>
            <p>Rellena los siguientes campos con los datos del colegio</p>
        </div>
        <div class="input-grid">
            <input type="text" id="school-name" placeholder="Nombre del colegio" required>
            <input type="text" id="school-adress" placeholder="Dirección del colegio" required>
            <input type="number" id="school-phone" placeholder="Teléfono del colegio" required>
            <input type="text" id="school-email" placeholder="Email del colegio" required>
            <input type="text" id="school-website" placeholder="Página web del colegio" required>
            <input type="number" id="headmaster" placeholder="Documento del rector" required>
        </div>
        <div class="form-footer">
            <button class="btn-register" type="submit" id="submit-school">Registrar colegio</button>
            <button class="btn-cancel" type="button" id="cancel-school">Cancelar</button>
        </div>
    </form>
   </div>   
    <?php
    include __DIR__ . '/../../includes/footer/footer.php';
    include __DIR__ . '/../../includes/root-scripts.php';
    ?>