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
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">ข้อมูลส่วนตัว</h1>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="student-id">รหัสนักศึกษา :</label>
                    <input type="text" class="form-control" id="student-id" value="<?php echo "$STD_ID";?> " disabled>
                </div>
                <div class="form-group">
                    <label for="student-level">ระดับชั้น :</label>
                    <input type="text" class="form-control" id="student-level" value="<?php echo "$Classlev_ID";?>" disabled>
                </div>
                <div class="form-group">
                    <label for="student-name">ชื่อ - นามสกุล :</label>
                    <input type="text" class="form-control" id="student-name" value="<?php echo "$STD_Name";?>  <?php echo "$STD_Lastname ";?> " disabled>
                </div>
                <div class="form-group">
                    <label for="birthdate">วันเดือนปีเกิด :</label>
                    <input type="text" class="form-control" id="birthdate" value="<?php echo "$STD_Birth";?>" disabled>
                </div>
                <div class="form-group">
                    <label for="address">ที่อยู่ :</label>
                    <input type="text" class="form-control" id="address" value="<?php echo "$STD_Address";?>" disabled>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="form-group">
                    <label for="department">แผนกวิชา :</label>
                    <input type="text" class="form-control" id="department" value="<?php echo "$Major_ID";?>" disabled>
                </div>
                <div class="form-group">
                    <label for="class-group">กลุ่มเรียน :</label>
                    <input type="text" class="form-control" id="class-group" value="<?php echo "$Group_ID";?>" disabled>
                </div>
                <div class="form-group">
                    <label for="phone-number">เบอร์โทร :</label>
                    <input type="text" class="form-control" id="phone-number" value="<?php echo "$STD_Phone";?>" disabled>
                </div>
                <div class="form-group">
                    <label for="parent-name">ชื่อผู้ปกครอง :</label>
                    <input type="text" class="form-control" id="parent-name" value="<?php echo "$Parent_Name";?>" disabled>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-12 text-center">
                <button class="btn btn-success mr-3" onclick="window.location.href = 'EditUser.php';">แก้ไขข้อมูล</button>
                <button class="btn btn-danger" onclick="window.location.href = 'index.php';">กลับหน้าหลัก</button>
            </div>
        </div>
    </div>
    
</body>
</html>
