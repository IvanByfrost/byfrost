<?php
require_once 'config/app.php';

include VIEWS_PATH . 'includes/head/head.php';
include VIEWS_PATH . 'links.php';
include VIEWS_PATH . 'includes/header/header.php';
?>

<body>
    <div class="slider-container swiper">
        <div class="slider-wrapper swiper-wrapper">
            <div class="slider-item swiper-slide">
                <div class="slide-content">
                    <h3 class="slide-subtitle">Transformación educativa</h3>
                    <h2 class="slide-title">Transforma la gestión educativa</h2>
                    <p class="slide-description">Accede a toda la información administrativa y académica en un solo lugar, optimizando tiempos y reduciendo errores.</p>
                    <a href="<?php echo BASE_URL; ?>/planes" class="slide-button"><span>Ver planes</span></a>
                </div>
            </div>
            <div class="slider-item swiper-slide">
                <div class="slide-content">
                    <h3 class="slide-subtitle">Automatización</h3>
                    <h2 class="slide-title">Vuelve todo más rápido</h2>
                    <p class="slide-description">Digitaliza tareas como inscripciones, calificaciones y reportes, permitiendo a docentes y administrativos enfocarse en lo realmente importante.</p>
                    <a href="<?php echo BASE_URL; ?>/planes" class="slide-button"><span>Ver planes</span></a>
                </div>
            </div>
            <div class="slider-item swiper-slide">
                <div class="slide-content">
                    <h3 class="slide-subtitle">Comunicación institucional</h3>
                    <h2 class="slide-title">Comunícate de mejor manera</h2>
                    <p class="slide-description">Facilita la interacción entre docentes, alumnos y padres mediante notificaciones, reportes y seguimiento del rendimiento académico.</p>
                    <a href="<?php echo BASE_URL; ?>/planes" class="slide-button"><span>Ver planes</span></a>
                </div>
            </div>
        </div>
        <div class="slider-controls">
            <ul class="slider-pagination">
                <div class="slider-indicator"></div>
                <li class="slider-tab">
                    Transformación educativa
                </li>
                <li class="slider-tab">
                    Automatización
                </li>
                <li class="slider-tab">
                    Comunicación institucional
                </li>
            </ul>
        </div>
    </div>
    <section class="feature-section">
        <div class="features">
            <div class="features">
                <img src="<?php echo BASE_URL; ?>/app/views/assets/img/gestion1.webp" alt="Gestión">
                <h2>Gestión centralizada y eficiente</h2>
                <p>Accede a toda la información administrativa y académica en un solo lugar, optimizando tiempos y reduciendo errores.</p>
            </div>
            <div class="features">
                <img src="<?php echo BASE_URL; ?>/app/views/assets/img/automatizacion.webp" alt="Automatización">
                <h2>Automatización de procesos</h2>
                <p>Digitaliza tareas como inscripciones, calificaciones y reportes, permitiendo a docentes y administrativos enfocarse en lo realmente importante.</p>
            </div>
            <div class="features">
                <img src="<?php echo BASE_URL; ?>/app/views/assets/img/acesso.webp" alt="Acceso">
                <h2>Acceso seguro y en tiempo real</h2>
                <p>Consulta desde cualquier dispositivo con acceso autorizado, garantizando la confidencialidad y disponibilidad de los datos.</p>
            </div>
            <div class="features">
                <img src="<?php echo BASE_URL; ?>/app/views/assets/img/comunicacion.webp" alt="Comunicación">
                <h2>Mejor comunicación institucional</h2>
                <p>Facilita la interacción entre docentes, alumnos y padres mediante notificaciones, reportes y seguimiento del rendimiento académico.</p>
            </div>
        </div>
    </section>

    <section class="app-buttons">
        <div class="app-download">
            <h2>Descarga la app Byfrost</h2>
            <img src="<?php echo BASE_URL; ?>/app/views/assets/img/Byfrost.svg" alt="Byfrost Logo" width="100">
            <img src="<?php echo BASE_URL; ?>/app/views/assets/img/playstore-badge.webp" alt="Google Play" width="200">
            <img src="<?php echo BASE_URL; ?>/app/views/assets/img/appstore-badge.webp" alt="App Store" width="180">
        </div>
    </section>

    <?php
    include 'app/views/includes/footer/footer.php';
    include 'app/views/includes/home-scripts.php';
    ?>