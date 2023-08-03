<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "leavedata";

// สร้างการเชื่อมต่อ
$connect = mysqli_connect($host, $username, $password,$dbname);




// //ตรวจสอบการเชื่อมต่อ
// if ($connect->connect_error) {
//     die("การเชื่อมต่อล้มเหลว: " . $connect->connect_error);
// }

// echo "เชื่อมต่อฐานข้อมูลสำเร็จแล้ว";

?>
