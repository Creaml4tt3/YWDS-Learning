<?php
### 4.สร้างฟังก์ชั่นรับชื่อและนามสกุลแล้วทำการแปลงให้ชื่อเป็นตัวพิมพ์ใหญ่ทั้งหมด ส่วนนามสกุลเป็นตัวพิมพ์เล็กทั้งหมด

function changeName($name,$lastname){

    return strtoupper($name).'&nbsp;'.strtolower($lastname);
}
echo changeName( "Thitipong" , "Manajit" );

?>