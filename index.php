<?php
/**
 * Created by PhpStorm.
 * User: serz
 * Date: 12.01.17
 * Time: 0:25
 */
require('Student.php');
require('Group.php');
require('Lector.php');
$student1 = new Student("Ivan",32,"Informatika");
$student2 = new Student("Sergey",18,"Informatika");
$student3 = new Student("Ryslan",24,"Informatika");
$student4 = new Student("Vitaliy",19,"Informatika");
$student5 = new Student("Oleksandr",20,"Informatika");
$group1 = new Group();
$group1->addStudent($student1);
$group1->addStudent($student2);
$group1->addStudent($student3);
$group1->addStudent($student4);
$group1->addStudent($student5);

$group2 = new Group();
$group2->addStudent($student5);
$group2->addStudent($student4);
$group2->addStudent($student3);
$group2->addStudent($student2);
$group2->addStudent($student1);

$lector1 = new Lector("Anatolii",30);
$lector1->addGroup($group1);
$lector1->addGroup($group2);
foreach ($lector1->getGroup() as $item) {
    echo "Group:<br>";
    foreach ($item->getStudent() as $value){
        $value->getStudent();echo '<br>';
    }
    echo '<br>';
}
