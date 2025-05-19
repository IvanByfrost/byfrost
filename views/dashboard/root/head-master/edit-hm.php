<?php
include __DIR__ . '/../menu-dashboard.php';
?>
<div class="main-dashboard">
    <div class="mdashboard-header">
        <h1>Bienvenido al Dashboard del Rector</h1>
        <p>Desde aquí puedes gestionar los rectores de Byfrost.</p>
    </div>

    <div class="main-dashboard">
        <form class="dash-form" id="school-form" method="POST">
            <div class="form-header">
                <h2><i data-lucide="user"></i>Agregar un rector</h2>
                <p>Aquí puedes agregar un rector.</p>
            </div>
            <div class="search-container">
                <form class="search-container" action="#" method="GET">
                    <input type="text" placeholder="Buscar documento..." name="q">
                    <button type="submit"><i data-lucide="search"></i></button>
            </div>
            <div class="input-grid">
                <input type="number" id="credential-type" placeholder="Tipo de documento" required>
                <input type="text" id="user-credential" placeholder="Documento del usuario" required>
                <input type="text" id="user-name" placeholder="Nombre del usuario" required>
                <input type="text" id="user-adress" placeholder="Dirección del usuario" required>
                <input type="number" id="user-phone" placeholder="Teléfono del usuario" required>
                <input type="text" id="user-email" placeholder="Email del usuario" required>
                <input type="text" id="school-name" placeholder="Colegio del Rector" required>
            </div>
            <div class="form-footer">
                <button class="btn-register" type="submit" id="submit-school">Asociar</button>
                <button class="btn-cancel" type="button" id="cancel-school">Cancelar</button>
            </div>
        </form>
    </div>

    <?php
    include __DIR__ . '/../../../includes/footer/footer.php';
    include __DIR__ . '/../../../includes/root-scripts.php';
    ?>