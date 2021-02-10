DROP DATABASE IF EXISTS bdNeuronales;
create database bdNeuronales;
use bdNeuronales;

create TABLE Tipo(
idTipo int AUTO_INCREMENT,
tipo varchar(20),
PRIMARY KEY (idTipo)
);

create TABLE Caracter(
idCaracter int AUTO_INCREMENT,
caracter char(1),
idTipo int,
PRIMARY KEY (idCaracter),
foreign key (idTipo) references Tipo(idTipo)
);

create TABLE Coordenada(
idCoordenada int AUTO_INCREMENT,
ejex int,
ejey int,
idCaracter int,
PRIMARY KEY (idCoordenada),
foreign key (idCaracter) references Caracter(idCaracter)
);

insert into Tipo values('1','Vocal');
insert into Tipo values('2','Número');
insert into Tipo values('3','Letra');
