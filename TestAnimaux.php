<?php
require_once('Carnivore.php');
require_once('Vegetarien.php');
require_once('Tigre.php');
 $cheta=new Vegetarien('cheta','Chimpanzé','hurlement',3);
 $ann=new Vegetarien ('ann','Autruche',' beuglement',5);
 $aigle=new Carnivore('loga','Aigle','sifflement',1);
 $orque=new Carnivore('dominos','Orque','sifflement',70);
 $tigre1=new Carnivore('lofo','Tigre du Bengale','feulement',4,10);
  $tigre1=new Carnivore('cario','Tigre Blanc','feulement',4,24);
 echo $cheta."<br>";
 echo $aigle."<br>";
 echo $orque;

  ?>
