<?php
interface Bird
{
    public function layEgg();
}

class Chicken extends Egg implements Bird
{
    public function layEgg(){
        $this->hatch();
    }
}

class Egg
{
    public function __construct($birdType)
    {
        $this->hatched = 0;
        $this->birdType = $birdType;
    }

    public function hatch()
    {
        if($this->hatched >= 1){
            throw new Exception('error');
        }
        $this->hatched++;
        return NULL;
    }
}

$chicken = new Chicken();