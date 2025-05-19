<?php 
require_once __DIR__ . '/../../config/app.php';
include __DIR__ . '/includes/head/contact-head.php';
include __DIR__ . '/links.php';
include __DIR__ . '/includes/header/header.php';
?>

<body>
    <div class="error-container">
        <div class="error-content">
            <h2 class="error-subtitle">
                ¡Ups! Llegaste al Valhalla.
            </h2>
            <h1 class="error-title">
                ¡404!
            </h1>
            <h3 class="error-descrip">
                La página que estás buscando se encuentra dañada o no existe.
            </h3>
            <div class="image-error">
                <img src="<?= BASE_URL ?>/app/views/assets/img/error-404.svg" alt="Error 404" width="150">
            </div>
        </div>
    </div>

<?php 
include __DIR__ . '/includes/footer/footer.php';
?>