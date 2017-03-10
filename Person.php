<?php

/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: micha
 * Date: 1/27/2017
 * Time: 9:38 AM
 */
class Person
{
    public $name;
    public  $age;
    public function showName()
    {
        echo $this->name;
    }

    public function enterName()
    {
        //insert name into database
    }


    public function __construct($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        if ($age > 120)
        {
            throw new Exception("Þú ert of gamall");
        }
        $this->age = $age;
    }
    public function getAgeInDays()
    {
        return $this->age * 365;
    }
}