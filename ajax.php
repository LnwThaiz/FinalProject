<?php 
include "connect.php";
if (isset($_POST['function']) && $_POST['function'] == 'provinces'){
    $provinces_id = $_POST['provinces_id'];
    $sql = "SELECT * from district WHERE provinces_id=$provinces_id";
    $query = mysqli_query($connect, $sql);
    echo '<option selected disabled>-กรุณาเลือกตำบล-</option>';
    foreach($query as $data){
        echo '<option value="'.$data['district_id'].'">'.$data['d_name_th'].'</option>';
    }
}
if (isset($_POST['function']) && $_POST['function'] == 'districts'){
    $district_id = $_POST['district_id'];
    $sql = "SELECT * from subdistrict WHERE district_id=$district_id";
    $query = mysqli_query($connect, $sql);
    echo '<option selected disabled>-กรุณาเลือกอำเภอ-</option>';
    foreach($query as $data){
        echo '<option value="'.$data['subdistrict_id'].'">'.$data['s_name_th'].'</option>';
    }
}
if (isset($_POST['function']) && $_POST['function'] == 'subdistricts'){
    $subdistrict_id = $_POST['subdistrict_id'];
    $sql = "SELECT * from subdistrict WHERE subdistrict_id=$subdistrict_id";
    $query = mysqli_query($connect, $sql);
    $result = mysqli_fetch_assoc($query);
    echo $result['zip_code'];
}


?>