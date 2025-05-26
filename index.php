<?
//connection
require_once 'Pockemon.php';
require_once 'WaterPockemon.php';

//creating obj
$squirtle = Pockemon::createPockemon('Water', 'Squirtle');

//test
echo '<pre>';
var_dump($squirtle);