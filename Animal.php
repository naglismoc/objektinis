<?php

class Animal{
    public $name;
    public $terrain;
    public $legs;

    public function __construct($name="Kengura", $terrain="zemumos", $legs=2,$weight=70){
        $this->name=$name;
        $this->terrain=$terrain;
        $this->legs=$legs;
        $this->weight = $weight;
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