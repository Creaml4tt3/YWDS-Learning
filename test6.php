<?php
error_reporting(0);
echo '<label>ใส่จำนวนเต็มเช่น 1,2,3,4</label>
<form method="post" action="', $_SERVER['PHP_SELF'],'">
    <input type="text" id="num1" name="num1">
    <input type="submit">
    </form>';
### 6.ให้เขียนรับค่าจำนวนเต็มเข้ามาเป็น Array และหาค่าสูงสุดและต่ำสุดของ Array นี้ โดยไม่ใช้ฟังก์ชั่น array_max และ array_min
$num1 = $_POST['num1'];
$num1_arr = preg_split ("/\,/", $num1); 
$max = 0;
for ($i=0; $i<count($num1_arr); $i++) {
  if (intval($num1_arr[$i])>$max){
    $max = intval($num1_arr[$i]);
  }
}
$min = $max;
for ($i=0; $i<count($num1_arr); $i++) {
  if (intval($num1_arr[$i])<$min){
    $min = intval($num1_arr[$i]);
  }
}
echo 'max: ',$max,' min: ',$min;
// - 20, 10, 15, 5, 25, 19 ,13, 32, 40, 13

?>