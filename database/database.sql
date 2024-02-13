create database blog;
use blog;

CREATE TABLE usuario(
    ID_usuario int PRIMARY KEY AUTO_INCREMENT,
    nombre varchar(30),
    correo varchar(150),
    contrasena text(300),
    sector_profesional varchar(30)
);

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

INSERT INTO usuario (nombre, correo, contrasena, sector_profesional) VALUES
    ('Juan Pérez', 'juan.perez@ejemplo.com', 'password123', 'Marketing'),
    ('María García', 'maria.garcia@ejemplo.com', 'micontraseña789', 'Finanzas'),
    ('Pedro López', 'pedro.lopez@ejemplo.com', 'claveSegura007', 'Desarrollo'),
    ('Ana Fernández', 'ana.fernandez@ejemplo.com', 'contraseñaFuerte456', 'Recursos Humanos'),
    ('David Sánchez', 'david.sanchez@ejemplo.com', '123456segura', 'Ventas'),
    ('Laura Martín', 'laura.martin@ejemplo.com', 'mipalabrasecreta987', 'Diseño'),
    ('Carlos Gómez', 'carlos.gomez@ejemplo.com', 'contraseñaSegura101', 'Informática'),
    ('Isabel Ruiz', 'isabel.ruiz@ejemplo.com', 'miclaveunica321', 'Publicidad'),
    ('Pablo Díaz', 'pablo.diaz@ejemplo.com', 'passwordSegura098', 'Comunicación'),
    ('Sandra Blanco', 'sandra.blanco@ejemplo.com', 'micontraseñaFuerte789', 'Derecho');

INSERT INTO post (contenido, fecha, imagen, mime_type, ID_usuario) VALUES
    ('Mi primera publicación!', NOW(), '', '', 1),
    ('¡Hola a todos!', NOW(), '', '', 2),
    ('¿Qué están haciendo hoy?', NOW(), '', '', 3),
    ('¡Consejos para mejorar tu perfil profesional!', NOW(), '', '', 4),
    ('Las últimas tendencias en marketing digital', NOW(), '', '', 5),
    ('¿Buscas trabajo? ¡Consulta estas ofertas!', NOW(), '', '', 6),
    ('¡Feliz viernes!', NOW(), '', '', 7),
    ('Comparte tus pensamientos e ideas', NOW(), '', '', 8),
    ('¿Tienes preguntas? ¡No dudes en preguntar!', NOW(), '', '', 9),
    ('¡Gracias por ser parte de esta comunidad!', NOW(), '', '', 10);

INSERT INTO post (contenido) VALUES ('hola q tal estas');

SELECT post.contenido, post.fecha, post.imagen, post.mime_type, usuario.nombre
FROM post
INNER JOIN usuario ON post.ID_usuario = usuario.ID_usuario
ORDER BY post.fecha DESC;

SELECT COUNT(*) AS count FROM blog.usuario WHERE correo = 'juanjo@gmail.com';