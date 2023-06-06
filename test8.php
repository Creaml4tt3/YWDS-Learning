<?php
### 8.ให้สร้าง Array ของคำนำหน้าชื่อ 3 ชนิด และ Array ของชื่อ 3 ชนิด และนำมารวมกันเป็นชื่อเต็มและแสดงผลลัพธ์

$array1 = array("Mr.", "Ms.", "Dr.");
$array2 = array("John", "Jane", "David");

$array3 = array();

for ($i=0; $i<count($array1); $i++){
    for ($j=0; $j<count($array2); $j++){
        $a = $array1[$i].$array2[$j];
        array_push($array3,$a);
    }
}
for ($i=0; $i<count($array3); $i++){
    echo $array3[$i],'&nbsp;';
}

?>