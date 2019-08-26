<?php
// include("Animal.php");
  /**
   *
   */
  class Herbivorous extends Animal{
    public $fruits; //    kg/day
    public $costH;

    public function __construct($name, $cry, $type, $fruits){
      $this->fruits = $fruits;
      parent::__construct($name, $cry, $type);
    }

    public function getFruits(){
      return $this->fruits;
    }

    public function setFruits($fruits){
      $this->fruits = $fruits;
    }

    public function costFruits(){
      return $this->costH = 1.2 * log10(($this->fruits + 5 )*2 + 1);
    }

    public function __toString(){
      return $this->name." est un ".$this->type." qui a pour cri le ".$this->cry." . Il mange " . $this->fruits ." kilos de fruits par jour et cela coûtera ".1.2 * log10(($this->fruits + 5 )*2 + 1)." €";
    }
  }

 ?>
