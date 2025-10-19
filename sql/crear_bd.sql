-- Crear la base de datos
CREATE DATABASE IF NOT EXISTS login_register_db;
USE login_register_db;

-- Crear la tabla de usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre_completo VARCHAR(100) NOT NULL,
    boleta VARCHAR(20) NOT NULL UNIQUE,
    usuario VARCHAR(50) NOT NULL UNIQUE,
    clave VARCHAR(255) NOT NULL,
    id_rol INT DEFAULT 0
);

-- Insertar usuario ADMIN (rol 1)
INSERT INTO usuarios (nombre_completo, boleta, usuario, clave, id_rol)
VALUES ('Administrador General', '20210001', 'admin2025', '12345', 1)
ON DUPLICATE KEY UPDATE
    nombre_completo = VALUES(nombre_completo),
    usuario = VALUES(usuario),
    clave = VALUES(clave),
    id_rol = VALUES(id_rol);

-- Insertar usuario NORMAL (rol 0)
INSERT INTO usuarios (nombre_completo, boleta, usuario, clave, id_rol)
VALUES ('Usuario Estándar', '20210002', 'usuario2025', '12345', 0)
ON DUPLICATE KEY UPDATE
    nombre_completo = VALUES(nombre_completo),
    usuario = VALUES(usuario),
    clave = VALUES(clave),
    id_rol = VALUES(id_rol);
