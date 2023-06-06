<?php

### 7.ให้เขียนรับ Array ของตัวเลขเข้ามา และสลับค่าของตำแหน่งแรกและตำแหน่งสุดท้ายใน Array
error_reporting(0);
echo '<label>ใส่จำนวนเต็มเช่น 1,2,3,4</label>
<form method="post" action="', $_SERVER['PHP_SELF'],'">
    <input type="text" id="num1" name="num1">
    <input type="submit">
    </form>';

$num1 = $_POST['num1'];
$num1_arr = preg_split ("/\,/", $num1);     
$num2_arr = array();
array_push($num2_arr,intval(end($num1_arr)));

for ($i=1; $i<(count($num1_arr)-1); $i++) {
    array_push($num2_arr,intval($num1_arr[$i]));
  }
array_push($num2_arr,intval($num1_arr[0]));

echo 'before: ';
for ($i=0; $i<count($num1_arr); $i++) {
    echo $num1_arr[$i],'&nbsp;';
}
echo 'after: ';
for ($i=0; $i<count($num2_arr); $i++) {
    echo $num2_arr[$i],'&nbsp;';
}
// - 1, 2, 3, 4, 5
// - แสดงค่าด้วย function print_r();
// - แสดงค่าทั้ง ก่อนสลับคำ และหลังสลับคำ
// - Hint count()

?>