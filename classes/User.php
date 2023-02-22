<?php 

class User {

    private $name, $surname;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getFullname()
    {
        return $this->name . " " . $this->surname;
    }

}