<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php include "navbar.php" ?>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Launch static backdrop modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-fullscreen py-4 px-5">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-4">
                                <label>วันที่เริ่มลา :</label>
                                <input type="text" class="mt-0" style="width: 300px; height: 50px; border-radius: 10px; border: none" readonly>
                            </div>
                            <div class="col-3">
                                <label>เวลา :</label>
                                <input type="text" class="mt-0" style="width: 150px; height: 50px; border-radius: 10px; border: none" readonly>
                            </div>
                            <div class="col">
                                <label>ประเภทการลา :</label>
                                <input type="text" class="mt-0" style="width: 150px; height: 50px; border-radius: 10px; border: none" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <label>ถึงวันที่ :</label>
                                <input type="text" class="mt-0" style="width: 300px; height: 50px; border-radius: 10px; border: none" readonly>
                            </div>
                            <div class="col-3">
                                <label>เวลา :</label>
                                <input type="text" class="mt-0" style="width: 150px; height: 50px; border-radius: 10px; border: none" readonly>
                            </div>
                            <div class="col">
                                <label>วิชาที่ลา :</label>
                                <select name="" id="">
                                    <option value="">1</option>
                                    <option value="">2</option>
                                    <option value="">3</option>
                                </select>
                            </div>
                            <div class="row" st>
                                <div class="col">
                                    <label>เหตุผลการลา :</label>
                                    <textarea style="resize: none; border-radius: 5px;font-size: medium;align-items: center;"></textarea>                                </div>
                            </div>
                        </div>
                        <div class="modal-footer mt-auto">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Understood</button>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>