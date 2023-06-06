<?php
### 4.สร้าง array ที่มีชื่อคน 5 คนและแสดงผลชื่อทั้งหมดที่มีตัวอักษร 'a' อยู่ในชื่อ ด้วยคำสั่ง strpos
$array1 = array('John', 'Jane', 'David', 'Alex', 'Marry');
$array2 = array();
for ($i=0; $i<count($array1); $i++) {
    if (strpos($array1[$i],'a')>0){
        array_push($array2,$array1[$i]);
    }

}
for ($i=0; $i<count($array2); $i++) {
    echo $array2[$i],'&nbsp;';
}
?>