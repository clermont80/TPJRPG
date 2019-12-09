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
    
    public function attackobject($Personnage)
    {
        $damage= $Personnage->defobject()-$this->atck;
        $Personnage->sethp()-$damage;
    }

    public function defobject($force)
    {
        $finalhp = $this->defense -= $force;
        return $finalhp - $force;
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
        $this->hp=$newhp;
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