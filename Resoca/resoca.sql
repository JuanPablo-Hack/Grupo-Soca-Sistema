create database resoca;
use resoca;
create table admin(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user VARCHAR(50) NOT NULL,
    contra VARCHAR(50) NOT NULL
);

insert into admin(user,contra) VALUES ('admin','admin123');

create table clientes(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(75) NOT NULL,
    nra VARCHAR(15) NOT NULL,
    telefono VARCHAR(10) NULL,
    email VARCHAR(100) NOT NULL UNIQUE KEY,
    area VARCHAR(30) NULL,
    rfc VARCHAR(13) NOT NULL UNIQUE key,
    dir VARCHAR(150) NULL,
    cp VARCHAR(5) NULL,
    user VARCHAR(40)  NOT NULL UNIQUE key,
    pwd VARCHAR(150) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table trabajador(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(75) NOT NULL,
    curp VARCHAR(40) NOT NULL UNIQUE key,
    rfc VARCHAR(13) NOT NULL UNIQUE key,
    nss VARCHAR(25) NOT NULL UNIQUE key,
    cargo VARCHAR(50) NOT NULL,
    user VARCHAR(40)  NOT NULL UNIQUE key,
    pwd VARCHAR(150) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table unidades(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    modelo VARCHAR(75) NOT NULL,
    año VARCHAR(4) NOT NULL,
    color VARCHAR(15) NOT NULL,
    placas VARCHAR(15) NOT NULL,
    no_economico VARCHAR(20) NOT NULL,
    capacidad INT NOT NULL,
    tipo_unidad VARCHAR(30) NOT NULL,
    tipo_combustible VARCHAR(75) NOT NULL,
    serie VARCHAR(50) NOT NULL UNIQUE key,
    descripcion VARCHAR(150) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);