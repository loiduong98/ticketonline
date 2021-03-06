<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CHỌN GHẾ</title>
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
    <link rel="stylesheet" href="./CSS/style_check2.css">
    <link rel="stylesheet" href="./CSS/style-check-1.css">
    <link href="./CSS/custom_check-2.css">
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
                            <a class="nav-link" href="#">Trang Chủ</a>
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
                        <form method="post" action="/2">
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
        </div>
    </section>

    <!--body-->
    <section class="body">
        <div class="container">
        <h1>CHỌN GHẾ</h1>
        <form>
            <div class="row">               
                <div class="col-8">
                    <div class="bookingTicket container">
                        <div class="text-center pb-2 cssButton">
                            <button name="TenGhe" value="A1">A1</button>
                            <button name="TenGhe" value="A2">A2</button>
                            <button name="TenGhe" value="A3">A3</button>
                        </div>
                        <div class="text-center pb-2 cssButton">
                                <button name="TenGhe" value="A4">A4</button>
                                <button name="TenGhe" value="A5">A5</button>
                                <button name="TenGhe" value="A6">A6</button>
                        </div>
                        <div class="text-center pb-2 cssButton">
                                <button name="TenGhe" value="A7">A7</button>
                                <button name="TenGhe" value="A8">A8</button>
                                <button name="TenGhe" value="A9">A9</button>
                        </div>
                        <div class="text-center pb-2 cssButton">
                                <button name="TenGhe" value="A10">A10</button>
                                <button name="TenGhe" value="A11">A11</button>
                                <button name="TenGhe" value="A12">A12</button>
                        </div>
                        <div class="text-center pb-2">
                                <button name="TenGhe" value="A13">A13</button>
                                <button name="TenGhe" value="A14">A14</button>
                                <button name="TenGhe" value="A15">A15</button>
                        </div>
                    </div>
                </div>
                <div class="row">
                        <div class="pull-left">
                            <a href="page/checkout/1" class="btn btn-default"><i class="fa fa-chevron-left"></i> Quay lại</a>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-template-main"><a href="page/checkout/3">Tiếp tục</a><i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                </div>
            </div>
        </form> 
        </div>
    </section>









    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./JS/index.js"></script>

</body>


</html>