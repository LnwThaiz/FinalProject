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
  include "sidebar.php";
  include "connect.php";
  include "functionTest.php";

  if (isset($_POST['submit'])) {
    $leaveid = $_POST['leaveid'];
    $startleave = $_POST['startleave'];
    $endleave = $_POST['endleave'];
    $comment = $_POST['comment'];
    $leavetype = $_POST['leavetype'];
    $attachfile = $_POST['attachfile'];
    $selected_subjects = $_POST['selected_subject'];

    $sql_leave = "INSERT INTO leaves(leave_id,leave_type_id,std_id,start_leave_date,end_leave_date,leave_comment,leave_status_id,attach_medCerti)
                  VALUES ('$leaveid','$leavetype','$STD_ID','$startleave','$endleave','$comment','LS01','$attachfile')";

    // if query success
    if (mysqli_query($connect, $sql_leave)) {

      //check data array subject is not empty
      if (!empty($selected_subjects) && is_array($selected_subjects)) {

        foreach ($selected_subjects as $subject_id) {
          // สร้างคำสั่ง SQL สำหรับ Insert ข้อมูลลงในฐานข้อมูล
          $sql = "INSERT INTO leave_detail (leave_id, subject_id) VALUES ('$leaveid', '$subject_id')";
          $sql_q = mysqli_query($connect, $sql);

          // ทำการ execute คำสั่ง SQL หรือใช้ mysqli_query หรือ PDO
          // เช่น mysqli_query($connection, $sql) หรือ $pdo->query($sql)
        }

        echo "บันทึกข้อมูลสำเร็จ";
      } else {

        echo "ยังไม่ได้เลือกรายวิชา";
      }
      echo "<script>alert('" . $sql . "')</script>";
      echo "<script>alert('insert success')</script>";
    } else {
      echo mysqli_error($connect);
    }
  }
  ?>
  <div class="content">
    <h2 class="d-flex justify-content-center my-3">บันทึกการลา</h2>
    <div>
      <div class=" container ">
        <div class=" w-100 justify-content-center ">
          <div class=" card shadow bg-200 mt-5 ">
            <div class=" card-body text-secondary" style="background-color: #F4F4F4;">
              <form method="post">
                <div class="row row-cols-2 gx-3">
                  <div class="col">
                    <div class=" row row-cols-2 ">
                      <div class=" col">
                        <label for="" class=" form-label">วันที่ลา</label>
                        <input type="date" name="startleave" id="startdate" class=" form-control" value="<?php echo currentdate(); ?>">
                      </div>
                      <div class=" col">
                        <label for="" class=" form-label">ถึงวันที่</label>
                        <input type="date" name="endleave" id="enddate" class=" form-control" value="<?php echo currentdate(); ?>">
                      </div>
                    </div>
                    <div class=" mt-3">
                      <label for="">เหตุผลการลา</label>
                      <textarea name="comment" id="comment" class=" form-control w-50" placeholder="กรอกเหตุผลการลาเช่น ไม่สบาย, ทำธุระต่างจังหวัด"></textarea>
                    </div>
                    <div class=" mt-3">
                      <label for="">ประเภทการลา</label>
                      <?php
                      $sql_type = "SELECT * FROM leave_type";
                      $query_type = mysqli_query($connect, $sql_type);
                      ?>
                      <select name="leavetype" id="leavetype" class=" form-control">
                        <option value="" selected disabled>กรุณาเลือกประเภทการลา</option>
                        <?php
                        while ($type_fa = mysqli_fetch_assoc($query_type)) {
                        ?>
                          <option value="<?= $type_fa['leave_type_id'] ?>"><?php echo $type_fa['leave_type_name'] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <div class="mt-3">
                      <label for="" class=" form-label">แนปไฟล์ใบรับรองแพทย์</label>
                      <input type="file" class=" form-control" name="attachfile" id="attachfile">
                      <label for="" class=" form-label text-danger mt-2">** หมายเหตุ ในกรณีที่ลาป่วย 3
                        วันขึ้นไปให้แนบรูปใบรับรองแพทย์ **</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class=" d-flex align-content-end flex-column h-100">
                      รายวิชาที่สามารถลาได้
                      <div class=" table-responsive">
                        <div class="overflow-auto mb-5" id="subject" style="height: 20rem;;">

                        </div>
                      </div>
                      <div class=" mt-auto w-100 d-flex justify-content-end">
                        <input type="hidden" name="leaveid" value="<?php echo generateNewProvinceId($connect); ?>">
                        <button class=" btn btn-success px-5" type="submit" name="submit">ยืนยัน</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  function generateNewProvinceId($conn)
  {
    $increment = 1;

    $sql_max_id = "SELECT MAX(leave_id) AS max_id FROM leaves";
    $result = mysqli_query($conn, $sql_max_id);
    $row = mysqli_fetch_assoc($result);
    $lastLeaveId = $row['max_id'];

    if ($lastLeaveId !== null) {
      $numberPart = (int)substr($lastLeaveId, 1);
      $newNumberPart = $numberPart + $increment;

      $newLeaveId = "L" . str_pad($newNumberPart, 3, '0', STR_PAD_LEFT);
    }
    return $newLeaveId;
  }
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <?php include "script.php"; ?>
</body>

</html>