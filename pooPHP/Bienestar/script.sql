CREATE DATABASE Bienestar
use Bienestar
CREATE TABLE Curso(
    id int auto_increment,
    nombreCurso varchar(20) not null,
    valor curso int not null,
    PRIMARY KEY (id)
);

CREATE TABLE aprendiz(
    id int auto_increment,
    nombreAprendiz varchar(50) not null,
    apellidoAprendiz varchar(50) not null,
    fechaNacimie nto date,
    PRIMARY KEY (id)
   );

   SELECT * FROM Curso;
   SELECT * FROM aprendiz;
