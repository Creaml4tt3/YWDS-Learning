# Yes Learning

# 🚫☠️🚫 NO CHATGPT 🚫☠️🚫

Project Repository สำหรับให้ทีม Dev ของ Yes ได้หัด เรียนรู้การเขียนโปรแกรมมิ่ง เบื้องต้น

# PHP

## แบบฝึกหัด PHP เกี่ยวกับ Array

### 1.สร้าง array ที่มีชื่อเมือง 5 เมือง และแสดงผลทั้งหมด

- 'Tokyo' ,'Bangkok', 'Paris', 'London', 'New York'

### 2.สร้าง array ที่มีตัวเลขเรียงจากน้อยไปมาก 5 ตัว และหาผลรวมของตัวเลขทั้งหมด ใช้ function array_sum()

- 20, 10, 15, 5, 25

```
  EX. sort: 5 10 15 20 25 sum: 75
```

### 3.สร้าง array ที่มีเลขจำนวนเต็ม 10 ตัวและแสดงผลตัวเลขที่เป็นเลขคู่

- 20, 10, 15, 5, 25, 19 ,13, 32, 40, 13

```
  EX. 20 10 32 40
```

### 4.สร้าง array ที่มีชื่อคน 5 คนและแสดงผลชื่อทั้งหมดที่มีตัวอักษร 'a' อยู่ในชื่อ ด้วยคำสั่ง strpos

- 'John', 'Jane', 'David', 'Alex', 'Marry'

```
  EX. Jane David
```

### 5.สร้าง array ที่มีชื่อสินค้า 5 ชื่อและราคาสินค้าที่เก็บไว้ในอาร์เรย์อื่น ๆ และแสดงผลชื่อสินค้าและราคาทั้งหมด

- 'Product A', 'Product B', 'Product C', 'Product D', 'Product E'
- 10, 20, 30, 40, 50

```
  EX. Product A: 10 Product B: 20 Product C: 30 Product D: 40 Product E: 50
```

### 6.ให้เขียนรับค่าจำนวนเต็มเข้ามาเป็น Array และหาค่าสูงสุดและต่ำสุดของ Array นี้ โดยไม่ใช้ฟังก์ชั่น array_max และ array_min

- 20, 10, 15, 5, 25, 19 ,13, 32, 40, 13

```
  EX. max: 40 min: 5
```

### 7.ให้เขียนรับ Array ของตัวเลขเข้ามา และสลับค่าของตำแหน่งแรกและตำแหน่งสุดท้ายใน Array

- 1, 2, 3, 4, 5
- แสดงค่าด้วย function print_r();
- แสดงค่าทั้ง ก่อนสลับคำ และหลังสลับคำ
- Hint count()

```
  EX. before: 1 2 3 4 5 after: 5 2 3 4 1
```

### 8.ให้สร้าง Array ของคำนำหน้าชื่อ 3 ชนิด และ Array ของชื่อ 3 ชนิด และนำมารวมกันเป็นชื่อเต็มและแสดงผลลัพธ์

- "Mr.", "Ms.", "Dr."
- "John", "Jane", "David"

```
  Mr.John Mr.Jane Mr.David Ms.John Ms.Jane Ms.David Dr.John Dr.Jane Dr.David
```

---

## แบบฝึกหัดเกี่ยวกับ Function

### 1.สร้างฟังก์ชั่นที่รับพารามิเตอร์ 2 ตัวเป็นเลขจำนวนเต็ม และคืนค่าผลคูณของจำนวนทั้งสอง

- multiply( 20 , 30 )

```
  EX. result: 600
```

### 2.สร้างฟังก์ชั่นรับค่าวันที่แล้วแปลงเป็น วัน เดือน ปี แบบไทย

- 12-05-2023
- covertDate( "12-05-2023" )

```
  EX. 12 พฤษภาคม 2566
```

### 3.สร้างฟังก์ชั่นรับค่าวันเกิด แล้วให้คำนวณจำนวนวันตั้งแต่วันที่ระบุจนถึงวันที่ปัจจุบัน

- 20-06-2000
- calulateDays( "20-06-2000" )

```
  EX. 83xx วัน
```

### 4.สร้างฟังก์ชั่นรับชื่อและนามสกุลแล้วทำการแปลงให้ชื่อเป็นตัวพิมพ์ใหญ่ทั้งหมด ส่วนนามสกุลเป็นตัวพิมพ์เล็กทั้งหมด

- Thitipong Manajit
- changeName( "Thitipong" , "Manajit" )

```
  EX. THITIPONG manajit
```

---

## แบบฝึกหัดเกี่ยวกับ Object

### 1.สร้าง Class ชื่อ Person ที่มี property คือ name, age และ gender และมี method ชื่อว่า introduce() ที่ใช้สำหรับแนะนำตัวเอง โดยแสดงข้อความว่า "Hello, my name is [name], I am [age] years old and I am a [gender]."

- Person.introduce()

```
  EX. Hello, my name is [name], I am [age] years old and I am a [gender]
```

### 2.สร้าง Class ชื่อ Rectangle ที่มี property คือ width และ height และมี method ชื่อว่า getArea() ที่คืนค่าพื้นที่ของสี่เหลี่ยมผืนผ้า

- Rectangle.getArea()

```
  EX. area: xxx sqm.
```

### 3.สร้าง Class ชื่อ Employee ที่สืบทอดคุณสมบัติจาก Class Person โดยมี property เพิ่มเติมอีก 2 ตัวคือ position และ salary และมี method ชื่อว่า getSalary() ที่คืนค่าเงินเดือนของพนักงาน

