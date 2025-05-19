<?php
require_once __DIR__ . '/../../../../config/app.php';
include __DIR__ . '/../../includes/head/dash-head.php';
include __DIR__ . '/../../links.php';
include __DIR__ . '/../../includes/header/root-header.php';
?>

<div class="root-dashboard">
    <div class="root-sidebar">
        <ul>
            <li><a href="<?= BASE_URL ?>/app/views/dashboard/root/school/menu-school.php"><i data-lucide="school"></i>Colegios</a></li>
            <li><a href="user/"><i data-lucide="users"></i>Rectores</a></li>
            <li><a href="<?= BASE_URL ?>/app/views/dashboard/root/user/menu-user.php"><i data-lucide="user"></i>Usuarios</a></li>
            <li><a href="#"><i data-lucide="key"></i>Permisos</a></li>
            <li><a href="#"><i data-lucide="settings"></i>Configuración</a></li>
            <li><a href="#"><i data-lucide="bar-chart-2"></i>Reportes</a></li>
        </ul>
    </div>
