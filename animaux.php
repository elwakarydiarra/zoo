<?php
/**
 *
 */
abstract class Animaux
{
  protected $name;
  protected $cri;
  protected $weight;

  function __construct($Name,$Cri,$Weight)
  {
    $this->setName($Name);
    $this->setCri($Cri);
    $this->setWeight($Weight);
  }
  abstract public function calcul(int $weight);
    public function setNom($name){
      $this->name = $name;
    }

    public function setCri($cri){
      $this->cri = $cri;
    }
    public function setWeight($weight){
      $this->weight = $weight;
    }
    public function getName(){
      return $this->name=$name;
    }

    public function getCri(){
      return $this->cri=$cri;
    }
    public function getWeight(){
      return $this->weight=$weight;
    }
}


 ?>
