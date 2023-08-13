<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
      <!-- Sidebar -->
      <div class="sidebar" id="sidebar">
      <a href="User.php" class="text-white no-underline"> <img src="./img/Edituser-W.png" width="50" > ข้อมูลผู้ใช้</a>
      <a href="LeaveHistory.php" class="text-white no-underline "><i class="fas fa-history custom-width" ></i> ประวัติการลา</a>
      <a href="schedule.php" class="text-white no-underline"> <i class="bi bi-calendar-fill icon-calendar custom-width"></i> ตารางเรียน</a>
      <a href="User.php" class="text-white no-underline"><i class="bi bi-person-circle fs-5"></i>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo "$STD_Name $STD_Lastname"; ?></a>
      <a href="Login.php" class="text-white no-underline">Logout</a>
    </div>


</body>
</html>