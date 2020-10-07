<?php
session_start();
session_unset();
require __DIR__."/Animal.php";

$kengura = new Animal("skipis","grasslands",4,150);
$kengura2 = new Animal("dupis","grasslands",4,150);
var_dump($kengura);
echo $kengura->legs;
echo "<br><br>";
// $kengura::$id=21;
echo $kengura->id;  
echo "<br><br>";
echo $kengura2->id; 
echo "<br><br>"; 
echo Animal::$statId;
echo "<br><br>";
echo $kengura2::$statId; 
echo "<br><br>";
// echo $kengura->name;
echo "<br><br>";
echo $kengura->getName();
echo $kengura->setName("skiparisas");
echo "<br><br>";
echo $kengura->getName();
?>