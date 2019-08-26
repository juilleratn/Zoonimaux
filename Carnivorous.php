<?php
include("Animal.php");
  /**
   *
   */
  class Carnivorous extends Animal{
    public $meat;
    public $costM;

    public function __construct($name, $cry, $type, $meat){
      $this->meat = $meat;
      parent::__construct($name, $cry, $type);
    }

    public function getMeat(){
      return $this->meat;
    }

    public function setMeat($meat){
      $this->meat = $meat;
    }

    public function costMeat(){
      return $this->costM=pow(($this->meat *10),2)+100;
    }

    public function __toString(){
    return $this->name." est un ".$this->type." qui a pour cri le ".$this->cry." . Il mange " . $this->meat ." kilos de fruits par jour et cela coûtera ".(($this->meat * 10)*2 + 100)." €";
  }

  }


 ?>
