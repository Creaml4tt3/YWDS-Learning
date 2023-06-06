<?php
### 2.สร้าง Class ชื่อ Rectangle ที่มี property คือ width และ height และมี method ชื่อว่า getArea() 
// ที่คืนค่าพื้นที่ของสี่เหลี่ยมผืนผ้า

// - Rectangle.getArea()

class Rectangle {
    public $width,$height;
    function setArea($width,$height){
        $this->width = $width;
        $this->height = $height;
    }
    function getArea(){
        return "area: ".$this->width*$this->height." sqm";
    }
}

$a = new Rectangle();
$a->setArea(2,3);
echo $a->getArea();
?>