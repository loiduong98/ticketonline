    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>THANH TOÁN</title>
    <base href="{{asset('')}}">
    <!--Font Google-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet" href="./CSS/style-check-4.css">
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
                        <form method="post" action="check-4.html">
                        <ul class="nav nav-pills nav-justified">
                                <li class="active"><a href="page/checkout/1"><i class="fa fa-map-marker"></i><br>CHỌN TUYẾN</a>
                                </li>
                                <li class="disabled"><a href="page/checkout/2"><i class="fa fa-truck"></i><br>CHỌN GHẾ</a>
                                </li>
                                <li class="disabled"><a href="page/checkout/3"><i class="fa fa-truck"></i><br>THÔNG TIN KHÁCH HÀNG</a>
                                </li>
                                <li class="disabled"><a href="page/checkout/4"><i class="fa fa-eye"></i><br>THANH TOÁN</a>
                                </li>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h1>PHƯƠNG THỨC THANH TOÁN</h1>
    <form>
            <div class="row">               
                    <div class="col-8">
                        <div class="bookingTicket container">
                            <div class="text-center pb-2 cssButton">
                                <button name="TenPTTT" value="1">Chuyển khoản</button>
                                <br>
                                <button name="TenPTTT" value="2">Thanh toán qua ví momo</button>
                            </div> 
                            <button type="submit" class="btn btn-template-main"><a href="page/checkout/datvethanhcong">Đặt vé</a><i class="fa fa-chevron-right"></i>
                            </button>                          
                        </div>
                    </div>
    </form>




    <!--bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>