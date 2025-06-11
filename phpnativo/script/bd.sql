DROP DATABASE IF EXISTS ivanRuiz;
CREATE DATABASE ivanRuiz;
USE ivanRuiz;

DROP TABLE IF EXISTS roles;
CREATE TABLE roles (
	id INT AUTO_INCREMENT,
	nombre VARCHAR(250) NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE roles CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO roles (nombre) VALUES 
('Administrador');

DROP TABLE IF EXISTS usuarios;
CREATE TABLE usuarios (
	id INT AUTO_INCREMENT,
	tipoDocumento VARCHAR(250) NOT NULL,
	documento VARCHAR(250) NOT NULL,
	correo VARCHAR(250) NOT NULL,
	password VARCHAR(250) NOT NULL,
	rol INT NOT NULL,
	PRIMARY KEY (id)
); ALTER TABLE usuarios CONVERT TO CHARACTER SET utf8 COLLATE utf8_unicode_ci;

INSERT INTO usuarios (tipoDocumento,documento,correo,password,rol) VALUES 
('Cédula de ciudadanía','456123','juanmaldonado.co@gmail.com','d964173dc44da83eeafa3aebbee9a1a0',1);

