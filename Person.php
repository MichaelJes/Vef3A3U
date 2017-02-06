<?php

/**
 * Created by PhpStorm.
 * User: micha
 * Date: 1/27/2017
 * Time: 9:38 AM
 */
class Person
{
    public $name;
    public function showName()
    {
        echo $this->name;
    }

    public function enterName()
    {
        //insert name into database
    }
}