<?php
include __DIR__ . '/../menu-dashboard.php';
?>

<div class="main-dashboard">
    <div class="mdashboard-header">
        <h1>Bienvenido al Dashboard de usuarios</h1>
        <p>Desde aquí puedes gestionar los usuarios registrados en Byfrost.</p>
    </div>

        <div class="dashboard-cards">
        <div class="card">
            <h3>Editar un usuario</h3>
            <p>Edita la información de los usuarios registrados en Byfrost</p>
            <a href="edit-user.php" class="btn btn-info">Editar</a>
        </div>
        <div class="card">
            <h3>Borrar un usuario</h3>
            <p>Aquí puedes inactivar a los usuarios de Byfrost</p>
            <a href="delete-user.php" class="btn btn-info">Borrar</a>
        </div>
    </div>
    </div>
</div>


    <?php
    include __DIR__ . '/../../../includes/footer/footer.php';
    include __DIR__ . '/../../../includes/root-scripts.php';
    ?>