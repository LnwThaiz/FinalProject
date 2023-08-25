<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="forindex.css">
  <link rel="stylesheet" href="sidebar_com.css">
</head>

<body>
  <?php
  include_once "navbar.php";
  ?>
  <div class="content">
    <h2 class="d-flex justify-content-center my-3">บันทึกการลา</h2>
    <div>
      <div class="container d-flex justify-content-center align-content-center">

        <div class="card text-bg-secondary mb-3" style="width: 1000px;">
          <div class="card-body">
            <div class="row mt-3">

              <div class="col-md-3">
                <div class="form-group">
                  <label for="">วันที่เริ่มลา</label>
                  <input type="startdate" name="date" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="">ถึงวันที่</label>
                  <input type="enddate" name="date" class="form-control">
                </div>
              </div>
              <div class="col-md-3">
                <div class=" form-group">
                  <label for="">ตั้งแต่เวลา</label>
                  <select name="start_time" id="" class=" form-control"></select>
                </div>
              </div>
              <div class="col-md-3">
                <div class=" form-group">
                  <label for="">ถึงเวลา</label>
                  <select name="end_time" id="" class=" form-control"></select>
                </div>
              </div>

            </div>
            <div class="row mt-3">
              <div class="col-md-7">
                <div class=" form-group">
                  <label for="">เหตุผลการลา</label>
                  <textarea name="" id="" class=" form-control" style="  height: 7rem;width: 29rem;padding: 5px;"></textarea>
                  <!-- <input type="text" name="comment" class=" form-control"> -->
                </div>
              </div>
              <div class="col " style="margin-left: 50px;">

                <div class=" form-group">
                  <label for="">ประเภทการลา</label>
                  <select name="leavetype" id="" class=" form-control"></select>
                </div>

                <!-- <div class="col">
                    <div class=" form-group">
                      <label for="">วิชาที่ลาได้</label>
                      <select name="subject" id="" class=" form-control"></select>
                    </div>
                  </div> -->
              </div>
            </div>
            <div class="row mt-3">
              <div class="col-md-7">

              </div>
              <div class="col " style="margin-left: 50px;">

                <div class=" form-group">
                  <label for="">ประเภทการลา</label>
                  <select name="leavetype" id="" class=" form-control"></select>
                </div>

                <!-- <div class="col">
                    <div class=" form-group">
                      <label for="">วิชาที่ลาได้</label>
                      <select name="subject" id="" class=" form-control"></select>
                    </div>
                  </div> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>

<!-- <div class="form-box" style="left: 260px; top: 100px;">juoo                
    <div class="textlabel" style="width: 136px; height: 30px; left:290px; top: 260px;">เหตุผลการลา</div> -->

<!-- กล่องคอมเมนต์ -->
<!-- <textarea style="left: 290px; top: 290px; resize: none; border-radius: 5px;
        font-family : 'Anakotmai',sans-serif ;font-size: medium"></textarea> -->

<!-- ข้อมูลฝั่งขวาของกล่องข้อความการลา -->
<!-- <div class="divider2" style="left: 490px; top: 196px;"></div>
    <div class="divider2" style="left: 950px; top: 195px;"></div>
    <div style="width: 165px; height: 75px; left: 650px; top: 50px; position: absolute; color: black; font-size: 30px; font-family: 'Anakotmai',sans-serif; font-weight: 400; word-wrap: break-word"> บันทึกการลา</div>
    <div class="file-input" style="left: 290px; top: 490px; width: auto;">
      <p style="font-size: 15px; color: red; margin-bottom: 0;">** หมายเหตุ กรณีที่ลาป่วยเกิน 3 วันควรมีใบรับรองแพทย์ในการยืนยัน</p>
      <p class="mb-0">แนบไฟล์ ใบรับรองแพทย์</p>
    </div>
    <div class="file" style="left: 290px; top: 545px;"><input type="file"></div> -->

