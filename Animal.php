<?php

  class Animal{
    public $name;
    public $cry;
    public $type;

    public function __construct($name, $cry, $type){
      $this->name = $name;
      $this->cry = $cry;
      $this->type = $type;
    }

    public function setName($name){
      $this->name = $name;
    }

    public function getName(){
      return $this->name;
    }

    public function setCry($cry){
      $this->cry = $cry;
    }

    public function getCry(){
      return $this->cry;
    }

    public function setType($type){
      $this->type = $type;
    }

    public function getType(){
      return $this->type;
    }
  }


 ?>
