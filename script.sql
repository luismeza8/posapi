CREATE DATABASE posapidb;
USE posapidb;

CREATE TABLE productos(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50),
    imagen VARCHAR(500),
    descripcion VARCHAR(50),
    precio DECIMAL(6, 2)
);
