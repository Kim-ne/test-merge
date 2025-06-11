<?php
if (isset($_POST['code']) && $_POST['type']) {
    include('nhanvien.php');
    include('nhanviensanxuat.php');
    include('nhanvienvanphong.php');
    var_dump($_POST);
    $classtudong = $_POST['type']; // có thể gộp $_POST['type']($_POST['code'],...)
    $nv = new $classtudong($_POST['code'],$_POST['fullname'],$_POST['gender'],$_POST['birth'],$_POST['daybegin'],
                            $_POST['socon']?$_POST['socon']:$_POST['soluongsp'],
                            is_numeric($_POST['songayvang'])?$_POST['songayvang']:($_POST['tangca']??0),
                            $_POST['hesoluong']
                            );// Phải khai báo theo đúng thứ tự của hướng đt
    // new xong sẽ trả về số liệu đầu ra
    $luong = $nv->luong();
    $trocap = $nv->trocap();
    $thuongphat = $nv->thuongphat();
    $thucnhan = $nv->thucnhan();
}
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
    <div class="container">
        <form method="post">

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
                        <label for="">Họ và tên:</label>
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
                        <input class="form-check-input" type="radio" name="gender" id="" value="1" required> Nam
                    </label>
                    <label class="form-check-label ml-4">
                        <input class="form-check-input" type="radio" name="gender" id="" value="0"> Nữ
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div id="left">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="type" id="" required
                                    value="nhanvienvanphong">
                                Văn phòng
                            </label>
                            <hr>
                        </div>
                        <div class="form-group">
                            <label for="">Hệ số lương: </label>
                            <input type="number" name="hesoluong" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Ngày vắng: </label>
                            <input type="text" name="songayvang" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                            <label for="">Số con: </label>
                            <input type="text" name="socon" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                    </div>
                </div>


                <div class="col">
                    <div id="right">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="type" id="" value="nhanviensanxuat">
                                Sản xuất
                            </label>
                        </div>
                        <hr>
                        <div class="form-check form-check-inline mt-4">
                            <label for="" class="mt-1">Tăng ca:</label>
                            <label class="form-check-label ml-4 ">
                                <input class="form-check-input" type="checkbox" name="tangca" id="" value="checkedValue">
                                Yes
                            </label>
                            <label class="form-check-label ml-4">
                                <input class="form-check-input" type="checkbox" name="tangca" id="" value="checkedValue"> No
                            </label>
                        </div>
                        <div class="form-group mt-4">
                            <label for="">Số sản phẩm: </label>
                            <input type="text" name="soluongsp" id="" class="form-control" placeholder=""
                                aria-describedby="helpId">
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Tính lương</button>
            <div class="row mt-5">
                <div class="col-6">
                    Trợ cấp: <?=number_format($trocap??0)?>
                </div>
                <div class="col-6">
                    Thưởng phạt: <?=number_format($thuongphat??0)?>
                </div>
                <div class="col-6">
                    Lương: <?=number_format($luong??0)?>
                </div>
                <div class="col-6">
                    Thực nhận: <span class="font-weight-bold text-danger"><?=number_format($thucnhan??0)?></span>
                </div>
            </div>
        </form>
        </di>




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

</body>

</html>