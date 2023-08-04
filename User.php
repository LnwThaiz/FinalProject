<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลส่วนตัว</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php
    include "navbar.php"
        ?>
    <!-- Your HTML content here -->
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">ข้อมูลส่วนตัว</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="student-id">รหัสนักศึกษา :</label>
                    <input type="text" class="form-control" id="student-id" value="// รหัสนักศึกษา //">
                </div>
                <div class="form-group">
                    <label for="student-level">ระดับชั้น :</label>
                    <input type="text" class="form-control" id="student-level" value="// ระดับชั้น //">
                </div>
                <div class="form-group">
                    <label for="student-name">ชื่อ - นามสกุล :</label>
                    <input type="text" class="form-control" id="student-name" value="// ชื่อนามสกุล //">
                </div>
                <div class="form-group">
                    <label for="birthdate">วันเดือนปีเกิด :</label>
                    <input type="text" class="form-control" id="birthdate" value="// วันเดือนปีเกิด //">
                </div>
                <div class="form-group">
                    <label for="address">ที่อยู่ :</label>
                    <input type="text" class="form-control" id="address" value="// ที่อยู่ //">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="department">แผนกวิชา :</label>
                    <input type="text" class="form-control" id="department" value="// แผนกวิชา //">
                </div>
                <div class="form-group">
                    <label for="class-group">กลุ่มเรียน :</label>
                    <input type="text" class="form-control" id="class-group" value="// กลุ่มเรียน //">
                </div>
                <div class="form-group">
                    <label for="phone-number">เบอร์โทร :</label>
                    <input type="text" class="form-control" id="phone-number" value="// เบอร์โทร //">
                </div>
                <div class="form-group">
                    <label for="parent-name">ชื่อผู้ปกครอง :</label>
                    <input type="text" class="form-control" id="parent-name" value="// ชื่อผู้ปกครอง //">
                </div>
            </div>
        </div>


        <div>
            <button onclick="window.location.href = 'EditUser.php';"
                style="width:150px; height: 50px; left: 1179px; top: 700px; position: absolute; background: #00FF0A; border-radius: 20px; color: white;
                font-size: 20px; font-family: K2D;font-weight: 400;word-wrap: break-word" > แก้ไขข้อมูล</button>
            </div>
        <div>
        <button onclick="window.location.href = 'index.php';" style="width:150px; height: 50px; left: 1017px; top: 700px; position: absolute; background: #FF0000; border-radius: 20px; color: white;
                font-size: 20px; font-family: K2D;font-weight: 400;word-wrap: break-word">กลับหน้าหลัก</button>
            
        </div>
    </div>
    
</body>
</html>
