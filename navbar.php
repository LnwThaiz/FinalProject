<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>JSP Page</title>
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

    } else {
        // ถ้าไม่มีตัวแปรเซสชัน username แสดงว่ายังไม่ได้ล็อกอิน
        echo "กรุณาล็อกอินก่อนใช้งาน!";
    }
    ?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background: #454ABB;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <img src="./img/TATC_Logo.png" width="70" class="rounded-circle border-10px">
                </li>

                <li class="nav-item ">
                    <a class="nav-link text-white"  href="index.php">วิทยาลัยเทคนิคสัตหีบ</a>
                </li>



            </ul>


            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link text-white">
                            <i class="bi bi-person-circle"></i>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><?php echo "$STD_Name";?></a>
                    </li>
                    <li class="nav-item">
                        <a href="Login.php" class="nav-link text-white ">Log Out</a>
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