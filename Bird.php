<?php
  include("Carnivorous.php");
  /**
   *
   */
  class Bird extends Carnivorous{
    public $wingspans;

    public function __construct($name, $cry, $type, $meat, $wingspans){
      parent::__construct($name, $cry, $type, $meat);
      $this->wingspans = $wingspans;
    }

    public function getWingspans(){
      return $this->wingspans;
    }

    public function setWingspans($wingspans){
      $this->wingspans = $wingspans;
    }
  }

 ?>
