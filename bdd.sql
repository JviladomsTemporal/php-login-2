CREATE DATABASE IF NOT EXISTS gestion;

USE gestion;

CREATE TABLE IF NOT EXISTS Usuario (
    idUser INT AUTO_INCREMENT PRIMARY KEY,
    Usuario VARCHAR(255) NOT NULL,
    Admin ENUM('si', 'no') NOT NULL,
    Descripcion_incidencia TEXT,
    Fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    Fecha_finalizacion TIMESTAMP,
    Estado VARCHAR(50)
);

