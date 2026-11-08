CREATE DATABASE login;
USE login;

CREATE TABLE usuarios (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    clave VARCHAR(50) NOT NULL,
    nombre VARCHAR(50) NOT NULL
);

INSERT INTO usuarios (usuario, clave, nombre) VALUES
('leidy', '123', 'Leidy'),
('admin', 'admin', 'Administrador');
