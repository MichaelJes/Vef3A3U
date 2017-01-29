<?php

/**
 * Created by PhpStorm.
 * User: Michael
 * Date: 29/01/2017
 * Time: 14:49
 */
class Person
{

    public $name;
    public  $age;
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