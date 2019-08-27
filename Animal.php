<?php
/**
 *
 */
abstract class Animal
{
  protected $name;
  protected $type;
  protected $cri;
  protected $weight;

  function __construct($name,$type,$cri,$weight)
  {
    $this->name=$name;
    $this->type=$type;
    $this->cri=$cri;
    $this->weight=$weight;
  }
  abstract public function calcul(int $weight);
    public function setNom($name){
      $this->name = $name;
    }

    public function setCri($cri){
      $this->cri = $cri;
    }
    public function setType($type){
      $this->type=$type;
    }
    public function setWeight($weight){
      $this->weight = $weight;
    }
    public function getName(){
      return $this->name=$name;
    }
    public function getType(){
      return $this->type=$type;
    }
    public function getCri(){
      return $this->cri=$cri;
    }
    public function getWeight(){
      return $this->weight=$weight;
    }
}


 ?>
