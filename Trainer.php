<?php

 class Trainer 
{


  private array $pokemons = [];
  private string $name;
  function __construct(string $name){
    $this->name = $name;
  }
  public function addPokemons($pokemon){
    $pokemons = $this->pokemons;
    $pokemons[] = $pokemon;
    $this->pokemons = $pokemons;
  }
  
  private function randomInt(){
    return rand(0, 10);
  }

  public function pokemonAttack($id, $enemy){
    //choose pokemon for attack
    if(isset($this->pokemons[$id])){
      $pokemon = $this->pokemons[$id];
      $damage = $pokemon->getDamage();
      Pokemon::attack($enemy, $damage);
    }
  }
  public function getPokemon($id){
    return $this->pokemons[$id];
  }

	function getPokemons() { 
 		return $this->pokemons; 
	} 
}