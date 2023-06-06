<?php
### 5.สร้าง array ที่มีชื่อสินค้า 5 ชื่อและราคาสินค้าที่เก็บไว้ในอาร์เรย์อื่น ๆ และแสดงผลชื่อสินค้าและราคาทั้งหมด
$product = array('Product A', 'Product B', 'Product C', 'Product D', 'Product E');
$price = array(10, 20, 30, 40, 50);
for ($i=0; $i<count($product); $i++) {
    echo $product[$i],':&nbsp;';
    echo $price[$i],'&nbsp;';
}

?>