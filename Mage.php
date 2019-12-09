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
    
    public function attackobject($Personnage)
    {
        $damage= $Personnage->defobject($Personnage->getForce());
        $Personnage->sethp()-$damage;
        $Personnage->setatck()-30;
    }

    public function defobject($force)
    {
        $finalhp = $this->defense -= $force;
        return $finalhp-= $force;
    }

    public function getForce()
    {
       return $this->atck;
    }

    public function setatck($newatck)
    {
        return $this->atck=$newatck;
    }

    public function sethp($newhp)
    {
        return $this->hp=$newhp;
    }

    public function setdefense($newdefense)
    {
        $this->defense=$newdefense;
    }

    public function displayhp()
    {
        echo $this->hp;
    }











}







?>