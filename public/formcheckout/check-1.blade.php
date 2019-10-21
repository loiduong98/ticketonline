<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHỌN TUYẾN</title>
    <base href="{{asset('')}}">

    <!--Font Google-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--lightbox-->
    <link rel="stylesheet" href="./CSS/lightbox.css">
    <!--CSS-->
    <link rel="stylesheet" href="./CSS/style-check-1.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <![endif]-->
</head>

<body>
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-info">
            <div class="container">
                <a class="navbar-brand" href="#">TICKET</a>
                <button class="navbar-toggler" data-toggle="collapse" data-target="#menuNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menuNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="page/index">Trang Chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đăng Nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Đăng Kí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Liên Hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tin Tức</a>
                        </li>
                    </ul>
                    <!--form tìm kiếm-->
                    <form class="form-inline">
                        <input class="form-control mr-2" placeholder="Tìm Kiếm">
                        <button class="btn btn-outline-light">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- content  -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 clearfix" id="checkout">
                    <div class="box">
                        <form method="post" action="check-1.html">                            
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="page/checkout/1"><i class="fa fa-map-marker"></i><br>CHỌN TUYẾN</a>
                                </li>
                                <li class="disabled"><a href="page/checkout/2"><i class="fa fa-truck"></i><br>CHỌN GHẾ</a>
                                </li>
                                <li class="disabled"><a href="page/checkout/3"><i class="fa fa-truck"></i><br>THÔNG TIN KHÁCH HÀNG</a>
                                </li>
                                <li class="disabled"><a href="page/checkout/4"><i class="fa fa-eye"></i><br>THANH TOÁN</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-ms-12">
                    <div>
                        <h1>CHỌN TUYẾN</h1>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel">
                            <table class="table ">
                                <form class="form w-50 mr-15">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                            <div class="form-group">
                                                <label for="#">Điểm Khởi Hành</label>
                                                <div class="controls">
                                                    <i class="fa fa-bus text-primary"></i>
                                                    <select name="idBenDi" id="idBenDi" class="form-control selectpicker bs-select-hideden">
                                                            <option value="4">Cần Thơ</option>
                                                            <option value="1">TP Hồ Chí Minh</option>
                                                            <option value="2">Đà Lạt</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                            <div class="form-group">
                                                <label for="#">Điểm đến</label>
                                                <div class="controls">
                                                    <i class="fa fa-bus text-primary"></i>
                                                    <select name="idBenDi" id="idBenDi" class="form-control selectpicker bs-select-hideden">
                                                            <option value="3">Phan thiết</option>
                                                            <option value="1">TP Hồ Chí Minh</option>
                                                            <option value="2">Đà Lạt</option>
                                                        </select>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                            <div class="form-group">
                                                <label for="#">Ngày Khơi Hành</label>
                                                <div class="controls">
                                                    <i class="fa fa-clock-o text-primary" aria-hidden="true"></i>
                                                    <input id="datepicker" name="dDate" placeholder="dd/mm/yyyy" class="form-control dDate date-readonly " type="date">
                                                    <small>
                                                                <em>Định dạng: dd-mm-yyyy</em>
                                                        </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                            <div class="form-group">
                                                <label for="#">Số Lượng Vé</label>
                                                <div class="controls">
                                                    <i class="fa fa-ticket" aria-hidden="true"></i>
                                                    <input type="number" name="numOfTicket" placeholder="1" value="1" class="form-control" min="1" max="10">
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ms-12">
                                            <a href="./index.html" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left icon-flat bg-btn-actived"></i> Quay lại</a>
                                            <a href="./check-2.html" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right icon-flat bg-btn-actived"></i> Tiếp Tục</a>

                                        </div>
                                    </div> -->
                                    <div class="row">
                                            <div class="pull-left">
                                                <a href="page/index" class="btn btn-default"><i class="fa fa-chevron-left"></i> Quay lại</a>
                                            </div>
                                            <div class="pull-right">
                                                <button type="submit" class="btn btn-template-main"><a href="page/checkout/2">Tiếp tục</a><i class="fa fa-chevron-right"></i>
                                                </button>
                                            </div>
                                    </div>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-ms-12 pt-1">
                    <img src="./img/Thong-cao-Khai-Truong-Phan-Rang-BXMĐ.png" alt="">
                </div>
            </div>
        </div>
    </section>




    <!--bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>