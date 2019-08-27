<?php
  require_once('Zoo.php');
  require_once('Carnivore.php');
  require_once('Tigre.php');
  require_once('Vegetarien.php');

  $NewZoo = new Zoo("MonZoo", 5);
echo "<br>";
$grandaigle = new Carnivore("Grandaigle", "aigle", "sifflement", 1 , 205);
echo $grandaigle;
$NewZoo->ajouter($grandaigle);
echo "<br>";
$Cheeta= new Vegetarien("cheeta", "Chimpanzé", "hurlement",3);
echo $Cheeta;
$NewZoo->ajouter($Cheeta);
echo "<br>";
$Ann= new Vegetarien("Ann", "Autruche", "beuglement",5);
echo $Ann;
$NewZoo->ajouter($Ann);
echo "<br>";
echo "<br>";
$Fantome= new Tigre("fantome", "Tigre du bengale", "feulement",4, 10);
echo $Fantome;
$NewZoo->ajouter($Fantome);
echo "<br>";
echo "<br>";
$Azog= new Carnivore("Azog", "orque", "sifflement",70);
echo $Azog;
$NewZoo->ajouter($Azog);
echo "<br>";
// $NewZoo->supprimer($Ann);
// echo "<br>";
echo "<br>";
$NewZoo->inventaire();
 ?>
