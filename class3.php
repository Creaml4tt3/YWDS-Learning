<?php
### 3.สร้าง Class ชื่อ Employee ที่สืบทอดคุณสมบัติจาก Class Person 
// โดยมี property เพิ่มเติมอีก 2 ตัวคือ position และ salary และมี method ชื่อว่า getSalary() 
// ที่คืนค่าเงินเดือนของพนักงาน

// - Employee.getSalary()

class Person {
    // Properties
    public $name,$age,$gender;
    // Methods
    function introduceset($name,$age,$gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    function introduce() {
      return "Hello, my name is ".$this->name.", I am ".$this->age." years old and I am a ".$this->gender.".";
    }
}

class Employee extends Person  {
    public $position,$salary;
    function setSalary($position,$salary){
        $this->position = $position;
        $this->salary = $salary;
    }
    function getSalary(){
        return $this->salary;
    }
}
$b = new Employee();
$b->setSalary('dev',20000);
echo $b->getSalary();
?>