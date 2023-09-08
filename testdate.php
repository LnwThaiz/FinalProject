<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .input-group-append {
        cursor: pointer;
    }
</style>

<body>
    <?php
    include "navbar.php";
    include "connect.php";
    include "functionTest.php";
    ?>
    <div>
        <form method="post" id="dateform">
            <input type="date" class="form-control" style="width: 250px" name="startdate" id="startdate" value="<?php echo currentdate(); ?>"><br><br>
            <input type="date" class="form-control" style="width: 250px" name="enddate" id="enddate" value="<?php echo currentdate(); ?>"><br><br>
            <button type="submit" name="testdate" id="testdate" style="width: 100px;height: 50px">บันทึก</button>
        </form>

        <?php
        if (isset($_POST['testdate'])) {
            // Form has been submitted
            $startdate = $_POST['startdate']; // แทนค่าด้วยวันที่จริง
            $enddate = $_POST['enddate'];

            $Daysbetween = countDays($startdate, $enddate);

            $Starttimestamp = strtotime($startdate);
            $thaiDateString = date("Y-m-d", $Starttimestamp);

            $thaiDayOfWeek = checkDays($Starttimestamp);

            // Display the table only when the form is submitted
        ?>
            <table>
                <thead>
                    <tr>
                        <th>Schedule ID</th>
                        <th>Subject Name</th>
                        <th>Day Name</th>
                        <th>SB Time</th>
                        <th>Classroom</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($count = 0; $count <= $Daysbetween; $count++) {

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
                        $getloopday = strtotime($thaiDateString);
                        $thaiDayOfWeek = checkDays($getloopday);
                    }
                    ?>
                </tbody>
            </table>
        <?php
        } // End of if (isset($_POST['testdate'])) 
        ?>

        <div id="testdiv">

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <?php include "scriptTest.php"; ?>
</body>

</html>