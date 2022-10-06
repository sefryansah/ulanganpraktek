<?php

class SuperClass{
    public $name;
    public $level;
    public $is_status;
    public static $index;

    public function __construct($name, $level, $is_status)
    {
        $this->name = $name;
        $this->level = $level;
        $this->is_status = $is_status;
        self::$index = 1;
    }

    public function getName(){
        return $this->name;
    }
    
    public function getLevel(){
        return $this->level;
    }

    public function getStatus(){
        return $this->is_status;
    }

    public function display(){
        echo 'No. ' . self::$index++ . '<br>';
        echo 'Nama: ' . $this->getName() . '<br>';
        echo 'Level: ' . $this->getLevel() . '<br>';
        if ($this->getStatus() == false) {
            echo 'Status: ' . $this->getStatus() . '<br>';
        }else{
            echo 'Status: ' . $this->getStatus() . '<br>';   
        }
    }
}

class ChildClass extends SuperClass{
    public $jabatan;

    public function __construct($name, $level, $is_status, $jabatan = 'Pewarisan')
    {
        parent::__construct($name, $level, $is_status);
        $this->name = $name;
        $this->level = $level;  
        $this->jabatan = $jabatan;
    }

    public function getJabatan() :string{
        return $this->jabatan;
    }

    public function getAllDisplay(){
        $this->display() . '<br>';
        echo 'Jabatan: ' . $this->getJabatan();
    }
}

$SuperClass = new SuperClass('SuperClass', 'easy', false);
$ChildClass = new ChildClass('SubClass', 'medium', true);
echo $SuperClass->display();
echo '<hr>';
echo $ChildClass->getAllDisplay();
echo '<hr>';
echo $ChildClass->getAllDisplay();
/* Output: 
 No. 1
Nama: SuperClass
Level: easy
Status:
No. 2
Nama: SubClass
Level: medium
Status: 1
Jabatan: Pewarisan
No. 3
Nama: SubClass
Level: medium
Status: 1
Jabatan: Pewarisan
*/