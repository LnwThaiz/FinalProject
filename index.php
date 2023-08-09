<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="forindex.css">
</head>
<body>

    <?php
    include_once "navbar.php"
        ?>


    <div style="width: 100%; height: 100%; position: relative; background: white">
        <!--แก้ไขข้อมูลผู้ใช้  -->
        <div
            style="width: 307px; height: 520px; left: 71px; top: 100px; position: absolute; background: #454ABB; border-radius: 35px">
        </div>
        <div style="width: 180px; height: 33px; left: 100px; top: 250px; position: absolute; "><img
                src="./img/Edituser-W.png" width="70"></div>
        <div
            style="width: 180px; height: 33px; left: 189px; top: 280px; position: absolute; color: white; font-size: 23px;  font-weight: 400; word-wrap: break-word">
            <a href="User.php" class="text-white text-decoration-none">ข้อมูลผู้ใช้</a>
        </div>

        <!--ประวัติการลา  -->
        <div style="width: 180px; height: 33px; left: 100px; top: 350px; position: absolute; "><i
                class="fas fa-history"></i>
        </div>
        <div
            style="width: 180px; height: 33px; left: 189px; top: 380px; position: absolute; color: white; font-size: 23px;  font-weight: 400; word-wrap: break-word">
            <a href="LeaveHistory.php" class="text-white text-decoration-none">ประวัติการลา</a>
        </div>
        <!--ตารางเรียน -->
        <div style="width: 180px; height: 33px; left: 100px; top: 450px; position: absolute; "><i
                class="bi bi-calendar-fill icon-calendar"></i>
        </div>
        <div
            style="width: 181px; height: 33px; left: 189px; top: 480px; position: absolute; color: white; font-size: 23px;  font-weight: 400; word-wrap: break-word">
            <a href="schedule.php" class="text-white text-decoration-none">ตารางเรียน</a>
        </div>
        <!--หัวตาราง -->
        <div
            style="width: 293px; height: 65px; left: 105px; top: 160px; position: absolute; color: white; font-size: 25px;  font-weight: 700; word-wrap: break-word">
            ระบบการใช้งานใบลา</div>

        <div style="width: 263px; height: 0px; left: 92px; top: 220px; position: absolute; border: 1px white solid">
        </div>

        <!--ฟอร์มบันทึการลา-->
        <div
            style="width: 918px; height: 512px; left: 442px; top: 100px; position: absolute; background: #F4F4F4; border-radius: 35px">
        </div>
        <textarea style="width: 497px; height: 183px; left: 479px; top: 290px;  position: absolute;  resize: none; border-radius: 20px"
            name="annotation" rows="6" cols="50">
                </textarea>
        <div
            style="width: 34px; height: 0px; left: 676px; top: 196px; position: absolute; border: 0.50px #BFBFBF solid">
        </div>
        <div
            style="width: 34px; height: 0px; left: 1126px; top: 195px; position: absolute; border: 0.50px #BFBFBF solid">
        </div>
        <!--หัวตาราง-->
        <div
            style="width: 165px; height: 75px; left: 818px; top: 50px; position: absolute; color: black; font-size: 30px; font-weight: 400; word-wrap: break-word">
            บันทึกการลา</div>
        <div
            style="width: 89px; height: 30px; left: 486px; top: 130px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            วันที่เริ่มลา</div>
        <div
            style="width: 136px; height: 30px; left: 486px; top: 260px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            เหตุผลการลา</div>
        <div
            style="width: 300px; height: 30px; left: 486px; top: 480px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            แนบไฟล์ ใบรับรองแพทย์</div>
        <div
            style="width: 300px; height: 30px; left: 486px; top: 530px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            <input type="file">
        </div>
        <div
            style="width: 136px; height: 30px; left: 1044px; top: 260px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            ประเภทการลา</div>
        <div
            style="width: 136px; height: 30px; left: 1044px; top: 371px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            วิชาที่ลาได้</div>
        <div
            style="width: 89px; height: 30px; left: 964px; top: 130px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            ตั้งแต่เวลา</div>
        <div
            style="width: 89px; height: 30px; left: 1180px; top: 130px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            ถึงเวลา</div>
        <div
            style="width: 89px; height: 30px; left: 725px; top: 130px; position: absolute; color: #9F9F9F; font-size: 20px;  font-weight: 400; word-wrap: break-word">
            ถึงวันที่</div>
        <!--วันที่เริ่มลา-->
        <div>
            <button
                style="width: 187px; height: 72px; left: 479px; top: 159px; position: absolute; background: white; border-radius: 15px; color: black; font-size: 20px;  font-weight: 400; word-wrap: break-word"
                onclick="openPopup()">28/06/2565</button>

        </div>
        <!--สิ้นสุดวันลา-->
        <div>
        <input  style="width: 187px; height: 72px; left: 720px; top: 159px; position: absolute; background: white; border-radius: 15px;  color: black; font-size: 20px;  font-weight: 400; word-wrap: break-word"
                type="text" id="datepicker">
        </div>


        <!--เวลาที่เริ่มลา-->
        <div>
            <select
                style="width: 159px; height: 72px; left: 956px; top: 159px; position: absolute; background: white; border-radius: 15px; color: black; font-size: 20px;  font-weight: 400; word-wrap: break-word"
                name="Type_of_eave">
                <option>10.00 - 11.00</option>
                <option>11.00 - 12.00</option>
            </select>
        </div>

        <!--สิ้นสุดเวลาการลา-->
        <div>
            <select name="Type_of_eave"
                style="width: 159px; height: 72px; left: 1169px; top: 159px; position: absolute; background: white; border-radius: 15px; color: black; font-size: 20px;  font-weight: 400; word-wrap: break-word">
                <option>11.00 - 12.00</option>
                <option>12.00 - 13.00</option>
            </select>
        </div>
        <!--ประเภทการลา-->
        <div>
            <select
                style="width: 159px; height: 50px; left: 1050px; top: 310px; position: absolute; background: white; border-radius: 15px; font-size: 20px;  font-weight: 50; word-wrap: break-word"
                name="Type_of_eave">
                <option>ลากิจ</option>
                <option>ลาป่วย</option>
            </select>
        </div>
        <!--วิชาที่ลาได้-->
        <div>
            <select
                style="width: 159px; height: 50px; left: 1050px; top: 424px; position: absolute;  background: white; border-radius: 15px;  font-size: 20px;  font-weight: 50; word-wrap: break-word"
                name="Leaving_subjects">
                <option>คณิตศาสตร์</option>
                <option>วิทยาศาสตร์</option>
            </select>
        </div>

        <!--ปุ่มยินยันการลา-->
        <div>
            <button style="width:150px; height: 50px; left: 1050px; top: 530px; position: absolute; background-color: green; border-radius: 20px; color: white;
                font-size: 20px; font-weight: 400;word-wrap: break-word; border: 1px solid white"
                onclick="window.location.href = 'index.php';"> ยืนยันการลา</button>
        </div>
        <!-- <div id="popup" class="popup">
            <h2>ปฎิทิน</h2>
            <p>วันที่1-31</p>
            <button onclick="closePopup()">ปิด</button>
        </div>

        <div id="overlay" class="overlay"></div>
        <script>
            $(document).ready(function () {
                $('#datepicker').datepicker({
                    format: 'dd/mm/yyyy',
                    autoclose: true
                });
            });
            function openPopup() {
                var popup = document.getElementById("popup");
                var overlay = document.getElementById("overlay");
                popup.style.display = "block";
                overlay.style.display = "block";
            }

            function closePopup() {
                var popup = document.getElementById("popup");
                var overlay = document.getElementById("overlay");
                popup.style.display = "none";
                overlay.style.display = "none";
            }
        </script> -->

</body>
</html>
