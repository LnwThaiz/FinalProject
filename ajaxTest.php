<?php
include "connect.php";
include "functionTest.php";

// Testdate
if (isset($_POST['function']) && $_POST['function'] == 'startdate') {
    $startdate_id = $_POST['startdate_id'];

    // Convert the selected date to Thai day of the week using your existing function
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
        echo '<table>
            <thead>
                <tr>
                    <th>Subject ID</th>
                    <th>Subject Name</th>
                    <th>Day Name</th>
                    <th>SB Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Subject_ID'] . '</td>';
            echo '<td>' . $row['Subject_Name'] . '</td>';
            echo '<td>' . $row['Day_name'] . '</td>';
            echo '<td>' . $row['SB_time'] . '</td>';
            echo '<td class="text-center"><input type="checkbox" name="selected_subject[]" value="' . $row['Subject_ID'] . '"></td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
        // Handle the case where there are no results.
        echo 'ไม่มีข้อมูลตารางเรียน';
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

        // Generate the HTML for the schedule table
        echo $thaiDayOfWeek.' ที่ '.$thaiDateString;
        echo '<table>
            <thead>
                <th>รหัสวิชา</th>
                <th>รายชื่อวิชา</th>
                <th>เวลา</th>
                <th>รายการที่ต้องการลา</th>
            </thead>
            <tbody>';

        while ($row = mysqli_fetch_assoc($testquery)) {
            echo '<tr>';
            echo '<td>' . $row['Subject_ID'] . '</td>';
            echo '<td>' . $row['Subject_Name'] . '</td>';
            echo '<td>' . $row['SB_time'] . '</td>';
            echo '<td class="text-center"><input type="checkbox" name="selected_subject[]" value="' . $row['Subject_ID'] . '"></td>';
            echo '</tr>';
        }

        $thaiDateString = date("d-M-Y", strtotime($thaiDateString . "+1 days"));
        echo '</tbody></table><br>';
    }
}
