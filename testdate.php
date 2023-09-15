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
        </form>
    </div>

    <form method="post">
        <div id="testdiv">
            <!-- wait data from ajax -->
        </div>
        <button type="submit" name="testCombo" id="testCombo" style="width: 100px;height: 50px">test</button>
    </form>

    <?php
    if (isset($_POST['testCombo'])) {
        $selected_subjects = $_POST['selected_subject'];

        if (!empty($selected_subjects) && is_array($selected_subjects)) {
            foreach ($selected_subjects as $subject_id) {
                // สร้างคำสั่ง SQL สำหรับ Insert ข้อมูลลงในฐานข้อมูล
                $sql = "INSERT INTO leave_detail (leave_id, subject_id) VALUES ('L006', '$subject_id')";
                $sql_q = mysqli_query($connect, $sql);
                echo $sql.'<br>';

                // ทำการ execute คำสั่ง SQL หรือใช้ mysqli_query หรือ PDO
                // เช่น mysqli_query($connection, $sql) หรือ $pdo->query($sql)
            }

            echo "บันทึกข้อมูลสำเร็จ";
        } else {
            echo "ยังไม่ได้เลือกรายวิชา";
        }
    }

    ?>

    <?php 
        $studentData = array(
            "STD_ID" => $_SESSION["STD_ID"],
            "STD_Name" => $_SESSION["STD_Name"],
            "STD_Lastname" => $_SESSION["STD_Lastname"],
            "STD_Birth" => $_SESSION["STD_Birth"],
            "STD_Phone" => $_SESSION["STD_Phone"],
            "Classlev_ID" => $_SESSION["Classlev_ID"],
            "Major_ID" => $_SESSION["Major_ID"],
            "Parent_Name" => $_SESSION["Parent_Name"],
            "STD_Address" => $_SESSION["STD_Address"],
            "Group_ID" => $_SESSION["Group_ID"],
            "Provinces_ID" => $_SESSION["provinces_id"],
            "District_ID" => $_SESSION["district_id"],
            "SubDistrict_ID" => $_SESSION["subdistrict_id"]
        );
        
        // แปลงข้อมูลเป็น JSON
        $studentDataJSON = json_encode($studentData);
        echo $studentDataJSON;
        ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <?php include "scriptTest.php"; ?>
</body>

</html>