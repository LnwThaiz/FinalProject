<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.table-container {
    padding-top : 10px;
    display: block;
    margin-left: auto;
    margin-right: auto
}

h3 {
    padding-top : 50px;
    margin: 73px;
}

.table {
    border-collapse : collapse;
    margin: 25px 0;
    font-size: 0.9em;
    width: 90%;
}

.table thead tr th{
    background-color: #454ABB;
    color: #ffffff;
    border: 1px solid white;
    height: 50px;
    font-weight: bold;
}

.table tbody tr td{
    background-color: white;
    border: 1px solid white;
}



</style>

<body>

    <?php 
        include "navbar.php"
    ?>

    <H3 class="align-left text-left mb-0">ประวัติการลา</H3>
    <div class="table-container w-100 d-flex justify-content-center mt-0">
        <table class="table table-striped m-0" style="width: 90%;">
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
                    <td><a href="" class="btn p-0 border-0 shadow-none"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td><a href="" class="btn p-0 border-0 shadow-none"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td><a href="" class="btn p-0 border-0 shadow-none"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td><a href="" class="btn p-0 border-0 shadow-none"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td><a href="" class="btn p-0 border-0 shadow-none"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
            </tbody>
        </table>
    </div>
  
</body>
</html>