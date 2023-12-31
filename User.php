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
    include "connect.php";
    include "sidebar.php";

    // ตรวจสอบว่ามีตัวแปรเซสชัน STD_ID ถูกตั้งค่าหรือไม่
    if (isset($_SESSION["STD_ID"])) {
        $STD_ID = $_SESSION["STD_ID"];
        $STD_Name = $_SESSION["STD_Name"];
        $STD_Lastname = $_SESSION["STD_Lastname"];
        $STD_Birth = $_SESSION["STD_Birth"];
        $STD_Phone = $_SESSION["STD_Phone"];
        $Classlev_ID = $_SESSION["Classlev_ID"];
        $Major_ID = $_SESSION["Major_ID"];
        $Parent_Name = $_SESSION["Parent_Name"];
        $STD_Address = $_SESSION["STD_Address"];
        $Group_ID = $_SESSION["Group_ID"];
        $Provinces_ID = $_SESSION["provinces_id"];
        $District_ID = $_SESSION["district_id"];
        $Subdistrict_ID = $_SESSION["subdistrict_id"];

        // ตรวจสอบว่ามีตัวแปรเซสชันที่ถูกอัปเดตมาหรือไม่
        if (isset($_SESSION["UpdatedSTD_Birth"])) {
            $STD_Birth = $_SESSION["UpdatedSTD_Birth"];
        }
        if (isset($_SESSION["UpdatedSTD_Address"])) {
            $STD_Address = $_SESSION["UpdatedSTD_Address"];
        }
        if (isset($_SESSION["UpdatedSTD_Phone"])) {
            $STD_Phone = $_SESSION["UpdatedSTD_Phone"];
        }
        if (isset($_SESSION["UpdatedParent_Name"])) {
            $Parent_Name = $_SESSION["UpdatedParent_Name"];
        }
    } else {
        // ถ้าไม่มีตัวแปรเซสชัน STD_ID แสดงว่ายังไม่ได้ล็อกอิน
        echo "กรุณาล็อกอินก่อนใช้งาน!";
    }

    ?>
    <div class="content">
        <!-- Your HTML content here -->
        <div class="card mt-5" style="margin-left: 10rem;">
            <div class="card-body">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="text-center">ข้อมูลส่วนตัว</h1>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <h5 style="font-weight: bold;">ข้อมูลการเรียน</h5>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="student-id">รหัสนักศึกษา :</label>
                                <input type="text" class="form-control" id="student-id" value="<?php echo "$STD_ID"; ?> " disabled>
                            </div>
                            <div class="form-group">
                                <label for="student-level">ระดับชั้น :</label>
                                <input type="text" class="form-control" id="student-level" value="<?php echo "$Classlev_ID"; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="department">แผนกวิชา :</label>
                                <input type="text" class="form-control" id="department" value="<?php echo "$Major_ID"; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="class-group">กลุ่มเรียน :</label>
                                <input type="text" class="form-control" id="class-group" value="<?php echo "$Group_ID"; ?>" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <h5 style="font-weight: bold;">ข้อมูลทั่วไป</h5>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="student-name">ชื่อ - นามสกุล :</label>
                                <input type="text" class="form-control" id="student-name" value="<?php echo "$STD_Name"; ?>  <?php echo "$STD_Lastname "; ?> " disabled>
                            </div>
                            <div class="form-group">
                                <label for="birthdate">วันเดือนปีเกิด :</label>
                                <input type="text" class="form-control" id="birthdate" value="<?php echo "$STD_Birth"; ?>" disabled>
                            </div>
                            <div class="form-group d-flex">
                                <label for="address" class=" text-nowrap">ที่อยู่ :</label>
                                <input type="text" class="form-control form mx-2" id="address" style="width: 250px;" value="<?php echo "$STD_Address"; ?>" disabled>
                                <?php
                                $sql_all =
                                    "SELECT * FROM std
                        INNER JOIN subdistrict ON std.subdistrict_id = subdistrict.subdistrict_id
                        INNER JOIN district ON subdistrict.district_id = district.district_id
                        INNER JOIN provinces ON district.provinces_id = provinces.provinces_id
                        WHERE std.STD_ID = $STD_ID;";
                                $query_all = mysqli_query($connect, $sql_all);
                                $fetch_all = mysqli_fetch_assoc($query_all);
                                ?>
                                <label for="provinces" class=" text-nowrap">จังหวัด :</label>
                                <!-- <select name="" id="" class=" form-control" style="margin-left: 13px;"></select> -->
                                <input type="text" class="form-control form" name="provinces" id="provinces" style="margin-left: 10px;" value="<?php echo $fetch_all['name_th']; ?>" disabled>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label for="phone-number">เบอร์โทร :</label>
                                <input type="text" class="form-control" id="phone-number" value="<?php echo "$STD_Phone"; ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label for="parent-name">ชื่อผู้ปกครอง :</label>
                                <input type="text" class="form-control" id="parent-name" value="<?php echo "$Parent_Name"; ?>" disabled>
                            </div>
                            <div class="form-group d-flex">
                                <label for="district" class=" text-nowrap">อำเภอ :</label>
                                <!-- <select name="districts" id="districts" class=" form-control" style="margin-left: 13px;"></select> -->
                                <input type="text" class="form-control form " name="districts" id="districts" style="margin-left: 10px;" value="<?php echo $fetch_all['d_name_th']; ?>" disabled>

                                <label for="subdistrict" class=" text-nowrap" style="margin-left: 8px;">ตำบล :</label>
                                <!-- <select name="subdistricts" id="subdistrict" class=" form-control" style="margin-left: 13px;"></select> -->
                                <input type="text" class="form-control form " name="subdistricts" id="subdistricts" style="margin-left: 10px;" value="<?php echo $fetch_all['s_name_th']; ?>" disabled>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group d-flex">
                                <label for="subdistrict" class=" text-nowrap">รหัสไปรษณีย์ :</label>
                                <input type="text" class="form-control form mx-2" name="zipcode" id="zipcode" style="width: 175px;" value="<?php echo $fetch_all['zip_code']; ?>" disabled>
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
            </div>
        </div>
    </div>
</body>

</html>
<?php
// สิ้นสุด Output Buffering และส่งเนื้อหาไปยังเบราว์เซอร์
ob_end_flush();
?>