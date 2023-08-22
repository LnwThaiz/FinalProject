<?php
ob_start(); // เริ่ม Output Buffering
?>
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
    include_once "navbar.php";
    include_once "connect.php";

    if (isset($_POST['update'])) {
        // Get the updated values from the form submission
        $updatedSTD_Birth = $_POST['birthdate'];
        $updatedSTD_Address = $_POST['address'];
        $updatedSTD_Phone = $_POST['phone-number'];
        $updatedParent_Name = $_POST['parent-name'];
        $updatedProvinces = $_POST['provinces'];
        $updatedDistricts = $_POST['districts'];
        $updatedSubdistricts = $_POST['subdistricts'];

        // อัปเดตข้อมูลในตัวแปรเซสชัน
        $_SESSION["STD_Birth"] = $updatedSTD_Birth;
        $_SESSION["STD_Address"] = $updatedSTD_Address;
        $_SESSION["STD_Phone"] = $updatedSTD_Phone;
        $_SESSION["Parent_Name"] = $updatedParent_Name;

        // Update the data in the database using SQL
        // Replace 'your_database_host', 'your_username', 'your_password', and 'your_database_name' with your actual database credentials
        $conn = new mysqli('localhost', 'root', '', 'leavedata');

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Perform the update query
        $sql = "UPDATE std SET STD_Birth = '$updatedSTD_Birth', STD_Address = '$updatedSTD_Address',
                STD_Phone = '$updatedSTD_Phone', Parent_Name = '$updatedParent_Name' , provinces_id = $updatedProvinces,
                district_id = $updatedDistricts, subdistrict_id = $updatedSubdistricts WHERE STD_ID = '$STD_ID'";

        if ($conn->query($sql) === TRUE) {
            echo ($sql);
            // If the update is successful, you may redirect to the same page to display the updated data
            header("Location: User.php");
            // header("Refresh:0; url=User.php");
            exit;
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    ?>

    <!-- Your HTML content here -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">ข้อมูลส่วนตัว</h1>
            </div>
        </div>
        <form method="post">
            <div class="row mt-3">
                <h5 style="font-weight: bold;">ข้อมูลการเรียน</h5>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="student-id">รหัสนักศึกษา :</label>
                        <input type="text" class="form-control" id="student-id" name="student-id" value="<?php echo "$STD_ID"; ?> " disabled>
                    </div>
                    <div class="form-group">
                        <label for="student-level">ระดับชั้น :</label>
                        <input type="text" class="form-control" id="student-level" name="student-level" value="<?php echo "$Classlev_ID"; ?>" disabled>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="department">แผนกวิชา :</label>
                        <input type="text" class="form-control" id="department" name="department" value="<?php echo "$Major_ID"; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="class-group">กลุ่มเรียน :</label>
                        <input type="text" class="form-control" id="class-group" name="class-group" value="<?php echo "$Group_ID"; ?>" disabled>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <h5 style="font-weight: bold;">ข้อมูลทั่วไป</h5>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="student-name">ชื่อ - นามสกุล :</label>
                        <input type="text" class="form-control" id="student-name" name="student-name" value="<?php echo "$STD_Name"; ?>  <?php echo "$STD_Lastname "; ?> " disabled>
                    </div>
                    <div class="form-group">
                        <label for="birthdate">วันเดือนปีเกิด :</label>
                        <input type="text" class="form-control" id="birthdate" name="birthdate" value="<?php echo "$STD_Birth"; ?>">
                    </div>
                    <div class="form-group d-flex">
                        <label for="address" class=" text-nowrap">ที่อยู่ :</label>
                        <input type="text" class="form-control form mx-2" id="address" name="address" style="width: 250px;" value="<?php echo "$STD_Address"; ?>">

                        <label for="provinces" class=" text-nowrap">จังหวัด :</label>
                        <?php
                        $sql_provinces = "SELECT * FROM provinces";
                        $sql_provinces_q = mysqli_query($connect, $sql_provinces);
                        ?>
                        <select name="provinces" id="provinces" class=" form-control" style="margin-left: 13px;">
                            <option value="" selected disabled>-กรุณาเลือกจังหวัด-</option>
                            <?php foreach ($sql_provinces_q as $data) { ?>
                                <option value="<?= $data['provinces_id'] ?>"><?=$data['name_th']?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="form-group">
                        <label for="phone-number">เบอร์โทร :</label>
                        <input type="text" class="form-control" id="phone-number" name="phone-number" value="<?php echo "$STD_Phone"; ?>">
                    </div>
                    <div class="form-group">
                        <label for="parent-name">ชื่อผู้ปกครอง :</label>
                        <input type="text" class="form-control" id="parent-name" name="parent-name" value="<?php echo "$Parent_Name"; ?>">
                    </div>
                    <div class="form-group d-flex">
                        <label for="district" class=" text-nowrap">ตำบล :</label>
                        <select name="districts" id="districts" class=" form-control" style="margin-left: 13px;">
                        </select>
                        <label for="subdistrict" class=" text-nowrap" style="margin-left: 8px;">อำเภอ :</label>
                        <select name="subdistricts" id="subdistricts" class=" form-control" style="margin-left: 13px;">
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <div class="form-group d-flex">
                        <label for="subdistrict" class=" text-nowrap">รหัสไปรษณีย์ :</label>
                        <input type="text" class="form-control form mx-2" name="zipcode" id="zipcode" 
                        style="width: 175px;" value="<?php echo "$SubDistrict_ID"; ?>">
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-12 text-center">
                    <button class="btn btn-success mr-3" type="submit" name="update">บันทึกการแก้ไข</button>
                    <button class="btn btn-danger" onclick="window.location.href = 'User.php';">ยกเลิกการแก้ไข</button>
                </div>
            </div>
        </form>
    </div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<?php include "script.php"; ?>
</html>
<?php
// สิ้นสุด Output Buffering และส่งเนื้อหาไปยังเบราว์เซอร์
ob_end_flush();
?>