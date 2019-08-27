<?php
   class Zoo{
    private  $animaux = array();
    private $name;
    private $nbplaces;
    private $coutTotal=0;
     function __construct($name,$nbplaces){

       $this->name=$name;
       $this->nbplaces=$nbplaces;
     }

     public function setName($name){
       $this->name=$name;
     }
     public function getName(){
       return $this->name=$name;
     }
     public function setNbplaces($nbplaces){
       $this->nbplaces=$nbplaces;
     }
     public function getNbplaces(){
       return $this->nbplaces=$nbplaces;
     }
     public function ajouter($newAnimal){

    if (count($this->animaux)<$this->nbplaces){
      $this->animaux[]=$newAnimal;
      $cout=$this->coutTotal = $this->coutTotal + $newAnimal;
      echo "<br>";
      echo "Le cout total pour le Zoo est de:".round($this->coutTotal, 2)." euros";
      echo "<br>";
      echo "Il y a ".count($this->animaux)." animaux dans le zoo.";
      echo "<br>";
    } else {
      echo "Le zoo est plein !!!";
    }
  }

  public function supprimer($newAnimal){
      unset($this->animaux[array_search($newAnimal, $this->animaux)]);
      array_values($this->animaux);
      $cout=$this->coutTotal = $this->coutTotal - $newAnimal;
      echo "<br>";
      echo "Le cout total pour le Zoo est de:".round($cout, 2)." euros";
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
