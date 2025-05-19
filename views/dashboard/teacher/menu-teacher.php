<?php
require_once __DIR__ . '/../../../../config/app.php';
include BASE_PATH . '/includes/head/dash-head.php';
include BASE_PATH . '/links.php';
include BASE_PATH . '/includes/header/root-header.php';
?>

<div class="root-dashboard">
    <div class="root-sidebar">
        <ul>
            <li><a href="<?= BASE_URL ?>/app/views/dashboard/root/school/menu-school.php"><i data-lucide="school"></i>Actividades</a></li>
            <li><a href="user/"><i data-lucide="users"></i>Horario</a></li>
            <li><a href="#"><i data-lucide="user"></i>Perfil</a></li>
            <li><a href="#"><i data-lucide="settings"></i>Configuración</a></li>
            <li><a href="#"><i data-lucide="bar-chart-2"></i>Reportes</a></li>
        </ul>
    </div>
