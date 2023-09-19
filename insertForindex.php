<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "connect.php";

if (isset($_POST['submit'])) {
    $leaveid = $_POST['leaveid'];
    $startleave = $_POST['startleave'];
    $endleave = $_POST['endleave'];
    $comment = $_POST['comment'];
    $leavetype = $_POST['leavetype'];
    $attachfile = $_POST['attachfile'];
    $selected_subjects = $_POST['selected_subject'];

    $sql_leave = sprintf("INSERT INTO leaves(leave_id,leave_type_id,std_id,start_leave_date,end_leave_date,leave_comment,leave_status_id,attach_medCerti)
                VALUES ('$leaveid','$leavetype','$STD_ID','$startleave','$endleave','$comment','LS01','$attachfile')");

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
            echo "<script>";
            echo "Swal.fire({
                    title: 'บันทึกสำเร็จ',
                    text: 'ข้อมูลถูกบันทึกลงในฐานข้อมูลแล้ว',
                    icon: 'success'
                    });";
            echo "</script>";
        } else {
            echo "ยังไม่ได้เลือกรายวิชา";
        }
    } else {
        echo mysqli_error($connect);
    };
}
