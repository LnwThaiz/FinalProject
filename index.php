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

  if (isset($_POST['save'])) {
    $leaveid = $_POST['leaveid'];
    $startleave = $_POST['startleave'];
    $endleave = $_POST['endleave'];
    $start_time = $_POST['start_time'];
    $end_time = $_POST['end_time'];
    $comment = $_POST['comment'];
    $leavetype = $_POST['leavetype'];
    $attachfile = $_POST['attachfile'];

    $sql_leave = "INSERT INTO leaves(leave_id,leave_type_id,std_id,start_leave_date,end_leave_date,leave_comment,leave_status_id,attach_medCerti)
                  VALUES ('$leaveid','$leavetype','$STD_ID','$startleave $start_time','$endleave $end_time','$comment','LS01','$attachfile')";
    if (mysqli_query($connect, $sql_leave)) {
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
              <form action="">
                <div class="row row-cols-2 gx-3">
                  <div class="col">
                    <div class=" row row-cols-2 ">
                      <div class=" col">
                        <label for="" class=" form-label">วันที่ลา</label>
                        <input type="date" name="startleave" class=" form-control" value="<?php echo currentdate(); ?>">
                      </div>
                      <div class=" col">
                        <label for="" class=" form-label">ถึงวันที่</label>
                        <input type="date" name="enddate" class=" form-control" value="<?php echo currentdate(); ?>">
                      </div>
                    </div>
                    <div class=" mt-3">
                      <label for="">เหตุผลการลา</label>
                      <textarea name="comment" id="" class=" form-control w-50" placeholder="กรอกเหตุผลการลาเช่น ไม่สบาย, ทำธุระต่างจังหวัด"></textarea>
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
                          <option value="<?php $type_fa['leave_type_id'] ?>"><?php echo $type_fa['leave_type_name'] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>
                    <div class="mt-3">
                      <label for="" class=" form-label">แนปไฟล์ใบรับรองแพทย์</label>
                      <input type="file" class=" form-control" name="attachfile">
                      <label for="" class=" form-label text-danger mt-2">** หมายเหตุ ในกรณีที่ลาป่วย 3
                        วันขึ้นไปให้แนบรูปใบรับรองแพทย์ **</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class=" d-flex align-content-end flex-column h-100">
                      รายวิชาที่สามารถลาได้
                      <div class=" table-responsive">
                        <div class="overflow-auto mb-5" id="testdiv" style="height: 20rem;;">

                        </div>
                      </div>
                      <div class=" mt-auto w-100 d-flex justify-content-end">
                        <input type="hidden" name="leaveid" value="<?php echo generateNewProvinceId($connect); ?>">
                        <button class=" btn btn-success px-5" type="submit">ยืนยัน</button>
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
</body>

</html>