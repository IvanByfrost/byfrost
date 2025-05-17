<?php
include __DIR__ . '/menu-dashboard.php';
?>

<div class="main-dashboard">
    <div class="mdashboard-header">
        <h1>Bienvenido al Dashboard del Colegio</h1>
        <p>Desde aquí puedes gestionar los colegios de Byfrost.</p>
    </div>

    <div class="dashboard-cards">
                <div class="card">
            <h3>Crear un colegio</h3>
            <p>Registra los colegios aquí</p>
            <a href="create-school.php" class="btn btn-info">Crear</a>
        </div>
                <div class="card">
            <h3>Editar un colegio</h3>
            <p>Edita la información los colegios aquí</p>
            <a href="edit-school.php" class="btn btn-info">Editar</a>
        </div>
    </div>


    <?php
    include __DIR__ . '/../../includes/footer/footer.php';
    include __DIR__ . '/../../includes/root-scripts.php';
    ?>