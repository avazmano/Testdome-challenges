<?php
interface Bird
{
    public function layEgg();
}

class Chicken
{

}

class Egg
{
    public function __construct($birdType)
    {

    }

    public function hatch()
    {
        return NULL;
    }
}