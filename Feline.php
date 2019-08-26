<?php
  include("Carnivorous.php");
  /**
   *
   */
  class Feline extends Carnivorous{
    public $scratch;

    public function __construct($name, $cry, $type, $meat, $scratch){
      parent::__construct($name, $cry, $type, $meat);
      $this->scratch = $scratch;
    }

    public function getScratch(){
      return $this->scratch;
    }

    public function setScratch($scratch){
      $this->scratch = $scratch;
    }
  }

 ?>
