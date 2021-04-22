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
create table  unidades(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    año VARCHAR(5) NOT NULL,
    color VARCHAR(20) NOT NULL,
    placas VARCHAR(10) NOT NULL,
    no_economico VARCHAR(40) NOT NULL,
    no_serie VARCHAR(40) NOT NULL,
    no_filtro_aceite VARCHAR(40) NOT NULL,
    no_filtro_secu VARCHAR(50) NOT NULL,
    tipo_aceite VARCHAR(40) NOT NULL,
    cantidad INT NOT NULL,
    no_filtro_hidra VARCHAR(50) NOT NULL,
    tipo_aceite2 VARCHAR(40) NOT NULL,
    cantidad2 INT NOT NULL,
    no_filtro_combus VARCHAR(40) NOT NULL,
    no_filtro_aire VARCHAR(40) NOT NULL,
    no_bandas VARCHAR(40) NOT NULL,
    tipo_aceite_dif VARCHAR(40) NOT NULL,
    cantidad_dif INT NOT NULL,
    liquido_freno VARCHAR(40) NOT NULL,
    cantidad_freno INT NOT NULL,
    anticongelante VARCHAR(40) NOT NULL,
    cantidad_anti INT NOT NULL,
    tipo_aceite_trans VARCHAR(40) NOT NULL,
    cantidad_trans INT NOT NULL,
    creado TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
create table estados(
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    estado VARCHAR(40) NOT NULL
);