<!-- ปุ่มการเลือกข้อมูล -->
<!-- <div class="file-input" style="left: 900px; top: 260px;">ประเภทการลา</div>
    <div>
      <select style="width: 159px; height: 50px; left: 900px; top: 310px; position: absolute; background: white;
            border-radius: 15px; font-size: 20px; font-family: 'Anakotmai',sans-serif; font-weight: 50;
            word-wrap: break-word" name="Type_of_eave">
        <option>ลากิจ</option>
        <option>ลาป่วย</option>
      </select>
    </div>
    <div class="file-input" style="left: 900px; top: 371px;">วิชาที่ลาได้</div>
    <div>
      <select style="width: 159px; height: 50px; left: 900px; top: 424px; position: absolute; background: white;
            border-radius: 15px;  font-size: 20px; font-family: 'Anakotmai',sans-serif; font-weight: 50;
            word-wrap: break-word" name="Leaving_subjects">
        <option>คณิตศาสตร์</option>
        <option>วิทยาศาสตร์</option>
      </select>
    </div> -->

<!-- ส่วนของเวลา -->
<!-- <div class="file-input" style="left: 790px; top: 130px;">ตั้งแต่เวลา</div>
    <div>
      <select style="width: 159px; height: 72px; left: 790px; top: 159px; position: absolute; background: white;
            border-radius: 15px; color: black; font-size: 20px; font-family: 'Anakotmai',sans-serif; font-weight: 400;
            word-wrap: break-word" name="Type_of_Leave">
        <option>10.00 - 11.00</option>
        <option>11.00 - 12.00</option>
      </select>
    </div>

    <div class="file-input" style="left: 1000px; top: 130px;">ถึงเวลา</div>
    <div>
      <select name="Type_of_eave" style="width: 159px; height: 72px; left: 1000px; top: 159px; position: absolute;
            background: white; border-radius: 15px; color: black; font-size: 20px; font-family: 'Anakotmai',sans-serif;
            font-weight: 400; word-wrap: break-word">
        <option>11.00 - 12.00</option>
        <option>12.00 - 13.00</option>
      </select>
    </div>
    <div class="file-input" style="left: 290px; top: 130px;">วันที่เริ่มลา</div>
    <div> -->
<!-- ปุ่มที่สองเปิดปฏิทิน -->
<!-- <input type="date" name="date" class=" form-control"> -->
<!-- <button id="openPopupButton2" style="left: 540px; top: 159px;">เลือกวันที่</button> -->
<!-- </div>
    <div class="file-input" style="left: 540px; top: 130px;">ถึงวันที่</div>
    <div> -->

<!-- ปุ่มแรกเปิดปฏิทิน -->
<!-- <button id="openPopupButton1" style="left: 290px; top: 159px;">เลือกวันที่</button>

    </div>
    <div>
      <button class="submit-button" style="left: 900px; top: 530px;" onclick="window.location.href = 'index.php';">ยืนยันการลา</button>
    </div> -->



<!-- ป็อปอัพท์ปฏิทิน 1 -->
<!-- <div class="calendar-popup" style="left:290px; top: 235px;" id="calendarPopup1">
      <h2 id="currentMonthYear1">ปฏิทิน 1</h2>
      <div class="calendar-header">
        <button id="prevMonthButton1">ย้อนกลับ</button>
        <span id="currentMonthYear1">เดือน ปี</span>
        <button id="nextMonthButton1">ถัดไป</button>
      </div>
      <div class="calendar" id="calendar1">
      </div>
    </div> -->

<!-- ป็อปอัพท์ปฏิทิน 2 -->
<!-- <div class="calendar-popup" style="left: 540px; top: 235px;" id="calendarPopup2">
      <h2 id="currentMonthYear2">ปฏิทิน 2</h2>
      <div class="calendar-header">
        <button id="prevMonthButton2">ย้อนกลับ</button>
        <span id="currentMonthYear2">เดือน ปี</span>
        <button id="nextMonthButton2">ถัดไป</button>
      </div>
      <div class="calendar" id="calendar2">
      </div>
    </div>


    <script src="ppop.js"></script> -->