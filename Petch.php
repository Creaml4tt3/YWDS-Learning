<?php
/* PHP TEST - Array */
echo "[1]" . "<br>";

$city = array("Bangkok", "Tokyo", "New York", "Beijing", "Seoul");
foreach ($city as $showcity) {
    echo $showcity . "<br>";
}

echo "<br>";
/* ------------------ FINISH 1 ------------------ */
echo "[2]" . "<br>";

$number = array("5", "6", "7", "8", "9");
$sum = array_sum($number);
echo "Sum : $sum";

echo "<br> <br>";
/* ------------------ FINISH 2 ------------------ */
echo "[3]" . "<br>";

$numbers = range(11, 20);
$Evennumbers = [];

foreach ($numbers as $shownumber) {
    if ($shownumber % 2 === 0) {
        $Evennumbers[] = $shownumber;  
    }  
}

print_r ($Evennumbers);

echo "<br> <br>";
/* ------------------ FINISH 3 ------------------ */
echo "[4]" . "<br>";

$users = array("John", "Jane", "David", "Alex", "Marry");

foreach ($users as $nickname) {
    if (strpos($nickname, "a") !== false) {
        echo $nickname . "<br>";
    }
}

echo "<br>";
/* ------------------ FINISH 4 ------------------ */
echo "[5]" . "<br>";

$products = array('Product A', 'Product B', 'Product C', 'Product D', 'Product E');
$prices = array(10, 20, 30, 40, 50);

for ($i = 0; $i < count($products); $i++) {
    echo $products[$i] . ' : ' . $prices[$i] . '<br>';
}

echo "<br>";
/* ------------------ FINISH 5 ------------------ */
echo "[6]" . "<br>";

$num = array(5, 10, 15, 20, 25, 30, 35, 40, 45, 50); //10 ตัว
$min = $num[0];
$max = $num[0];

for ($i = 1; $i < count($num); $i++) {
    if ($num[$i] < $min) {
      $min = $num[$i];
    }
  
    if ($num[$i] > $max) {
      $max = $num[$i];
    }
  }

echo "Minimum number is : " . $min . "<br>";
echo "Maximum number is : " . $max;

echo "<br> <br>";
/* ------------------ FINISH 6 ------------------ */
echo "[7]" . "<br>";

$nums = array(1, 2, 3, 4, 5);

echo "ค่าใน Array ก่อนสลับตำแหน่ง" . "<br>";
print_r($nums);
echo "<br> <br>";


$new = $nums[0]; // $new = 1
$nums[0] = $nums[count($nums) - 1]; //สลับ 1 เป็น 5
echo "<br>";
$nums[count($nums) - 1] = $new; // สลับ 5 เป็น 1

echo "ค่าใน Array หลังสลับตำแหน่ง" . "<br>";
print_r($nums);

echo "<br> <br>";
/* ------------------ FINISH 7 ------------------ */
echo "[8]" . "<br>";


$prefixes = array("Mr.", "Ms.", "Dr.");
$names = array("John", "Jane", "David");
$count = 0;

foreach ($prefixes as $pref) {
    foreach ($names as $name) {
        echo $pref . ' ' . $name . "<br>";
        $count++;
        if ($count == 3) {
            break 2; // เบรค foreach ทั้ง 2 ลูป
        }
    }
}

echo "<br>";
/* ------------------ FINISH 8 ------------------ */

/* PHP TEST - Function */
$crossline = str_repeat("-", 80);
echo $crossline . "<br>";

echo "[1]" . "<br>";

echo "A = 5" . "<br>";
echo "B = 2" . "<br>";
echo "A x B = ";

function sum($A, $B) {
    $multiply = $A * $B;
    return $multiply;   
}

echo sum(5, 2);

echo "<br> <br>";
/* ------------------ FINISH 1 ------------------ */
echo "[2]" . "<br>";