- Employee.getSalary()

```
  EX. xxxxxxxx บาท
```

# JS

## แบบฝึกหัด JS เกี่ยวกับ Array

### 1.สร้าง array ที่มีชื่อเมือง 5 เมือง และแสดงผลทั้งหมด

- 'Tokyo' ,'Bangkok', 'Paris', 'London', 'New York'

### 2.สร้าง array ที่มีตัวเลขเรียงจากน้อยไปมาก 5 ตัว และหาผลรวมของตัวเลขทั้งหมด

- 20, 10, 15, 5, 25

```
  EX. sort: 5 10 15 20 25 sum: 75
```

### 3.สร้าง array ที่มีเลขจำนวนเต็ม 10 ตัวและแสดงผลตัวเลขที่เป็นเลขคู่

- 20, 10, 15, 5, 25, 19 ,13, 32, 40, 13

```
  EX. 20 10 32 40
```

### 4.สร้าง array ที่มีชื่อคน 5 คนและแสดงผลชื่อทั้งหมดที่มีตัวอักษร 'a' อยู่ในชื่อ Case Sensitive

- 'John', 'Jane', 'David', 'Alex', 'Marry'

```
  EX. Jane David
```

### 5.สร้าง array ที่มีชื่อสินค้า 5 ชื่อและราคาสินค้าที่เก็บไว้ในอาร์เรย์อื่น ๆ และแสดงผลชื่อสินค้าและราคาทั้งหมด

- 'Product A', 'Product B', 'Product C', 'Product D', 'Product E'
- 10, 20, 30, 40, 50

```
  EX. Product A: 10 Product B: 20 Product C: 30 Product D: 40 Product E: 50
```

### 6.ให้เขียนรับค่าจำนวนเต็มเข้ามาเป็น Array และหาค่าสูงสุดและต่ำสุดของ Array นี้ โดยไม่ใช้ฟังก์ชั่น array_max และ array_min

- 20, 10, 15, 5, 25, 19 ,13, 32, 40, 13

```
  EX. max: 40 min: 5
```

### 7.ให้เขียนรับ Array ของตัวเลขเข้ามา และสลับค่าของตำแหน่งแรกและตำแหน่งสุดท้ายใน Array

- 1, 2, 3, 4, 5
- แสดงค่าทั้ง ก่อนสลับคำ และหลังสลับคำ

```
  EX. before: 1 2 3 4 5 after: 5 2 3 4 1
```

### 8.ให้สร้าง Array ของคำนำหน้าชื่อ 3 ชนิด และ Array ของชื่อ 3 ชนิด และนำมารวมกันเป็นชื่อเต็มและแสดงผลลัพธ์

- "Mr.", "Ms.", "Dr."
- "John", "Jane", "David"

```
  Mr.John Mr.Jane Mr.David Ms.John Ms.Jane Ms.David Dr.John Dr.Jane Dr.David
```

---

## แบบฝึกหัดเกี่ยวกับ Function

### 1.สร้างฟังก์ชั่นที่รับพารามิเตอร์ 2 ตัวเป็นเลขจำนวนเต็ม และคืนค่าผลคูณของจำนวนทั้งสอง

- multiply( 20 , 30 )

```
  EX. result: 600
```

### 2.สร้างฟังก์ชั่นรับค่าวันที่แล้วแปลงเป็น วัน เดือน ปี แบบไทย

- 12-05-2023
- covertDate( "12-05-2023" )

```
  EX. 12 พฤษภาคม 2566
```

### 3.สร้างฟังก์ชั่นรับค่าวันเกิด แล้วให้คำนวณจำนวนวันตั้งแต่วันที่ระบุจนถึงวันที่ปัจจุบัน

- 20-06-2000
- calulateDays( "20-06-2000" )

```
  EX. 83xx วัน
```

### 4.สร้างฟังก์ชั่นรับชื่อและนามสกุลแล้วทำการแปลงให้ชื่อเป็นตัวพิมพ์ใหญ่ทั้งหมด ส่วนนามสกุลเป็นตัวพิมพ์เล็กทั้งหมด

- Thitipong Manajit
- changeName( "Thitipong" , "Manajit" )

```
  EX. THITIPONG manajit
```

---

## แบบฝึกหัดเกี่ยวกับ Object

### 1.สร้าง Class ชื่อ Person ที่มี property คือ name, age และ gender และมี method ชื่อว่า introduce() ที่ใช้สำหรับแนะนำตัวเอง โดยแสดงข้อความว่า "Hello, my name is [name], I am [age] years old and I am a [gender]."

- Person.introduce()

```
  EX. Hello, my name is [name], I am [age] years old and I am a [gender]
```

### 2.สร้าง Class ชื่อ Rectangle ที่มี property คือ width และ height และมี method ชื่อว่า getArea() ที่คืนค่าพื้นที่ของสี่เหลี่ยมผืนผ้าเรียกใช้ฟังก์ชั่น getArea()

- Rectangle.getArea()

```
  EX. area: xxx sqm.
```

### 3.สร้าง Class ชื่อ Employee ที่สืบทอดคุณสมบัติจาก Class Person โดยมี property เพิ่มเติมอีก 2 ตัวคือ position และ salary และมี method ชื่อว่า getSalary() ที่คืนค่าเงินเดือนของพนักงาน

- Employee.getSalary()

```
  EX. xxxxxxxx บาท
```
