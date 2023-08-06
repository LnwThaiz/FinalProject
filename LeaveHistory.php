<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.table-container {
    padding-top : 50px;
    width : 90%;
    display: block;
    margin-left: auto;
    margin-right: auto
}

table {
  font-family: arial, sans-serif;
}

thead {
    align: center;
}

</style>

<body>

    <?php 
        include "navbar.php"
    ?>
    
    <div class="table-container">
    <table>
        <thead>
            <tr>
                <th>วันที่ลง</th>
                <th>การลา</th>
                <th>วันที่ลา</th>
                <th>สถานะ</th>
                <th>รายละเอียด</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>23/05/2566</td>
                <td>ลาป่วย</td>
                <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                <td>รออนุมัติ</td>
                <td></td>
            </tr>
        </tbody>
    </table>
  
</body>
</html>