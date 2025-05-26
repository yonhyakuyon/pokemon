<?php

abstract class Pockemon
{

  protected string $type;
  protected int $damage;
  protected int $health;
  protected string $name;
  function __construct(string $type, string $name){
    $this->name = $name;
    $this->type = $type;
    $this->damage = 20; 
    /*    
    base damage = 20, 
    final damage = base + modifier
    */
    $this->health = 35;
  }
}