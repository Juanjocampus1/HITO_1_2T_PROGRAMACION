create database BLOG;
use blog;

create table usuario(
    ID int primary key auto_increment,
    nombre varchar (30),
    correo varchar(150),
    contrasena varchar(10),
    sector_profesional varchar(30)
);

drop table usuario;

create table blog(
    id int primary key auto_increment
);

drop table blog;

select * from usuario;