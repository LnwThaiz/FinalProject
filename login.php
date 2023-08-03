<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "boostrapCss.html";
    include "connect.php";
    session_start();
    $txt = "";
    // การตรวจสอบการส่งแบบฟอร์ม
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // รับค่าจากฟอร์มล็อกอิน
        $username = $_POST["username"];
        $password = $_POST["password"];
        


        // ตรวจสอบข้อมูลในฐานข้อมูล
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $connect->query($sql);

        if ($result->num_rows == 1) {

            // ล็อกอินสำเร็จ
            $_SESSION["username"] = $username;

            // ดึงข้อมูล fullname จากฐานข้อมูล
            $row = $result->fetch_assoc();
            $_SESSION["name"] = $row["name"];

            header("Location: index.php");
            exit;
           
        } else {
            // ล็อกอินไม่สำเร็จ
            $txt = "This username was not found.";
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

                                        <div class="mb-md-0 mt-md-4 pb-2">

                                            <h2 class="fw-bold mb-4 text-uppercase">วิทยาลัยเทคสัตหีบ</h2>


                                            <div class="form-outline form-white mb-4">
                                                <input type="text" class="form-control form-control-lg" name="username" value=""
                                                    required placeholder="ชื่อผู้ใช้งาน" />
                                            </div>

                                            <div class="form-outline form-white mb-4">
                                                <input type="password" id="typePasswordX" class="form-control form-control-lg"
                                                    name="password" value="" required placeholder="รหัสผ่าน" />
                                            </div>
                                            <div>
                                                <p><?php if($txt == ""){
                                                            echo"";
                                                         }else {
                                                            echo"$txt";
                                                        }?></p>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                            
                                                <p class="mb-0"><a href="regis.jsp"
                                                        class="text-white-50 fw-bold">เข้าสู่ระบบด้วยแอดมิน</a>
                                            
                                        </p>
                                        <button class="btn btn-outline-light btn-lg px-5"
                                            type="submit">เข้าสู่ระบบ</button>

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
    include "footerBoostrap.html"
        ?>
</body>

</html>