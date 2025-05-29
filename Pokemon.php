<?php

abstract class Pokemon
{

  protected string $type;
  protected int $damage;
  protected int $health;
  protected string $name;
  function __construct(string $type, string $name){
    $this->name = $name;
    $this->type = $type;
    
    
    
    /*    
    base damage = 20, 
    final damage = base + modifier
    */

    $this->damage = 20; 
    $this->health = 35;
  }
  public static function createPockemon($type, $name):object{
    
    switch($type){
        case "Water":$pockemon = new WaterPokemon($name); 
        break;
        case "Fire":$pockemon = new FirePokemon($name); 
        break;
        case "Earth":$pockemon = new EarthPokemon($name); 
        break;
        case "Universal":$pockemon = new UniversalPokemon($name); 
        break;
  }
  return $pockemon;
}

  public function getName()
  {
    return $this->name;
  }



  public function setName($name)
  {
    $this->name = $name;

    return $this;
  }


  public function getHealth()
  {
    return $this->health;
  }



  public function setHealth($health)
  {
    $this->health = $health;

    return $this;
  }



  public function getDamage()
  {
    return $this->damage;
  }

  public function setDamage($damage)
  {
    $this->damage = $damage;

    return $this;
  }

  public function getType()
  {
    return $this->type;
  }

  public function setType($type)
  {
    $this->type = $type;

    return $this;
  }
}