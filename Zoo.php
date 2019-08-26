<?php

/**
 *
 */
class Zoo{
  protected $animal[];
  protected $nameZoo;
  protected $place;

  protected function __construct($nameZoo, $place){
    $this->nameZoo;
    $this->place;
  }

  public function setNameZoo($nameZoo){
    $this->nameZoo = $nameZoo;
  }

  public function getNameZoo(){
    return $this->nameZoo;
  }

  public function setAnimal($animal){
    $this->animal = $animal;
  }

  public function getAnimal(){
    return $this->animal
  }

  public function setPlace($place){
    $this->place = $place;
  }

  public function getPlace(){
    return $this->place;
  }

  public function addAnimal($newAnimal){
    $animal[] = $newAnimal;
  }

  public function deleteAnimal(){

  }

  public  function countAnimal(){

  }

  public function numberAnimal(){

  }

  public function displayZoo(){

  }
  public function ajouter($newAnimal){
   if (count($this->animaux)<$this->placeZoo){
     $this->animaux[]=$newAnimal;
     echo "<br>";
     echo "Le cout total pour le Zoo est de:".($this->coutTotal = $this->coutTotal + $newAnimal->cout())." euros";
     echo "<br>";
     echo "Il y a ".count($this->animaux)." animaux dans le zoo.";
     echo "<br>";
   } else {
     echo "Le zoo est plein !!!";
   }
 }
 public function supprimer($newAnimal){
     unset($this->animaux[array_search($newAnimal, $this->animaux)]);
     echo "<br>";
     echo "Le cout total pour le Zoo est de:".($this->coutTotal = $this->coutTotal - $newAnimal->cout())." euros";
     echo "<br>";
     echo "Il y a ".count($this->animaux)." animaux dans le zoo.";
     echo "<br>";
 }
 public function inventaire(){
   echo "Inventaire du Zoo:";
   echo "<br>";
   echo implode("<br> ", $this->animaux);
 }

}
 ?>
<!-- $hippo = new Herbivorous;
 $zoo-> add animal($hippo); -->
