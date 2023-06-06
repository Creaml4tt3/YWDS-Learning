<?php
### 3.สร้างฟังก์ชั่นรับค่าวันเกิด แล้วให้คำนวณจำนวนวันตั้งแต่วันที่ระบุจนถึงวันที่ปัจจุบัน

function calulateDays($a){
    // $b = date("d-m-Y");
    $a = date_create($a);
    $b = date_create(date("d-m-Y"));
    $diff=date_diff($a,$b);
    return $diff->format("%a วัน");
}
echo calulateDays("20-06-2000")
?>