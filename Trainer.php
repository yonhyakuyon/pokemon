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

  public function choosePokemon($id){
    if(isset($this->pokemons[$id])){
      return $this->pokemons[$id];
    }
  }
  

	function getPokemons() { 
 		return $this->pokemons; 
	} 
}