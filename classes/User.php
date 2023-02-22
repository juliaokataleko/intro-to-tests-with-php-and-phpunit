<?php 

class User {

    private $name, $surname;
    private $age;

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

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge($str = false)
    {
        if($str) return $this->age . " years old";
        return $this->age;
    }

}