<?
//connection
require_once 'Pokemon.php';
require_once 'WaterPokemon.php';
require_once 'FirePokemon.php';
require_once 'EarthPokemon.php';
require_once 'UniversalPokemon.php';
require_once 'Trainer.php';

//creating obj
$james = new Trainer('James');
$squirtle = Pokemon::createPockemon('Water', 'Squirtle');
$charmander = Pokemon::createPockemon('Fire', 'Charmander');

//obj manipulating
$james->addPokemons($charmander);

//output
require_once 'output.php';