<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .table thead tr th {
        background-color: #BA0900;
        color: #ffffff;
        border: 1px solid white;
        height: 50px;
        font-weight: bold;
    }

    .table tbody tr td {
        background-color: white;
        border: 1px solid white;
    }
</style>

<body>

    <?php
    include "navbar.php";
    include "connect.php";
    include "sidebar.php";

    $query = "SELECT leave_id, write_date, start_leave_date ,
              end_leave_date, lt.leave_type_id, lt.leave_type_name , 
              leave_comment , ls.leave_status_id, ls.leave_status_name 
              FROM leaves
              inner JOIN leave_type lt on leaves.leave_type_id=lt.leave_type_id 
              inner join leave_status ls on leaves.leave_status_id=ls.leave_status_id 
              WHERE std_id = '$STD_ID'
              order by write_date";
    $result = mysqli_query($connect, $query);
    ?>

    <div class="content">
        <H3 class="mt-5" style="margin-left: 18rem;">ประวัติการลา</H3>

        <div class="container">
            <table class="table table-striped m-0" id="leaveHis">
                <thead>
                    <tr class="align-middle text-center text-white" style="height: 50px">
                        <th>วันที่ลง</th>
                        <th>การลา</th>
                        <th>วันที่ลา</th>
                        <th>สถานะ</th>
                        <th>รายละเอียด</th>
                    </tr>
                </thead>
                <tbody class="text-start">
                    <?php
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <tr class="align-middle text-center">
                            <td class="text-center"><?php echo $row['write_date'] ?></td>
                            <td class="text-center"><?php echo $row['leave_type_name'] ?></td>
                            <td class="text-center"><?php echo $row['start_leave_date'] . " - " . $row['end_leave_date'] ?></td>

                            <!-- รออนุมัติ -->
                            <?php if ($row['leave_status_id'] == "LS01") { ?>

                                <td class="text-center">
                                    <div class=" rounded-3 bg-warning text-white d-flex align-items-center justify-content-center" style="height: 2.5rem;">
                                        <label for=""><?php echo $row['leave_status_name'] ?></label>
                                    </div>
                                </td>

                                <!-- อนุมัติแล้ว -->
                            <?php } elseif ($row['leave_status_id'] == "LS02") { ?>

                                <td class="text-center">
                                    <div class=" rounded-3 bg-success text-white d-flex align-items-center justify-content-center" style="height: 2.5rem;">
                                        <label for=""><?php echo $row['leave_status_name'] ?></label>
                                    </div>
                                </td>

                                <!-- ยกเลิก -->
                            <?php } else { ?>

                                <td class="text-center">
                                    <div class=" rounded-3 bg-danger text-white d-flex align-items-center justify-content-center" style="height: 2.5rem;">
                                        <label for=""><?php echo $row['leave_status_name'] ?></label>
                                    </div>
                                </td>
                            <?php } ?>

                            <td class="text-center">
                                <button type="button" class="btn " style="background-color: #BA0900; color:#ffffff" data-bs-toggle="modal" data-bs-target="#detail<?php echo $row['leave_id'] ?>"><i class="bi bi-info-circle-fill fs-5"></i></button>
                                <div class="modal fade" id="detail<?php echo $row['leave_id'] ?>" data-bs-keyboard="false" tabindex="-1">
                                    <div class="modal-dialog modal-dialog-centered " style="max-width: 150vh;">
                                        <div class="modal-content" style="max-width: 150vh;font-size: 0.9rem;">
                                            <div class="modal-header d-flex flex-column border-0">
                                                <div class="d-flex justify-content-between w-100 px-3 align-items-center">
                                                    <i class="bi bi-file-text-fill fs-1"></i>
                                                    <h1 class="modal-title fs-4" id="staticBackdropLabel">รายละเอียดการลา</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="w-100">
                                                    <hr class="border border-3 border-dark mx-3 opacity-100">
                                                </div>
                                            </div>
                                            <div class="modal-body text-start">
                                                <?php if ($row['leave_status_id'] == "LS01") { ?>
                                                    <div class="d-flex justify-content-end text-nowrap mt-0 mb-3">
                                                        <div class="rounded-3 bg-warning d-flex align-items-center text-white" style="height: 2.5rem;">
                                                            <div class="px-3">
                                                                <div class="spinner-border" role="status" style="width: 20px;height: 20px;"></div>
                                                            </div>
                                                            <label for="">สถานะการลา : </label>
                                                            <label for="" class="px-2"><?= $row['leave_status_name'] ?></label>
                                                        </div>
                                                    </div>
                                                <?php } elseif (($row['leave_status_id'] == "LS02")) { ?>
                                                    <div class="d-flex justify-content-end text-nowrap mt-0 mb-3">
                                                        <div class=" rounded-3 bg-success d-flex align-items-center text-white" style="height: 2.5rem;">
                                                            <div class="px-3">
                                                                <i class="bi bi-check-lg fs-3"></i>
                                                            </div>
                                                            <label for="">สถานะการลา :</label>
                                                            <label for="" class="px-2"><?= $row['leave_status_name'] ?></label>
                                                        </div>
                                                    </div>
                                                <?php } else { ?>
                                                    <div class="d-flex justify-content-end text-nowrap mt-0 mb-3">
                                                        <div class=" rounded-3 bg-danger d-flex align-items-center text-white" style="height: 2.5rem;">
                                                            <div class="px-3">
                                                                <i class="bi bi-x-circle fs-3"></i>
                                                            </div>
                                                            <label for="">สถานะการลา :</label>
                                                            <label for="" class="px-2"><?= $row['leave_status_name'] ?></label>
                                                        </div>
                                                    </div>
                                                <?php } ?>
                                                <div class=" align-content-md-start">
                                                    <div class="row ">
                                                        <div class="col">
                                                            <div class="row row-cols-3 row-cols-lg-3 row-cols-md-2 row-cols-xs-1">
                                                                <div class=" col">
                                                                    <label for="">วันที่เริ่มลา :</label>
                                                                    <input type="date" class="form-control " value="<?php echo $row['start_leave_date'] ?>" disabled>
                                                                </div>
                                                                <div class="col">
                                                                    <label for="">ถึงวันที่ :</label>
                                                                    <input type="date" class="form-control" value="<?php echo $row['end_leave_date'] ?>" disabled>
                                                                </div>
                                                                <div class="col mt-lg-0 mt-md-3">
                                                                    <label for="">ประเภทการลา :</label>
                                                                    <?php
                                                                    $leave_type = $row['leave_type_id'];
                                                                    $sql_type = "SELECT * From leave_type Where leave_type_id = '$leave_type'";
                                                                    $q_type = mysqli_query($connect, $sql_type);
                                                                    $f_type = mysqli_fetch_assoc($q_type);
                                                                    ?>
                                                                    <input type="text" class=" form-control" value="<?= $f_type['leave_type_name'] ?>" disabled>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="">เหตุผลการลา :</label>
                                                                <textarea name="" id="" class=" form-control w-100" disabled><?php echo $row['leave_comment'] ?></textarea>
                                                            </div>
                                                            <div class="mt-3">
                                                                <label for="" class=" form-label">รูปภาพที่แนบ :</label>
                                                                <input type="file" class=" form-control" disabled>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <div class="mt-3 d-flex flex-column w-100 justify-content-center">
                                                            วิชาที่ลา :
                                                            <div class="table-responsive">
                                                                <div class="overflow-y-scroll">
                                                                    <div class="table border border-1" style="height: 8rem;">
                                                                        <?php
                                                                        // var_dump($_SESSION['selectedDays']);
                                                                        // for ($i=0;$i<count($_SESSION['selectedDays']);$i++){
                                                                        //     echo $_SESSION['selectedDays'][$i];
                                                                        // }
                                                                        // foreach ($selectedDays as $selectedDay) {
                                                                        //     echo $selectedDay;
                                                                        // }
                                                                        ?>
                                                                        <table class=" table">
                                                                            <thead>
                                                                                <tr>
                                                                                    <td class=" fw-medium">รหัสวิชา</td>
                                                                                    <td class=" fw-medium">ชื่อวิชา</td>
                                                                                    <td class=" fw-medium">เวลา</td>
                                                                                    <td class=" fw-medium">ครูผู้สอน</td>
                                                                                    <td class=" fw-medium text-center">สถานะ</td>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
                                                                                $leave_id = $row['leave_id'];
                                                                                echo '<input type="hidden" name="leave_id" id="leave_id" value="' . $leave_id . '">';
                                                                                $sql_lDetail = "SELECT 
                                                                            leaves.leave_id, 
                                                                            leave_detail.subject_id, 
                                                                            subject.Subject_Name, 
                                                                            study_block.SB_time, 
                                                                            subject_detail.teacher_id, 
                                                                            teacher.Teacher_Name,
                                                                            teacher.Teacher_Lastname,
                                                                            leave_detail.admit 
                                                                        FROM `leaves`
                                                                        left join leave_detail on leaves.leave_id = leave_detail.leave_id
                                                                        left join study_block on leave_detail.sb_id = study_block.SB_ID
                                                                        left join subject on leave_detail.subject_id = subject.Subject_ID
                                                                        left JOIN subject_detail on subject.Subject_ID = subject_detail.subject_id
                                                                        LEFT JOIN teacher on subject_detail.teacher_id = teacher.Teacher_ID
                                                                        where leaves.leave_id = '$leave_id'
                                                                        order by leaves.leave_id";
                                                                                $q_lDetail = mysqli_query($connect, $sql_lDetail);
                                                                                while ($f_lDetail = mysqli_fetch_assoc($q_lDetail)) {;
                                                                                ?>
                                                                                    <tr>
                                                                                        <td><?= $f_lDetail['subject_id'] ?></td>
                                                                                        <td><?= $f_lDetail['Subject_Name'] ?></td>
                                                                                        <td><?= $f_lDetail['SB_time'] ?></td>
                                                                                        <td><?php echo $f_lDetail['Teacher_Name'] . " " . $f_lDetail['Teacher_Lastname'] ?></td>
                                                                                        <?php
                                                                                        if ($f_lDetail['admit'] == 0) {
                                                                                        ?>

                                                                                            <td>
                                                                                                <div class=" rounded-3 bg-warning text-white d-flex align-items-center justify-content-center" style="height: 1.5rem;">
                                                                                                    <label for="">รออนุมัติ</label>
                                                                                                </div>
                                                                                            </td>

                                                                                        <?php } else { ?>
                                                                                            <td>
                                                                                                <div class=" rounded-3 bg-success text-white d-flex align-items-center justify-content-center" style="height: 1.5rem;">
                                                                                                    <label for="">รออนุมัติ</label>
                                                                                                </div>
                                                                                            </td>
                                                                                        <?php } ?>
                                                                                    </tr>
                                                                                <?php } ?>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php if ($row['leave_status_id'] != 'LS03') { ?>
                                                <div class="modal-footer d-flex justify-content-between border-0">
                                                    <button type="button" class="btn btn-dark">พิมพ์เอกสาร</button>
                                                    <?php if ($row['leave_status_id'] != 'LS02') { ?>
                                                        <div>
                                                            <button type="button" class="btn btn-danger" onclick="confirmCancellation()">ยกเลิกการลา</button>
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <?php include "script.php"; ?>
    <script>
        new DataTable('#leaveHis');
    </script>
</body>

</html>