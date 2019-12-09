<?php

class Guerrier
{
    private $hp;
    private $atck;
    private $defense;


    public function __construct($newhp,$newatck,$newdefense)
    {
        $this->hp=$newhp;
        $this->atck=$newatck;
        $this->defense=$newdefense;
    }
    
    public function attackobject($Mage)
    {
         
        $Mage->loosehp($Mage->defobject($this->atck)); //les dégâts que l'on va faire déduits de la défense de l'objet attaqué

    }

    public function defobject($force)
    {
        if($force>$this->defense)
        {
            $finalhp = $force- $this->defense;
        }

        if($force<$this->defense)
        {
            $finalhp = 0;
        }
        
        return $finalhp;
    }

    public function getForce()
    {
       //echo "l'attaque du Guerrier vaut désormais ".$this->atck;
       return $this->atck;
    }

    public function setatck($newatck)
    {
         $this->atck=$newatck;
       
    }

    public function setatckapresreduction($reductiondelatck)
    {
        $this->atck-=$reductiondelatck;
        echo "l'attaque du Guerrier vaut désormais ".$this->atck;
    }

    public function sethp($newhp)
    {
        $this->hp=$newhp;
    }

    public function setdefense($newdefense)
    {
        $this->defense=$newdefense;
    }

    public function displayhp()
    {
        echo '<p> la vie du guerrier est de '.$this->hp.'pv </p>';
    }

    public function loosehp($damage)
    {
       if($damage>0)
       {
            echo "le Guerrier perd ".$damage." pv ";
       }
       else
       {
           echo "La défense du Guerrier absorbe les dégâts !";
       }
      
        $this->hp -= $damage;
    }







}







?>