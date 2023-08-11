<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once "boostrapLogin.html";
    include_once "connect.php";
    session_start();
    $txt = "";

    // การตรวจสอบการส่งแบบฟอร์ม
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าจากฟอร์มล็อกอิน
        $STD_ID  = $_POST["STD_ID"];
        $Password = $_POST["Password"];

        // ตรวจสอบข้อมูลในฐานข้อมูล
        $sql = "SELECT * FROM std WHERE STD_ID ='$STD_ID' AND Password='$Password'";
        $result = $connect->query($sql);

        if ($result->num_rows == 1) {
            // ล็อกอินสำเร็จ
            $_SESSION["STD_ID"] = $STD_ID;

            // ดึงข้อมูล fullname จากฐานข้อมูล
            $row = $result->fetch_assoc();
            $_SESSION["STD_Name"] = $row["STD_Name"];
            $_SESSION["STD_Lastname"] = $row["STD_Lastname"];
            $_SESSION["STD_Birth"] = $row["STD_Birth"];
            $_SESSION["STD_Phone"] = $row["STD_Phone"];
            $_SESSION["Classlev_ID"] = $row["Classlev_ID"];
            $_SESSION["Major_ID"] = $row["Major_ID"];
            $_SESSION["Parent_Name"] = $row["Parent_Name"];
            $_SESSION["STD_Address"] = $row["STD_Address"];
            $_SESSION["Group_ID"] = $row["Group_ID"];

            header("Location: index.php");
            exit;
        } else {
            // ล็อกอินไม่สำเร็จ
            $txt = "This STD_ID and Password combination was not found.";
        }
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $connect->close();
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <section class="vh-100 ">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card text-white" style="background: #454ABB; border-radius: 1rem;">
                            <div class="card-body p-5 text-center">
                                <img src="./img/TATC_Logo.png" width="150" class="rounded-circle border-10px">
                                <div class="mb-md-0 mt-md-4 pb-2 ">
                                    <h2 class="fw-bold mb-4 text-uppercase">วิทยาลัยเทคสัตหีบ</h2>
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" class="form-control form-control-lg" name="STD_ID" value="" required placeholder="ชื่อผู้ใช้งาน" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="Password" id="typePasswordX" class="form-control form-control-lg" name="Password" value="" required placeholder="รหัสผ่าน" />
                                    </div>
                                    <div>
                                        <p><?php if ($txt == "") {
                                                echo "";
                                            } else {
                                                echo "$txt";
                                            } ?></p>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">

                                        <p class="mb-0"><a href="regis.jsp" class="text-white-50 fw-bold" style="text-decoration: none;">เข้าสู่ระบบด้วยแอดมิน</a>

                                        </p>
                                        <button class="btn btn-outline-light btn-lg px-5" type="submit">เข้าสู่ระบบ</button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    <?php
    include_once "footerBoostrapLogin.html"
    ?>
</body>

</html>