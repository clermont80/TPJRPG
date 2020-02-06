<?php

class Mage
{
    private $hp;
    private $atck;
    private $defense;


    public function __construct($newhp,$newatck,$newdefense)
    {
        $this->atck=$newatck;
        $this->hp=$newhp;
        $this->defense=$newdefense;
    }
    
    public function attackobject($Guerrier)
    {
        $Guerrier->loosehp($Guerrier->defobject($this->atck));
        $valeur= $Guerrier->getForce();
        echo $valeur;
        $Guerrier->setatckapresreduction(30);
        
    }

    public function defobject($force)
    {
        $finalhp = $force- $this->defense;
        return $finalhp;
    }

    public function getForce()
    {
       return $this->atck;
    }

    public function setatck($newatck)
    {
         $this->atck=$newatck;
    }

    public function sethp($newhp)
    {
        return $this->hp=$newhp;
    }

    public function loosehp($damage)
    {
        echo "le Mage perd ".$damage." pv ";
        $this->hp -= $damage;
    }

    public function sendhp()
    {
        return $this->hp;
    }

    public function setdefense($newdefense)
    {
        $this->defense=$newdefense;
    }

    public function displayhp()
    {
        echo '<p> la vie du mage est de '.$this->hp.'pv </p>';
    }











}







?>