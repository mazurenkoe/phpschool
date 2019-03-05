<?php

class User
{
    public $firstname;
    public $lastname;

    public function getName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }

}

// создаем объект класса
$user = new User;
$user->firstname
