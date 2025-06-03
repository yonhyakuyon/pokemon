<?
//connection
require_once 'Pokemon.php';
require_once 'WaterPokemon.php';
require_once 'FirePokemon.php';
require_once 'EarthPokemon.php';
require_once 'UniversalPokemon.php';
require_once 'Trainer.php';
require_once 'PlayInstrument.php';



//creating obj
$play = new PlayInstrument();
$james = new Trainer('James');
$shelly = new Trainer('Shelly');
$squirtle = Pokemon::createPockemon('Water', 'Squirtle');
$charmander = Pokemon::createPockemon('Fire', 'Charmander');



//obj manipulating
$james->addPokemons($charmander);
$shelly->addPokemons($squirtle);
$james->pokemonAttack(0,$shelly->getPokemon(0));



//dynamic footer connect
$data = getdate();
$year = $data["year"];



//output
require_once 'output.php';