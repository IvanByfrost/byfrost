<?php
require_once __DIR__ . '/../../../../config/app.php';
include BASE_PATH . '/dashboard/root/menu-dashboard.php';
?>
<div class="main-dashboard">
    <div class="mdashboard-header">
        <h1>Bienvenido al Dashboard del Docente</h1>
        <p>Desde aquí puedes gestionar tus actividades escolares</p>
    </div>

    <div class="main-dashboard">
        <form class="dash-form" method="POST">
            <div class="form-header">
                <h2><i data-lucide="activity"></i>Crear actividad</h2>
                <p>Aquí puedes crear una nueva actividad.</p>
            </div>
            <div class="input-grid">
                <select id="activity-type" required>
                    <option value="" disabled selected>Tipo de actividad</option>
                    <option value="MCQ">Selección Múltiple</option>
                    <option value="word-search">Sopa de letras</option> //Esto es un tipo especial de actividad.
                    <option value="crossword">Crucigrama</option> //Esto es un tipo especial de actividad.
                    <option value="file">Tarea en casa</option>
                </select>
                <input type="text" id="subject-name" placeholder="Asignatura" required>
                <input type="text" id="topic-name" placeholder="Tema" required>
                <input type="text" id="Comments" placeholder="Observaciones" required>
                <div class="form-footer">
                    <button class="btn-register" type="submit" id="submit-activity">Registrar actividad</button>
                    <button class="btn-cancel" type="button" id="cancel-activity">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
    <?php
    include BASE_PATH . 'includes/footer/footer.php';
    include __DIR__ . '/../../includes/root-scripts.php';
    ?>