<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body { background: white; }
        .box { width: 307px; height: 520px; position: absolute; background: #454ABB; border-radius: 35px; }
        .icon { width: 180px; height: 33px; position: absolute; font-size: 23px; font-family: K2D; font-weight: 400; word-wrap: break-word; color: white; }
        .icon i { margin-right: 5px; }
        .title { width: 293px; height: 65px; position: absolute; color: white; font-size: 25px; font-family: K2D; font-weight: 700; word-wrap: break-word; }
        .divider { width: 263px; height: 0px; position: absolute; border: 1px white solid; }
        .form-box { width: 918px; height: 512px; position: absolute; background: #F4F4F4; border-radius: 35px; }
        textarea { width: 497px; height: 183px; position: absolute; resize: none; }
        .file-input { width: 300px; height: 30px; position: absolute; color: #9F9F9F; font-size: 20px; font-family: K2D; font-weight: 400; word-wrap: break-word; }
        .file { width: 300px; height: 30px; position: absolute; }
        .submit-button { width: 150px; height: 50px; position: absolute; background:#00FF0A; border-radius: 20px; color: white; font-size: 20px; font-family: K2D; font-weight: 400; word-wrap: break-word; }
        .no-underline { text-decoration: none; }
        .textlabel {  position: absolute; color: #9F9F9F; font-size: 20px; font-family: K2D; font-weight: 400; word-wrap: break-word}
    </style>
</head>
<body>
    <?php include_once "navbar.php"  ?>
    <div style="width: 100%; height: 100%; position: relative; background: white"> 
    <div class="box" style="left: 71px; top: 100px;"></div>
    <div class="icon" style="left: 100px; top: 250px;"><img src="./img/Edituser-W.png" width="70"></div>
    <div class="icon" style="left: 189px; top: 280px;"><a href="User.php" class="text-white no-underline">ข้อมูลผู้ใช้</a></div>
    <div style="width: 180px; height: 33px; left: 100px; top: 359px; position: absolute; "><i class="fas fa-history"></i></div>
    <div class="icon" style="left: 189px; top: 380px;"><a href="LeaveHistory.php" class="text-white no-underline">ประวัติการลา</a></div>
    <div class="icon" style="left: 189px; top: 480px;"><a href="schedule.php" class="text-white no-underline">ตารางเรียน</a></div>
    <div style="width: 180px; height: 33px; left: 100px; top: 450px; position: absolute; "><i class="bi bi-calendar-fill icon-calendar"></i></div>
    <div class="title" style="left: 105px; top: 160px;">ระบบการใช้งานใบลา</div>
    <div class="divider" style="left: 92px; top: 220px;"></div>
    <div class="form-box" style="left: 442px; top: 100px;"></div>
    <div class="textlabel"style="width: 136px; height: 30px; left: 486px; top: 260px;">เหตุผลการลา</div>
    <textarea style="left: 479px; top: 290px;"></textarea>
    <div class="divider" style="left: 676px; top: 196px;"></div>
    <div class="divider" style="left: 1126px; top: 195px;"></div>
    <div
            style="width: 165px; height: 75px; left: 818px; top: 50px; position: absolute; color: black; font-size: 30px; font-family: K2D; font-weight: 400; word-wrap: break-word">
            บันทึกการลา</div>
    <div class="file-input" style="left: 486px; top: 480px;">แนบไฟล์ รับรองแพทย์</div>
    <div class="file" style="left: 486px; top: 530px;" ><input type="file"></div>
    <div class="file-input" style="left: 1044px; top: 260px;">ประเภทการลา</div>
    <div>
            <select
                style="width: 159px; height: 50px; left: 1050px; top: 310px; position: absolute; background: white; border-radius: 15px; font-size: 20px; font-family: K2D; font-weight: 50; word-wrap: break-word"
                name="Type_of_eave">
                <option>ลากิจ</option>
                <option>ลาป่วย</option>
            </select>
        </div>
    <div class="file-input" style="left: 1044px; top: 371px;">วิชาที่ลาได้</div>
    <div>
            <select
                style="width: 159px; height: 50px; left: 1050px; top: 424px; position: absolute;  background: white; border-radius: 15px;  font-size: 20px; font-family: K2D; font-weight: 50; word-wrap: break-word"
                name="Leaving_subjects">
                <option>คณิตศาสตร์</option>
                <option>วิทยาศาสตร์</option>
            </select>
        </div>
    <div class="file-input" style="left: 964px; top: 130px;">ตั้งแต่เวลา</div>
    <div>
            <select
                style="width: 159px; height: 72px; left: 956px; top: 159px; position: absolute; background: white; border-radius: 15px; color: black; font-size: 20px; font-family: K2D; font-weight: 400; word-wrap: break-word"
                name="Type_of_eave">
                <option>10.00 - 11.00</option>
                <option>11.00 - 12.00</option>
            </select>
        </div>

    <div class="file-input" style="left: 1180px; top: 130px;">ถึงเวลา</div>
    <div>
            <select name="Type_of_eave"
                style="width: 159px; height: 72px; left: 1169px; top: 159px; position: absolute; background: white; border-radius: 15px; color: black; font-size: 20px; font-family: K2D; font-weight: 400; word-wrap: break-word">
                <option>11.00 - 12.00</option>
                <option>12.00 - 13.00</option>
            </select>
        </div>
    <div class="file-input" style="left: 486px; top: 130px;">วันที่เริ่มลา</div>
    <div>
            <button
                style="width: 187px; height: 72px; left: 479px; top: 159px; position: absolute; background: white; border-radius: 15px; color: black; font-size: 20px; font-family: K2D; font-weight: 400; word-wrap: break-word"
                onclick="openPopup()">28/06/2565</button>

        </div>
    <div class="file-input" style="left: 725px; top: 130px;">ถึงวันที่</div>
    <div>
            <button
                style="width: 187px; height: 72px;  left: 720px; top: 159px; position: absolute; background: white; border-radius: 15px; color: black; font-size: 20px; font-family: K2D; font-weight: 400; word-wrap: break-word"
                onclick="openPopup()">28/06/2565</button>

        </div>
    <div>
        <button class="submit-button" style="left: 1050px; top: 530px;" onclick="window.location.href = 'index.php';">ยืนยันการลา</button>
    </div>
    </div>
</body>
</html>
