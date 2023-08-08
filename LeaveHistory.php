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

.content-table {
    /* font-family: MiBlackberry; */
    border-collapse : collapse;
    margin: 25px 0;
    font-size: 0.9em;
    width: 90%;
}

.content-table thead tr {
    background-color: #454ABB;
    color: #ffffff;
    height: 50px;
    font-weight: bold;
}

</style>

<body>

    <?php 
        include "navbar.php"
    ?>
    
    <div class="table-container w-100 d-flex justify-content-center">
        <table class="content-table">
            <thead>
                <tr class="align-middle text-center">
                    <th>วันที่ลง</th>
                    <th>การลา</th>
                    <th>วันที่ลา</th>
                    <th>สถานะ</th>
                    <th>รายละเอียด</th>
                </tr>
            </thead>
            <tbody class="align-middle text-center">
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
  
</body>
</html>