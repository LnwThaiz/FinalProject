<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Leave System</title>
    <link rel="stylesheet" href="forindex.css">
</head>

<body>
    <?php
    include_once "BSCss.html";
    session_start();

    // ตรวจสอบว่ามีตัวแปรเซสชัน username และ fullname ถูกตั้งค่าหรือไม่
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
        $SubDistrict_ID = $_SESSION["subdistrict_id"];
    } else {
        // ถ้าไม่มีตัวแปรเซสชัน username แสดงว่ายังไม่ได้ล็อกอิน
        echo "กรุณาล็อกอินก่อนใช้งาน!";
    }
    ?>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background: #BA0900;">
        <div class="container-fluid">
            <img src="./img/TATC_Logo.png" width="70" class="rounded-circle border-10px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">วิทยาลัยเทคนิคสัตหีบ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
    <?php
    include_once "footerBoostrapLogin.html";
    ?>
</body>

</html>