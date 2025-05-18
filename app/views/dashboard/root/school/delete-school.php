<?php
include __DIR__ . '/../menu-dashboard.php';
?>
<div class="main-dashboard">
    <div class="mdashboard-header">
        <h1>Bienvenido al Dashboard del Colegio</h1>
        <p>Desde aquí puedes gestionar los colegios de Byfrost.</p>
    </div>

    <div class="main-dashboard">
        <form class="dash-form" id="school-form" method="POST">
            <div class="form-header">
                <h2><i data-lucide="school"></i>Inactivar colegio</h2>
                <p>Aquí puedes inactivar el colegio.</p>
            </div>
            <div class="search-container">
                <form class="search-container" action="#" method="GET">
                    <input type="text" placeholder="Buscar..." name="q">
                    <button type="submit"><i data-lucide="search"></i></button>
            </div>
            <div class="form-footer">
                <button class="btn-cancel" type="submit" id="submit-school">Borrar</button>
                <button class="btn-register" type="button" id="cancel-school">Cancelar</button>
            </div>
        </form>
    </div>
    
    <?php
    include __DIR__ . '/../../../includes/footer/footer.php';
    include __DIR__ . '/../../../includes/root-scripts.php';
    ?>