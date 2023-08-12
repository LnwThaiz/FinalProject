<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .table-container {
        padding-top: 10px;
        display: block;
        margin-left: auto;
        margin-right: auto
    }

    h3 {
        padding-top: 50px;
        margin: 73px;
    }

    .table {
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        width: 90%;
    }

    .table thead tr th {
        background-color: #454ABB;
        color: #ffffff;
        border: 1px solid white;
        height: 50px;
        font-weight: bold;
    }

    .table tbody tr td {
        background-color: white;
        border: 1px solid white;
    }

</style>

<body>

    <?php
    include "navbar.php"
    ?>

    <?php

    ?>
    <H3 class="align-left text-left mb-0">ประวัติการลา</H3>
    <div class="table-container w-100 d-flex justify-content-center mt-0">
        <table class="table table-striped m-0" style="width: 90%; font-size: 15px">
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
                    <td><a href="" class="btn p-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td><a href="" class="btn p-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td><a href="" class="btn p-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td><a href="" class="btn p-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
                <tr>
                    <td>23/05/2566</td>
                    <td>ลาป่วย</td>
                    <td>25/05/66 09:00 - 26/05/2566 18:00</td>
                    <td>รออนุมัติ</td>
                    <td><a href="" class="btn p-0 border-0 shadow-none" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-info-circle-fill fs-5"></i></a></td>
                </tr>
            </tbody>
        </table>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-fullscreen py-4 px-5">
                <div class="modal-content">
                    <div class="modal-header d-flex flex-column border-0">
                        <div class="d-flex justify-content-between w-100 px-3 align-items-center">
                            <i class="bi bi-file-text-fill fs-1"></i>
                            <h1 class="modal-title fs-4" id="staticBackdropLabel">รายละเอียดการลา</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="w-100">
                            <hr class="border border-3 border-dark mx-3 opacity-100">
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row" style="border: 1px solid red;align-items: center;">
                                <div class="col-12  g-3 d-flex">
                                    <div class="d-flex">
                                        <p>วันที่เริ่มลา :</p>
                                        <input type="text" class="mx-2" style="width: 300px; height: 50px; border-radius: 10px; border: none" readonly>
                                    </div>
                                    <div class="d-flex" style="margin-left: 25px;">
                                        <p>เวลา :</p>
                                        <input type="text" class="mx-2" style="width: 150px; height: 50px; border-radius: 10px; border: none" readonly>
                                    </div>
                                    <div class="d-flex mx-5">
                                        <p>ประเภทการลา :</p>
                                        <input type="text" class="mx-2" style="width: 150px; height: 50px; border-radius: 10px; border: none" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="border: 1px solid red;align-items: center;">
                                <div class="col-md-5 d-flex mt-3">
                                    <div class="d-flex" style="margin-left: 28px;">
                                        <p>ถึงวันที่ :</p>
                                        <input type="text" class="mx-2" style="width: 300px; height: 50px; border-radius: 10px; border: none" readonly>
                                    </div>
                                </div>
                                <div class="col-md-3 d-flex mt-3">
                                    <div class="d-flex" style="margin-left: 23px;">
                                        <p>เวลา :</p>
                                        <input type="text" class="mx-2" style="width: 150px; height: 50px; border-radius: 10px; border: none" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex mt-3" style="align-items: center;">
                                    <div class="d-flex">
                                        <p>วิชาที่สามารถลงได้ :</p>
                                        <select name="Type_of_Leave" class="mx-2">
                                            <option>11.00 - 12.00</option>
                                            <option>12.00 - 13.00</option>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row" style="border: 1px solid black;align-items: center;">
                                <div class="col" style="border: 1px solid black;">
                                    <input type="button" class="w-100">
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between border-1">
                        <button type="button" class="btn btn-dark">พิมพ์เอกสาร</button>
                        <div>
                            <button type="button" class="btn btn-primary">แก้ไขข้อมูล</button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">ยกเลิกการลา</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>