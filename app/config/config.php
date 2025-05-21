<?php
// Configuración de la aplicación

// Información general de la aplicación
const APP_NAME = 'Byfrost';
const APP_VERSION = '0.0.1';
const APP_URL = 'https://localhost/byfrost/';
const APP_DESCRIPTION = 'Byfrost es un sistema de gestión educativa desarrollado con HTML, PHP y MySQL. Está diseñado para fomentar la inclusión y la innovación en el aula, con especial énfasis en la accesibilidad para estudiantes sordos.';
const COMPANY_NAME = 'Asgard Technologies S.A.S.';
const MONEY = 'COP $';

// Zona horaria
date_default_timezone_set('America/Bogota');

// Configuración de la base de datos
const SERVER ="localhost"; #Servidor de la base de datos. 
const DATABASE = "baldur-test";
const USER = "root"; #Usuario de la base de datos.
const PASSWORD = ""; #Contraseña del usuario de la base de datos.

#Constantes para la conexión a la base de datos.
const SGBD = "mysql:host=".SERVER.";dbname=".DATABASE;

// --- Constantes de Seguridad para Encriptación ---
const METHOD = "aes-256-cbc"; #Método de encriptación.
const SECRET_KEY = '$byfrost%@key';
const SECRET_IV = '1031180139'; #Vector de inicialización.

?>