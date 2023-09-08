<?php
include "connect.php";
include "functionTest.php";

//testdate
if (isset($_POST['function']) && $_POST['function'] == 'startdate') {
    $startdate_id = $_POST['startdate_id'];

    // Convert the selected date to Thai day of the week using your existing function
    $thaiDayOfWeek = checkDays(strtotime($startdate_id));

    // Perform the SQL query to fetch schedule data
    $sql = "SELECT sd.Schedule_ID, s.Subject_Name, d.Day_name, sb.SB_time, Classroom 
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
                    <th>Schedule ID</th>
                    <th>Subject Name</th>
                    <th>Day Name</th>
                    <th>SB Time</th>
                    <th>Classroom</th>
                </tr>
            </thead>
            <tbody>';

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['Schedule_ID'] . '</td>';
            echo '<td>' . $row['Subject_Name'] . '</td>';
            echo '<td>' . $row['Day_name'] . '</td>';
            echo '<td>' . $row['SB_time'] . '</td>';
            echo '<td>' . $row['Classroom'] . '</td>';
            echo '</tr>';
        }
        echo '</tbody></table>';
    } else {
    }
}

if (isset($_POST['function']) && $_POST['function'] == 'enddate') {
    $startdate_id = $_POST['startdate_id'];
    $enddate_id = $_POST['enddate_id'];

    $Starttimestamp = strtotime($startdate_id);
    $thaiDateString = date("Y-m-d", $Starttimestamp);
    
    $Daybetween = countDays($startdate_id, $enddate_id);

    // Convert the selected date to Thai day of the week using your existing function
    $thaiDayOfWeek = checkDays(strtotime($startdate_id));

    // Generate the HTML for the schedule table
        echo '<table>
            <thead>
                <tr>
                    <th>Schedule ID</th>
                    <th>Subject Name</th>
                    <th>Day Name</th>
                    <th>SB Time</th>
                    <th>Classroom</th>
                </tr>
            </thead>
            <tbody>';

        // Perform the SQL query to fetch schedule data
        for ($count = 0; $count <= $Daybetween; $count++) {

            $testsql =  "SELECT sd.Schedule_ID, s.Subject_Name, d.Day_name, sb.SB_time, Classroom FROM `schedule_detail` sd 
                        inner join subject s on sd.Subject_ID = s.Subject_ID
                        inner join days d on sd.Day_ID = d.Day_ID
                        inner join study_block sb on sd.SB_ID = sb.SB_ID
                        WHERE d.Day_name like '%$thaiDayOfWeek%' ORDER BY d.Day_ID;";
            $testquery = mysqli_query($connect, $testsql);

            while ($row = mysqli_fetch_assoc($testquery)) {
                echo '<tr>';
                echo '<td>' . $row['Schedule_ID'] . '</td>';
                echo '<td>' . $row['Subject_Name'] . '</td>';
                echo '<td>' . $row['Day_name'] . '</td>';
                echo '<td>' . $row['SB_time'] . '</td>';
                echo '<td>' . $row['Classroom'] . '</td>';
                echo '</tr>';
            }
            $thaiDateString = date("d-m-Y", strtotime($thaiDateString . "+1 days"));
            $thaiDayOfWeek = checkDays(strtotime($thaiDateString));
        }
        echo '</tbody></table>';
    }
