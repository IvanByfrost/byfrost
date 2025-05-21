<?php
const server ="localhost"; #Servidor de la base de datos. 
const database = "baldur-test";
const user = "root"; #Usuario de la base de datos.
const pass = ""; #Contraseña del usuario de la base de datos.

#Constantes para la conexión a la base de datos.
const SGBD = "mysql:host=".server.";dbname=".database;

const method = "aes-256-cbc"; #Método de encriptación.

const secret_key = '$byfrost%@key';
const secret_iv = '1031180139'; #Vector de inicialización.

?>