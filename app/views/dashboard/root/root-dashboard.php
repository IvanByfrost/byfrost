<?php
include __DIR__ . '/menu-dashboard.php';
?>
<div class="main-dashboard">
    <div class="mdashboard-header">
        <h1>Bienvenido al Dashboard del Administrador</h1>
        <p>Desde aquí puedes gestionar los colegios, rectores, usuarios y permisos.</p>
    </div>

    <div class="dashboard-cards">
        <div class="card">
            <h3>Colegios</h3>
            <p>Gestiona los colegios registrados en Byfrost.</p>
            <a href="../root/school/menu-school.php" class="btn btn-info">Gestionar</a>
        </div>
        <div class="card">
            <h3>Rectores</h3>
            <p>Gestiona los rectores registrados en Byfrost.</p>
            <a href="<?= BASE_URL ?>/app/views/dashboard/root/head-master/menu-hmaster.php" class="btn btn-info">Gestionar</a>
        </div>
        <div class="card">
            <h3>Usuarios</h3>
            <p>Gestiona los usuarios registrados en Byfrost.</p>
            <a href="../root/user/menu-user.php" class="btn btn-info">Gestionar</a>
        </div>
        <div class="card">
            <h3>Configuración</h3>
            <p>Gestiona la configuración de Byfrost.</p>
            <a href="../root/config-root.php" class="btn btn-info">Gestionar</a>
        </div>
        <div class="card">
            <h3>Reportes</h3>
            <p>Observa los reportes del sistema Byfrost</p>
            <a href="../root/config-root.php" class="btn btn-info">Gestionar</a>
        </div>
    </div>
</div>
</div>

<?php
include __DIR__ . '/../../includes/footer/footer.php';
include __DIR__ . '/../../includes/root-scripts.php';
?>