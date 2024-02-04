create table blog.usuario(
    ID int primary key auto_increment,
    nombre varchar (30),
    correo varchar(150),
    contrasena text(300),
    sector_profesional varchar(30)
);

create table blog.post(
    ID int primary key auto_increment,
    titulo varchar(150),
    contenido text(400),
    fecha date,
    autor int,
    foreign key (autor) references usuario(ID)
);

drop table blog.usuario;
drop table blog.post;


SELECT * FROM blog.usuario;