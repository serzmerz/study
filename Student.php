<?php
class Student {
    private $speciality;
    private $name;
    private $age;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
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