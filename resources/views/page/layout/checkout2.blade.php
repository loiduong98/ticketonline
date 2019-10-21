<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CHỌN GHẾ</title>
    <base href="{{asset('')}}">
    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,500,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap and Font Awesome css -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Css animations  -->
    <link href="master-asset/css/animate.css" rel="stylesheet">

    <!-- Theme stylesheet, if possible do not edit this stylesheet -->
    <link href="master-asset/css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- Custom stylesheet - for your changes -->
    <link href="master-asset/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="master-asset/css/lightbox.css">
    <!--CSS-->
    <link rel="stylesheet" href="master-asset/css/style_check2.css">
    <link rel="stylesheet" href="master-asset/css/style-check-1.css">
    <link href="master-asset/css/custom_check-2.css">

    <!-- Responsivity for older IE -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

    <!-- Favicon and apple touch icons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="img/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="img/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="img/apple-touch-icon-152x152.png" />
</head>

<body>


    <div id="all">
        <header>

            <!-- *** TOP ***
_________________________________________________________ -->
            @include('page.layout.header')
        </header>

        <!-- *** LOGIN MODAL ***
_________________________________________________________ -->

<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 clearfix" id="checkout">
                    <div class="box">
                            <ul class="nav nav-pills nav-justified">
                                <li class="disabled"><a href="page/checkout/1"><i class="fa fa-map-marker"></i><br>CHỌN TUYẾN</a>
                                </li>
                                <li class="active"><a href="page/checkout/2"><i class="fa fa-truck"></i><br>CHỌN GHẾ</a>
                                </li>
                                <li class="disabled"><a href="page/checkout/3"><i class="fa fa-truck"></i><br>THÔNG TIN KHÁCH HÀNG</a>
                                </li>
                                <li class="disabled"><a href="page/checkout/4"><i class="fa fa-eye"></i><br>THANH TOÁN</a>
                                </li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--body-->
    <section class="container">
        <div class="row">
            <div class="col-6">
                <img src="master-asset/img/sodoghe.png" alt="">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="controls col-6">
                    <form class="form w-50 mr-15" method="POST" action="page/checkout/2" enctype="multipart/form-data>
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <select class="form-control" name="TenGhe" id="TenGhe">
                            <option selected="selected">Chọn ghế</option>
                            <option value="A1">A1</option>
                            <option value="A2">A2</option>
                            <option value="A3">A3</option>
                            <option value="A4">A4</option>
                            <option value="A5">A5</option>
                            <option value="A6">A6</option>                            
                        </select>
                        <select class="form-control" name="Gia" id="Gia">
                            <option selected="selected">Chọn giá</option>
                            <option value="140000">140000</option>
                            <option value="200000">200000</option>                           
                        </select>
                        <input name="TenGhe" type="hidden" value="secret">
                    </form>
                    </div>
                    <!-- <div class="controls col-6">
                        <select class="form-control" name="" id="">
                            <option value="0" label="Ghế đã được đặt" selected="selected">Ghế đã được đặt</option>
                        </select>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="row">
            <a href="page/checkout/1" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left icon-flat bg-btn-actived"></i> Quay lại</a>
            <a href="page/checkout/3" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right icon-flat bg-btn-actived"></i> Tiếp Tục</a>
        </div>
    </section>

        <!-- *** FOOTER ***
_________________________________________________________ -->

    @include('page.layout.footer')
    <!-- /#all -->

    <!-- #### JAVASCRIPT FILES ### -->

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')
    </script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

    <script src="master-asset/js/jquery.cookie.js"></script>
    <script src="master-asset/js/waypoints.min.js"></script>
    <script src="master-asset/js/jquery.counterup.min.js"></script>
    <script src="master-asset/js/jquery.parallax-1.1.3.js"></script>
    <script src="master-asset/js/front.js"></script>
    <!--bootstrap-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>