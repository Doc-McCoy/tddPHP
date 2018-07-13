<?php

namespace Example;

class User
{
    public function __construct($name, $lastName)
    {
        $this->name     = $name;
        $this->lastName = $lastName;
    }
    
    public function getCompleteName()
    {
        return $this->getName() . " " .  $this->getLastName();
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLastName()
    {
        return $this->lastName;
    }
}