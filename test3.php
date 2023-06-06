<?php
### 3.สร้าง array ที่มีเลขจำนวนเต็ม 10 ตัวและแสดงผลตัวเลขที่เป็นเลขคู่
$array1 = array(20, 10, 15, 5, 25, 19 ,13, 32, 40, 13);
$array2 = array();
for ($i=0; $i<count($array1); $i++) {
    if ($array1[$i]>9){
        if ($array1[$i]%2 == 0){
            array_push($array2,$array1[$i]);
        }
    }
}

for ($i=0; $i<count($array2); $i++) {
    echo $array2[$i],'&nbsp;';
}

?>