<?php
  require_once('Carnivore.php');
  /**
   *
   */
  class Tigre extends Carnivore
  {
    private $stripe;
    function __construct($nom,$type,$cri,$weight,$stripe)
    {
      parent::__construct($nom,$type,$cri,$weight);
      $this->stripe= $stripe;
    }
    public function __toString(){
    return  $this->name." est un ".$this->type." qui a comme cri le ".$this->cri." et qui coute ".$this->calcul($this->weight)." € par jour et qui a ".$this->stripe." rayures";
    }
  }

  ?>
