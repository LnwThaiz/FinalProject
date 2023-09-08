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
}
