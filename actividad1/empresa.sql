USE empresa;

CREATE TABLE trabajador(
   rut              VARCHAR (250) NOT NULL,
   nombre           VARCHAR (150) NOT NULL,
   apellidos        VARCHAR (150) NOT NULL,
   fecha_nacimiento DATE          NOT NULL,
   direccion        VARCHAR (250) NOT NULL,
   edad             INT       (3)  NOT NULL,
   sexo             CHAR     (1)  NOT NULL,
   cargo            VARCHAR (150) NOT NULL, 
   salario          FLOAT         NOT NULL,             
   PRIMARY KEY (rut)
)ENGINE=INNODB;