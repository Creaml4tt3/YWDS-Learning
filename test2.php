<?php
#2.สร้าง array ที่มีตัวเลขเรียงจากน้อยไปมาก 5 ตัว และหาผลรวมของตัวเลขทั้งหมด ใช้ function array_sum()

$array1 = array(20, 10, 15, 5, 25);
sort($array1);
echo 'sort:';
for ($i=0; $i<count($array1); $i++) {
    echo $array1[$i],'&nbsp;';
}
echo 'sum:',array_sum($array1)

?>