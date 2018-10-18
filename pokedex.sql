drop database if exists Pokedex;

create database Pokedex;

use Pokedex;

create table pokemon (
nombre varchar(20),
tipo varchar(20),
imagen varchar(200));

insert into pokemon values
('Charmander','Fuego','https://vignette.wikia.nocookie.net/es.pokemon/images/5/56/Charmander.png'),
('Pikachu','Electrico','https://vignette.wikia.nocookie.net/es.pokemon/images/7/77/Pikachu.png'),
('Squirtle','Agua','https://vignette.wikia.nocookie.net/es.pokemon/images/e/e3/Squirtle.png'),
('Gengar','Fantasma','https://vignette.wikia.nocookie.net/es.pokemon/images/f/f8/Gengar.png'),
('Bulbasaur','Planta','https://vignette.wikia.nocookie.net/es.pokemon/images/4/43/Bulbasaur.png');

