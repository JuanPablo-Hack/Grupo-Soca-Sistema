create database resoca;
use resoca;
create table admin(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    user VARCHAR(50) NOT NULL,
    contra VARCHAR(50) NOT NULL
);

insert into admin(user,contra) VALUES ('admin','admin123');

create table estados(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(20) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table trabajador(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    peso_bruto INT NOT NULL ,
    peso_neto INT NOT NULL ,
    peso_tara INT NOT NULL,
    transportista VARCHAR(40)  NOT NULL,
    operador INT NOT NULL,
    unidad INT NOT NULL ,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table tallas(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(75) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table ordenes(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    cliente VARCHAR(75) NOT NULL,
    encargado VARCHAR(75) NOT NULL,
    cargo VARCHAR(75) NOT NULL,
    servicio VARCHAR(75) NOT NULL,
    fecha TIMESTAMP,
    cantidad VARCHAR(4) NOT NULL,
    unidad VARCHAR(15) NOT NULL,
    concepto VARCHAR(40) NOT NULL,
    manifiesto VARCHAR(15) NOT NULL,
    factura VARCHAR(15) NOT NULL,
    unidadasig VARCHAR(25) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

create table servicios(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(10) NOT NULL,
    tipo VARCHAR(20) NOT NULL,
    descripcion VARCHAR(150) NOT NULL,
    supervisor VARCHAR(50) NOT NULL,
    operador VARCHAR(50) NOT NULL,
    auxiliar VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    placas VARCHAR(10) NOT NULL,
    destinofinal VARCHAR(50) NOT NULL,
    ubicacion VARCHAR(50) NOT NULL,
    material VARCHAR(150) NOT NULL,
    equipo VARCHAR(150) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table cortes(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    folio VARCHAR(5) NOT NULL,
    ticket VARCHAR(5) NOT NULL,
    % VARCHAR(3) NOT NULL,
    kg VARCHAR(5) NOT NULL,
    cantidad VARCHAR(5) NOT NULL,
    unidad VARCHAR(5) NOT NULL,
    descripcion VARCHAR(5) NOT NULL,
    precio VARCHAR(5) NOT NULL,
    importe VARCHAR(5) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table manifiestos(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    nombre VARCHAR(50) NOT NULL,
    capacidad VARCHAR(10) NOT NULL,
    tipo VARCHAR(50) NOT NULL
    totalresiduo VARCHAR(7) NOT NULL,
    volpeso VARCHAR(7) NOT NULL,
    fecha VARCHAR(20) NOT NULL,
    unidad VARCHAR(20) NOT NULL,
    nombrerecibe VARCHAR(50) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table acuses(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    cliente VARCHAR(50) NOT NULL,
    encargado VARCHAR(50) NOT NULL,
    puesto VARCHAR(50) NOT NULL,
    descripcion VARCHAR(150) NOT NULL,
    manifiesto VARCHAR(10) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table registros_combustible(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    unidad VARCHAR(50) NOT NULL,
    fecha VARCHAR(10) NOT NULL,
    kminicial VARCHAR(25) NOT NULL,
    kmfinal VARCHAR(25) NOT NULL,
    tiposervicio VARCHAR(50) NOT NULL,
    litros VARCHAR(3) NOT NULL,
    rendimiento VARCHAR(20) NOT NULL,
    factura VARCHAR(30) NOT NULL,
    operador VARCHAR(50) NOT NULL,
    importe VARCHAR(10) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table  mercancia(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    no_formato VARCHAR(50) NOT NULL,
    no_contenedor VARCHAR(50) NOT NULL,
    naviera VARCHAR(50) NOT NULL,
    tipo_contenedor VARCHAR(150) NOT NULL,
    fecha VARCHAR(10) NOT NULL,
    booking VARCHAR(40) NOT NULL,
    referencia VARCHAR(40) NOT NULL,
    agencia_aduanal VARCHAR(40) NOT NULL,
    cliente VARCHAR(50) NOT NULL,
    transportista VARCHAR(40) NOT NULL,
    unidad INT) NOT NULL,
    observaciones VARCHAR(150) NOT NULL,
    hora_comienzo VARCHAR(10) NOT NULL,
    peso VARCHAR(20) NOT NULL,
    hora_final VARCHAR(10) NOT NULL,
    no_vgm VARCHAR(30) NOT NULL,
    embalaje VARCHAR(30) NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table estados(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    estado VARCHAR(40) NOT NULL
);