function TH_date($date) {
    $TH_month = array(
      "", "มกราคม", "กุมภาพันธ์", "มีนาคม",
      "เมษายน", "พฤษภาคม", "มิถุนายน",
      "กรกฎาคม", "สิงหาคม", "กันยายน",
      "ตุลาคม", "พฤศจิกายน", "ธันวาคม"
    );
    
    $day = date('j', strtotime($date));
    $month = $TH_month[date('n', strtotime($date))];
    $year = date('Y', strtotime($date)) + 543; // ทำเป็นปี พ.ศ.โดย +543
  
    return "$day $month $year";
  }

$date = "2000-06-20"; // รูปแบบวันที่ที่รับเข้า : YYYY-MM-DD
echo TH_date($date); // 20 มิถุนายน 2543
  
echo "<br> <br>";
/* ------------------ FINISH 2 ------------------ */
echo "[3]" . "<br>";

function result($birthday) {
    $today = time(); // วันที่ปัจจุบัน
    $birthdate_timestamp = strtotime($birthday); // แปลงวันเกิดเป็น timestamp (ใช้ strtotime แปลง string เป็น time)
    $birth_To_today = (int) ((($today - $birthdate_timestamp) / 86400)); //  หาจำนวนวัน ตั้งแต่วันที่เกิดถึงวันที่ปัจจุบัน (1 วัน มี 86400 วินาที)
    return $birth_To_today;
}

$birthday = '2000-06-20'; // รูปแบบวันที่ที่รับเข้า : YYYY-MM-DD
$birth_To_today = result($birthday);
echo "จากวันเกิดจนถึงวันนี้ผ่านมาแล้ว " . $birth_To_today . " วัน";

echo "<br> <br>";
/* ------------------ FINISH 3 ------------------ */
echo "[4]" . "<br>";
//ฟังก์ชั่นรับชื่อและนามสกุลแล้วทำการแปลงให้ชื่อเป็นตัวพิมพ์ใหญ่ทั้งหมด ส่วนนามสกุลเป็นตัวพิมพ์เล็กทั้งหมด

function getFullname ($myname, $mylastname) {

    $firstName = strtoupper($myname); // แปลงชื่อจริงเป็นตัวพิมพ์ใหญ่ 
    $lastName = strtolower($mylastname); // แปลงนามสกุลเป็นตัวพิมพ์เล็ก
    $formattedName = $firstName . " " . $lastName; // รวมชื่อจริงและนามสกุล
    return $formattedName;
}

$myname = "Pichapatch";
$mylastname = "Sa-nguanklang";
echo getFullname($myname, $mylastname);

echo "<br> <br>";
/* ------------------ FINISH 4 ------------------ */

/* PHP TEST - OOP */
$crossline = str_repeat("-", 80);
echo $crossline . "<br>";

echo "[1]" . "<br>";
class Person {
    public $name;
    public $age;
    public $gender;
  
    public function introduce() {
      echo "Hello, my name is $this->name, I am $this->age years old and I am a $this->gender.";
    }
}
  
// เรียกใช้งาน 
$person = new Person();
$person->name = "John";
$person->age = 28;
$person->gender = "male";

$person->introduce();

echo "<br> <br>";
/* ------------------ FINISH 1 ------------------ */
echo "[2]" . "<br>";

class Rectangle {
    public $width;
    public $height;
  
    public function getArea() {
        return $this->width * $this->height;

    }
}
  
// เรียกใช้งาน 
$rec = new Rectangle();
$rec->width = 20;
$rec->height = 3;

echo $rec->getArea();

echo "<br> <br>";
/* ------------------ FINISH 2 ------------------ */
echo "[3]" . "<br>";
class Employee extends Person {
    public $position;
    public $salary;

    public function getSalary() {
      echo "<br>" . "Salary : $this->salary";
      
    }
}
  
// เรียกใช้งาน 
$employee = new Employee();
$employee->salary = 500000;

$person->introduce();
$employee->getSalary();
/* ------------------ FINISH 3 ------------------ */
















