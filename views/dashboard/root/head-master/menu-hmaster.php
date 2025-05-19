<?php
include __DIR__ . '/../menu-dashboard.php';
?>

<div class="main-dashboard">
    <div class="mdashboard-header">
        <h1>Bienvenido al Dashboard del Rector</h1>
        <p>Desde aquí puedes gestionar los rectores de Byfrost.</p>
    </div>

    <div class="dashboard-cards">
        <div class="card">
            <h3>Agregar un rector</h3>
            <p>Asociar al rector a su colegio</p>
            <a href="../head-master/add-hm.php" class="btn btn-info">Crear</a>
        </div>
        <div class="card">
            <h3>Inactivar un rector</h3>
            <p>Inactivar un rector de su colegio</p>
            <a href="../head-master/delete-hm.php" class="btn btn-info">Editar</a>
        </div>
        <div class="card">
            <h3>Editar un rector</h3>
            <p>Aquí puedes cambiar el rector de un colegio</p>
            <a href="../head-master/edit-hm.php" class="btn btn-info">Borrar</a>
        </div>
    </div>
    </div>
</div>

    <?php
    include __DIR__ . '/../../../includes/footer/footer.php';
    include __DIR__ . '/../../../includes/root-scripts.php';
    ?>