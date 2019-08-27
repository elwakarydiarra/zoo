<?php
  /**
   *
   */
   require_once('Animal.php');
  class Carnivore extends Animal
  {


      public function calcul($weight){
        return ($this->weight * 10)^2 + 100;

    }

    public function __toString(){
    return  $this->name." est un ".$this->type." qui a comme cri le ".$this->cri." et qui coute ".round($this->calcul($this->weight),2)." € par jour";
    }
  }


  ?>
