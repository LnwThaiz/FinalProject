<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ข้อมูลส่วนตัว</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
<?php
   include "navbar.php";
// Assuming you have already fetched data from the database and stored it in variables.
// For example:
// $STD_ID = ...;
// $Classlev_ID = ...;
// $STD_Name = ...;
// $STD_Lastname = ...;
// $STD_Birth = ...;
// $STD_Address = ...;
// $Major_ID = ...;
// $Group_ID = ...;
// $STD_Phone = ...;
// $Parent_Name = ...;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the updated values from the form submission
    $updatedSTD_Birth = $_POST['birthdate'];
    $updatedSTD_Address = $_POST['address'];
    $updatedSTD_Phone = $_POST['phone-number'];
    $updatedParent_Name = $_POST['parent-name'];

    // Update the data in the database using SQL
    // Replace 'your_database_host', 'your_username', 'your_password', and 'your_database_name' with your actual database credentials
    $conn = new mysqli('localhost', 'root', '', 'leavedata');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Perform the update query
    $sql = "UPDATE std SET STD_Birth = '$updatedSTD_Birth', STD_Address = '$updatedSTD_Address', STD_Phone = '$updatedSTD_Phone', Parent_Name = '$updatedParent_Name' WHERE STD_ID = '$STD_ID'";

    if ($conn->query($sql) === TRUE) {
        // If the update is successful, you may redirect to the same page to display the updated data
        echo"$sql";
        exit;
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>

<!-- Your HTML content here -->
<!-- Add the form and set its action to the same page for form submission -->
<form method="POST">
    <div class="form-group">
        <label for="birthdate">วันเดือนปีเกิด :</label>
        <input type="text" class="form-control" id="birthdate" name="birthdate" value="<?php echo "$STD_Birth"; ?>">
    </div>
    <div class="form-group">
        <label for="address">ที่อยู่ :</label>
        <input type="text" class="form-control" id="address" name="address" value="<?php echo "$STD_Address"; ?>">
    </div>
    <div class="form-group">
        <label for="phone-number">เบอร์โทร :</label>
        <input type="text" class="form-control" id="phone-number" name="phone-number" value="<?php echo "$STD_Phone"; ?>">
    </div>
    <div class="form-group">
        <label for="parent-name">ชื่อผู้ปกครอง :</label>
        <input type="text" class="form-control" id="parent-name" name="parent-name" value="<?php echo "$Parent_Name"; ?>">
    </div>
    <!-- Add a submit button to submit the form -->
    <button type="submit" class="btn btn-success mr-3">บันทึกการแก้ไข</button>
</form>

</body>

</html>
