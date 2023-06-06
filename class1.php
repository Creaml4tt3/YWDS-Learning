<?php
### 1.สร้าง Class ชื่อ Person ที่มี property คือ name, age และ gender 
// และมี method ชื่อว่า introduce() ที่ใช้สำหรับแนะนำตัวเอง โดยแสดงข้อความว่า 
// "Hello, my name is [name], I am [age] years old and I am a [gender]."
// - Person.introduce()
//   EX. Hello, my name is [name], I am [age] years old and I am a [gender]

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

$a = new Person();
$a->introduceset('kukkai',22,'boy');
echo $a->introduce();


?>