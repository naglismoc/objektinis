<?php
session_start();
session_unset();
require __DIR__."/Animal.php";

$kengura = new Animal("skipis","grasslands",4,150);
// $kengura->name="skipis";
// var_dump($kengura);
echo "<br>";
$kengura->value(70);
// var_dump($kengura);
echo "<br>";
// $kengura->toString();
$kotletas = new Animal("kotletas","dykumos",2,70);
// $kotletas->toString();
// echo $kotletas->weight;
// echo $kotletas->value();
// var_dump($kotletas);
echo "<br>";
$_SESSION['kotletas']=$kotletas;
$_SESSION['kotletas']->name="greituolis";
// var_dump($_SESSION['kotletas']);

echo "<br>";
// var_dump($kotletas);
$k3 = new Animal();
// var_dump($k3);
$zooSodas=[];
for ($i=0; $i < 10; $i++) { 
   array_push($zooSodas,new Animal("kangaroo".$i,"field".$i,2,rand(26,66)));
}
var_dump($zooSodas);
echo "<br>";
echo "<br>";
for ($i=0; $i <count($zooSodas) ; $i++) { 
    for ($a=0; $a <count($zooSodas)-1 ; $a++) { 
       if($zooSodas[$a]->weight < $zooSodas[$a+1]->weight){
            $tempAroo = $zooSodas[$a];
            $zooSodas[$a]=$zooSodas[$a+1];
            $zooSodas[$a+1]=$tempAroo;
       }
    }
}
var_dump($zooSodas);

?>