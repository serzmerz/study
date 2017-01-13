<?php
/**
 * Created by PhpStorm.
 * User: serz
 * Date: 12.01.17
 * Time: 0:07
 */
class Group {
    private $studentList=array();
    public function addStudent($student){
        $this->studentList[]=$student;
    }
    public function getStudent(){
        return $this->studentList;
    }
}