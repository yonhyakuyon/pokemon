<?
//connection
require_once 'Pockemon.php';
require_once 'WaterPockemon.php';

//creating obj
$squirtle = new WaterPockemon('Squirtle');

//test
echo '<pre>';
var_dump($squirtle);