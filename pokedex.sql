drop database if exists Pokedex;

create database Pokedex;

use Pokedex;

create table pokemon (
nombre varchar(20),
tipo varchar(100),
imagen varchar(200));

insert into pokemon values
('Charmander','recursos/imagenes/tipo_fuego.png','recursos/imagenes/charmander.png'),
('Pikachu','recursos/imagenes/tipo_electrico.png','recursos/imagenes/pikachu.png'),
('Squirtle','recursos/imagenes/tipo_agua.png','recursos/imagenes/squirtle.png'),
('Gengar','recursos/imagenes/tipo_fantasma.png','recursos/imagenes/gengar.png'),
('Bulbasaur','recursos/imagenes/tipo_planta.png','recursos/imagenes/bulbasaur.png');
