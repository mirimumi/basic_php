<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,100;0,200;0,300;1,100&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Prompt', sans-serif;
    }
</style>
</head>
<body>
    <?php
    /*
        $x = 20; 
        $y = 3;
        echo "<b>1.ตัวดำเนินการ</b><br>" ;
        echo "ผลลัพธ์ของ $x + $y เท่ากับ " .($x + $y)."<br>";
        echo "ผลลัพธ์ของ $x - $y เท่ากับ " .($x - $y)."<br>";
        echo "ผลลัพธ์ของ $x * $y เท่ากับ " .($x * $y)."<br>";
        echo "ผลลัพธ์ของ $x / $y เท่ากับ " .($x / $y)."<br>";
        echo "ผลลัพธ์ของ $x % $y เท่ากับ " .($x % $y)."<br><br>";
        
        echo "<b>2.ตัวดำเนินการเพิ่มค่าและลดค่า</b><br>" ;
        $x =10; $a=10;
        $b=++$a;
        $z=$x++;
        echo "ค่าของ x และ a (ก่อนการประมวลผล) x =10; a=10 <br>  ";
        echo "ค่าของ z (จากสูตร  z=++ นำค่า x ไปเก็บใน z จะได้ค่าเดิมของ x) =$z,<br> ";
        echo "ค่าของ b (จากสูตร  b=++a นำค่า a ก่อนแล้วนำไปเก็บใน b) $b,<br> ";
        echo "ค่าของ x และ a (หลังการประมวลผล) x =$x, a=$a <br>  ";
            */

        $name = array("กษิดิ์เดช", "กัญญ์วรา", "ชินวัฒน์", "ทักษ์ดานัย", "สรศักดิ์");

        $age = array("20", "21", "18", "19", "22");
        
        echo "ชื่อ:".$name[0]." "."อายุ:".$age[0]."<br>";
        echo "ชื่อ:".$name[1]." "."อายุ:".$age[1]."<br>";
        echo "ชื่อ:".$name[2]." "."อายุ:".$age[2]."<br>";
        echo "ชื่อ:".$name[3]." "."อายุ:".$age[3]."<br>";
        echo "ชื่อ:".$name[4]." "."อายุ:".$age[4]."<br>";
                
       
       
       
       
    
       ?>

</body>
</html>