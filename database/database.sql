create database blog;
use blog;

create table blog.usuario(
    ID int primary key auto_increment,
    nombre varchar (30),
    correo varchar(150),
    contrasena text(300),
    sector_profesional varchar(30)
);

drop table blog.usuario;

create table blog.post(
    ID int primary key auto_increment,
    contenido text(400),
    fecha timestamp default current_timestamp,
    autor int,
    foreign key (autor) references usuario(ID)
);

drop table blog.post;

SELECT * FROM blog.usuario;
SELECT * FROM blog.post;

INSERT INTO blog.post (contenido) VALUES ('hola q tal estas');