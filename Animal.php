<?php

class Animal{
    private $name;
    public $terrain;
    public $legs;
    static public $statId = 0;
    public $id;

    public function __construct($name="Kengura", $terrain="zemumos", $legs=2,$weight=70){
        $this->name=$name;
        $this->terrain=$terrain;
        $this->legs=$legs;
        $this->weight = $weight;
        $this->id=$this::$statId;
        $this::$statId++;
    }
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name=$name;
    }
    public function value(){
        return ($this->weight*120);
    }
    public function toString(){
        echo "Animal name=". $this->name.
        ", terrain=".$this->terrain.
        ", legs=".$this->legs.
        ", market value=".$this->marketValue.
        "<br>";
    }
  

}

?>