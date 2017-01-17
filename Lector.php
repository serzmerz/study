<?php
require_once ('Person.php');
class Lector extends Person{
    private $groupList=array();
    public function __construct($name,$age)
    {
        $this->setName($name);
        $this->setAge($age);
    }
    public function addGroup($group){
        $this->groupList[]=$group;
    }
    public function getGroup(){
        return $this->groupList;
    }
}