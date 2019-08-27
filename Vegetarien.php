<?php
  /**
   *
   */
   require_once('Animal.php');
  class Vegetarien extends Animal
  {

    function __construct($name,$type,$cri,$weight)
    {
       parent::__construct ($name,$type,$cri,$weight);
    }


    public function calcul($weight){
    return  $amount= 1.2 * log10(($this->weight + 5) * 2 + 1);

    }
    public function __toString(){
    return  $this->name." est un ".$this->type." qui a comme cri le ".$this->cri ." et qui coute ".round($this->calcul($this->weight),2)." € par jour";
    }
  }

  ?>
