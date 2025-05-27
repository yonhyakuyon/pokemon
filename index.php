<?
//connection
require_once 'Pokemon.php';
require_once 'WaterPokemon.php';
require_once 'FirePokemon.php';
require_once 'EarthPokemon.php';
require_once 'UniversalPokemon.php';

//creating obj
$squirtle = Pokemon::createPockemon('Water', 'Squirtle');
$charmander = Pokemon::createPockemon('Fire', 'Charmander');


//output
require_once 'output.php';