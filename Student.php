<?php
require_once ('Person.php');
class Student extends Person {
    private $speciality;
    public function __construct($name,$age,$speciality)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->speciality=$speciality;
    }

    public function getSpeciality(){
        return $this->speciality;
    }
    public function getStudent(){
        echo "Name: ".$this->getName()." Age: ".$this->getAge()." Speciality: ".$this->getSpeciality();

}

}