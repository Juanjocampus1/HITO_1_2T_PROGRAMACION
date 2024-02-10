create database blog;
use blog;

CREATE TABLE usuario(
    ID_usuario int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(30),
    correo varchar(150),
    contrasena text(300),
    sector_profesional varchar(30)
);

drop table usuario;

CREATE TABLE post(
    ID_post int PRIMARY KEY AUTO_INCREMENT,
    contenido text(400),
    fecha timestamp DEFAULT CURRENT_TIMESTAMP,
    imagen longblob,
    mime_type VARCHAR(255),
    ID_usuario int,
    FOREIGN KEY (ID_usuario) REFERENCES usuario(ID_usuario)
);

drop table post;

SELECT * FROM usuario;
SELECT * FROM post;

INSERT INTO post (contenido) VALUES ('hola q tal estas');

SELECT post.contenido, post.fecha, post.imagen, post.mime_type, usuario.nombre
FROM post
INNER JOIN usuario ON post.ID_usuario = usuario.ID_usuario
ORDER BY post.fecha DESC;

SELECT COUNT(*) AS count FROM blog.usuario WHERE correo = 'juanjo@gmail.com';