<?php

  require("Bird.php");
  require("Herbivorus.php");


  $eagle = new Bird('Grandaigle', 'sifflement', 'aigle', 1, 2);
  $chimp = new Herbivorous('Cheeta', 'hurlement', 'chimpanzee', 3);
var_dump($eagle->getName()." est un ". $eagle->getType()." qui a pour cri le ". $eagle->getCry()." et a une envergure de ".$eagle->getWingspans(). " mètres. Il mange " . $eagle->getMeat() ." kilo de viande par jour et cela coûtera ".$eagle->costMeat(1)." €/jour.");
echo "<br>";

var_dump($chimp->getName()." est un ". $chimp->getType()." qui a pour cri le ". $chimp->getCry()." . Il mange " . $chimp->getFruits() ." kilos de fruits par jour et cela coûtera ". $chimp->costFruits(3)." €/jour.");
echo "<br>";


 ?>
