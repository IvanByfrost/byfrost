<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Byfrost</title>
    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\features.css">
    <link rel="stylesheet" href="css\footer.css">
    <link rel="stylesheet" href="css\loginstyle.css">
    <link rel="stylesheet" href="css\slider.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,200,0,0">
</head>

<header>
    <div class="main-header">
    <div class="logo-header">
        <a href="index.php">
            <img src="img\horizontal-logo.svg" alt="Byfrost Logo" width="200">
        </a>
    </div>

    <div class="menu-bar">
        <a href="plans.htm" class="btn-menu">Planes</a>
        <a href="contact.php" class="btn-menu">Contáctenos</a>
        <a href="faq.html" class="btn-menu">FAQ</a>
    </div>

    <a href="login.php">
        <div class="login-bttn">
    <img src="img\user-icon.svg" alt="User Icon" width="30"> 
    Iniciar sesión
        </div>
    </a>
</div>
</header>

<body>
<div class="login-container">
    <form id="login-form" class="login-box">
        <div class="logo">
            <a href="index.php">
      <img src="img\horizontal-logo.svg" alt="Byfrost Logo">
			</a>
        </div>
        <input type="text" id="documento" name="documento" placeholder="Número de documento" required pattern="[0-9]+" title="Solo números">
        <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña" required>
        
        <button type="submit" id="iniciar-sesion" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Iniciar sesión</button>
        <span id="password-error" class="error-msg"></span>
        <a href="search-account.html">¿Olvidaste tu contraseña?</a>
        <a href="register.html">
            <button type="button" id="register-bttn" class="bg-green-700 hover:bg-green-800 text-yellow-300 font-bold py-2 px-4 rounded">Crear una nueva cuenta</button>
        </a>
    </form>
</div>


    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="about">
                    <h2>Nosotros</h2>
                    <p>Nuestra solución tecnológica innovadora propone transformar la gestión administrativa de las instituciones educativas, ofreciendo una plataforma intuitiva y sostenible.</p>
                </div>
        <div class="contact">
                    <h2>Contacto</h2>
                    <p>Cra 7 # 98-25, Bogotá, Colombia</p>
                    <p>(601) 7886590</p>
                    <p>(601) 4567890</p>
                    <a href="www.byfrost.com.co">www.byfrost.com.co</a>
                    <p>info@byfrost.com</p>
                </div>
        <div class="site-map">
                    <p><a href="#">Inicio</a></p>
                    <p><a href="plans.htm">Planes</a></p>
                    <p><a href="contact.htm">Contáctenos</a></p>
                    <p><a href="faq.htm">FAQ</a></p>
                    <p><a href="site-map.htm">Mapa del sitio</a></p>
                </div>
            </div>
    <div class = "copyright">
            <p>Byfrost &copy; 2026. Todos los derechos reservados.</p>
            <p>Diseñado por Byfrost Software.</p>
        </div>
    </div>
    </footer>

</body>
</html>