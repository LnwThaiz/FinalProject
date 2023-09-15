<?php
include "connect.php";
include "functionTest.php";
// Testdate
if (isset($_POST['function']) && $_POST['function'] == 'startdate') {
    $Group_ID = $_SESSION["Group_ID"];
    $startdate_id = $_POST['startdate_id'];

    $sql_check_date = "SELECT sc.schedule_id, sc.semester_id, se.start_semester, se.end_semester, sc.group_id from schedules sc
                       Inner join Semester se on sc.semester_id = se.semester_id
                       Inner join Groups g on sc.group_id = g.group_id
                       WHERE g.group_id = '$Group_ID'";

    $query_check_date = mysqli_query($connect, $sql_check_date);
    echo $sql_check_date;
    $fa_check_date = mysqli_fetch_assoc($query_check_date);
    $start_semester = $fa_check_date['start_semester'];
    $end_semester = $fa_check_date['end_semester'];

    if ($startdate_id < $start_semester or $startdate_id > $end_semester) {
        echo "กรุณากรอกวันที่ภายในเทอมที่เรียนเท่านั้น";
    } else {
        // Convert the selected date to Thai day of the week using your existing function
        $thaiDateString = date("d-M-Y", strtotime($startdate_id));
        $thaiDayOfWeek = checkDays(strtotime($startdate_id));


        // Perform the SQL query to fetch schedule data
        $sql = "SELECT sd.Subject_ID, s.Subject_Name, d.Day_name, sb.SB_time
        FROM `schedule_detail` sd
        INNER JOIN subject s ON sd.Subject_ID = s.Subject_ID
        INNER JOIN days d ON sd.Day_ID = d.Day_ID
        INNER JOIN study_block sb ON sd.SB_ID = sb.SB_ID
        WHERE d.Day_name LIKE '%$thaiDayOfWeek%'
        ORDER BY d.Day_ID , sb.SB_ID";

        $result = mysqli_query($connect, $sql);

        // Generate the HTML for the schedule table
        if (mysqli_num_rows($result) > 0) {
            echo $thaiDayOfWeek . ' ที่ ' . $thaiDateString;
            echo '<table>
        <thead>
            <tr>
                <td class=" fw-medium">รหัสวิชา</td>
                <td class=" fw-medium">ชื่อวิชา</td>
                <td class=" fw-medium">เวลา</td>
                <td class=" fw-medium text-center">เลือกวิชาที่จะลา</td>
            </tr>
        </thead>
        <tbody>';

            while ($row = mysqli_fetch_assoc($result)) {
                echo '<tr>';
                echo '<td>' . $row['Subject_ID'] . '</td>';
                echo '<td>' . $row['Subject_Name'] . '</td>';
                echo '<td>' . $row['SB_time'] . '</td>';
                echo '<td class="text-center><input class="form-check-input" type="checkbox" name="selected_subject[]" value="' . $row['Subject_ID'] . '"></td>';
                echo '</tr>';
            }
            echo '</tbody></table>';
        } else {
            // Handle the case where there are no results.
            echo 'ไม่มีข้อมูลตารางเรียน';
        }
    }
}

if (isset($_POST['function']) && $_POST['function'] == 'enddate') {
    $startdate_id = $_POST['startdate_id'];
    $enddate_id = $_POST['enddate_id'];

    $Starttimestamp = strtotime($startdate_id);
    $thaiDateString = date("d-M-Y", $Starttimestamp);

    $Daybetween = countDays($startdate_id, $enddate_id);

    // Perform the SQL query and display schedule data for each day
    for ($count = 0; $count <= $Daybetween; $count++) {
        $thaiDayOfWeek = checkDays(strtotime($thaiDateString));

        $testsql = "SELECT sd.Subject_ID, s.Subject_Name, d.Day_name, sb.SB_time FROM `schedule_detail` sd 
                    INNER JOIN subject s ON sd.Subject_ID = s.Subject_ID
                    INNER JOIN days d ON sd.Day_ID = d.Day_ID
                    INNER JOIN study_block sb ON sd.SB_ID = sb.SB_ID
                    WHERE d.Day_name LIKE '%$thaiDayOfWeek%' 
                    ORDER BY d.Day_ID, sb.SB_ID;";
        $testquery = mysqli_query($connect, $testsql);

        if (mysqli_num_rows($testquery) > 0) {
            // Generate the HTML for the schedule table
            echo $thaiDayOfWeek . ' ที่ ' . $thaiDateString;
            echo '<table>
            <thead>
                <td class=" fw-medium">รหัสวิชา</td>
                <td class=" fw-medium">ชื่อวิชา</td>
                <td class=" fw-medium">เวลา</td>
                <td class=" fw-medium text-center">เลือกวิชาที่จะลา</td>
            </thead>
            <tbody>';

            while ($row = mysqli_fetch_assoc($testquery)) {
                echo '<tr>';
                echo '<td>' . $row['Subject_ID'] . '</td>';
                echo '<td>' . $row['Subject_Name'] . '</td>';
                echo '<td>' . $row['SB_time'] . '</td>';
                echo '<td class="text-center"><input class="form-check-input" type="checkbox" name="selected_subject[]" value="' . $row['Subject_ID'] . '"></td>';
                echo '</tr>';
            }

            $thaiDateString = date("d-M-Y", strtotime($thaiDateString . "+1 days"));
            echo '</tbody></table><br>';
        } else {
            $thaiDateString = date("d-M-Y", strtotime($thaiDateString . "+1 days"));
        }
    }
}
