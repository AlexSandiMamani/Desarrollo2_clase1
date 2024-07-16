DROP DATABASE IF EXISTS bd_prueba1;

CREATE DATABASE bd_prueba1;

USE bd_prueba1;

CREATE TABLE Estudiante (
    codigo varchar(50) PRIMARY KEY,
    apaterno varchar(50),
    amaterno varchar(50),
    nombres varchar(50),
    carrera varchar(50),
    domicilio varchar(50)
);

DELIMITER //
CREATE PROCEDURE InsertarEstudiante(
    IN p_codigo varchar(50),
    IN p_apaterno varchar(50),
    IN p_amaterno varchar(50),
    IN p_nombres varchar(50),
    IN p_carrera varchar(50),
    IN p_domicilio varchar(50)
)
BEGIN
INSERT INTO Estudiante (codigo,apaterno,amaterno,nombres, carrera,domicilio) VALUES (p_codigo,p_apaterno,p_amaterno,p_nombres, p_carrera,p_domicilio);
END //
DELIMITER ;

CALL InsertarEstudiante ('121212','LOPEZ','TRUJILLO','JAVIER','INFORMATICA','UNSAAC - PÉRAYOC');
CALL InsertarEstudiante ('131313','ACHAHUI','CERVANTES','PAOLA','ENFERMERIA','UNSAAC - PÉRAYOC');
CALL InsertarEstudiante ('141414','TORRES','ALEGRIA','LUCIO','CONTABILIDAD','UNSAAC - PÉRAYOC');

DELIMITER //
CREATE PROCEDURE ActualizarEstudiante(
    IN p_codigo varchar(50),
    IN p_apaterno varchar(50),
    IN p_amaterno varchar(50),
    IN p_nombres varchar(50),
    IN p_carrera varchar(50),
    IN p_domicilio varchar(50)
)
BEGIN
UPDATE Estudiante SET 
    apaterno = p_apaterno,     
    amaterno = p_amaterno, 
    nombres = p_nombres, 
    carrera = p_carrera, 
    domicilio = p_domicilio
    WHERE
    codigo = p_codigo;
END //
DELIMITER ;
CALL ActualizarEstudiante ('121212','ABARCA','MORA','RAIMAR','INFO','UNSAAC');

DELIMITER // 
CREATE PROCEDURE EliminarEstudiante( 
    IN p_codigo varchar(50) 
) 
BEGIN 
    DELETE FROM Estudiante 
    WHERE codigo = p_codigo; 
END//
DELIMITER ;
CALL EliminarEstudiante('121212');

DELIMITER //
CREATE PROCEDURE MostrarEstudiantes()
BEGIN
SELECT * FROM Estudiante;
END//
DELIMITER ;
CALL MostrarEstudiantes();