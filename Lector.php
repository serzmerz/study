<?php
class Lector{
    private $name;
    private $age;
    private $groupList=array();
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
    public function __construct($name,$age)
    {
        $this->setName($name);
        $this->setAge($age);
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }

    public function addGroup($group){
        $this->groupList[]=$group;
    }
    public function getGroup(){
        return $this->groupList;
    }
}