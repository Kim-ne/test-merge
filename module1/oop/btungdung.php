<?php

?>

<!doctype html>
<html lang="en">

<head>
    <title>Nhân viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <form method="post">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="form-group">
                        <label for="">Mã: </label>
                        <input type="text" name="code" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày sinh: </label>
                        <input type="date" name="birth" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>

                </div>


                <div class="col-xl-6">
                    <div class="form-group">
                        <label for="">Họ và tên:</label>: </label>
                        <input type="text" name="fullname" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày vào làm: </label>
                        <input type="date" name="daybegin" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                </div>

                <div class="form-check form-check-inline">
                    <label for="" class="mt-1">Giới tính:</label>
                    <label class="form-check-label ml-4 ">
                        <input class="form-check-input" type="checkbox" name="nam" id="" value="checkedValue" checked> Nam
                    </label>
                    <label class="form-check-label ml-4">
                        <input class="form-check-input" type="checkbox" name="nu" id="" value="checkedValue"> Nữ
                    </label>
                </div>
            </div>
                <button type="submit" class="btn btn-primary mt-3">xác nhận</button>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-6">
                    <h4>Văn Phòng</h4>
                    <div class="form-group">
                        <label for="">Hệ số lương: </label>
                        <input type="text" name="hsluong" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Ngày vắng: </label>
                        <input type="text" name="vang" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Số con: </label>
                        <input type="text" name="con" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                </div>
                <div class="col-xl-6">
                    <h4>Sản xuất</h4>
                    <div class="form-check form-check-inline mt-4">
                        <label for="" class="mt-1">Tăng ca:</label>
                        <label class="form-check-label ml-4 ">
                            <input class="form-check-input" type="checkbox" checked name="1"  id="" value="checkedValue" > Yes
                        </label>
                        <label class="form-check-label ml-4">
                            <input class="form-check-input" type="checkbox" name="0" id="" value="checkedValue"> No
                        </label>
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Số sản phẩm: </label>
                        <input type="text" name="sosp" id="" class="form-control" placeholder=""
                            aria-describedby="helpId">
                    </div>
                   

                </div>
                 <button type="submit" class="btn btn-primary mt-3">Tính lương</button>
            </div>
        </div>

        <div class="container mt-5">
            <h4 class="text-center mb-5">Tính Lương</h4>
            <div class="row">
                
                <div class="col-xl-6">
                    <p>Trợ cấp : </p>
                    <p>Lương :</p>

                </div>
                <div class="col-xl-6">
                    <p>Thưởng phạt :</p>
                    <p>Thực nhận :</p>

                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </form>
</body>

</html>