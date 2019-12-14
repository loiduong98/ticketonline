@extends('page.layout.index')
@section('content')
    <!-- carousel -->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active ">
                <img src="master-asset/img/can-tho.jpg" class="w-100" alt="Can tho">
            </div>
            <div class="carousel-item">
                <img src="master-asset/img/tp hcm.jpg" class="w-100" alt="Sai gon">
            </div>
            <div class="carousel-item">
                <img src="master-asset/img/da-lat.jpg" class="w-100" alt="Da lat">
                <div class="carousel-caption">
                    <h1>Đà Lạt thành phố đáng sống</h1>
                </div>
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>

    <!-- booking  -->
    <section class="booking" style="padding-top: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col-ms-12">
                    <div>
                        <h1>Mua Vé Xe</h1>
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
                                                    <select name="" id="" class="form-controls selectpicker bs-select-hideden">
                                                        <option value="CANTHO">Cần Thơ</option>
                                                        <option value="TPHCM">TP Hồ Chí Minh</option>
                                                        <option value="DALAT">Đà Lạt</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                            <div class="form-group">
                                                <label for="#">Điểm Đến</label>
                                                <div class="controls">
                                                    <i class="fa fa-bus text-primary"></i>
                                                    <select name="" id="" class="form-controls selectpicker bs-select-hideden">
                                                            <option value="CANTHO">Cần Thơ</option>
                                                            <option value="TPHCM">TP Hồ Chí Minh</option>
                                                            <option value="DALAT">Đà Lạt</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 col-ms-12">
                                            <a href="page/checkout" class="btn btn-primary btn-block btn-flat btn-booking">Tiếp Tục</a>
                                            <!-- <button type="button" class=" btn btn-primary btn-block btn-flat btn-booking ">Mua vé</button> -->
                                        </div>
                                    </div>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-ms-12">
                    <img src="master-asset/img/busline.jpg" alt="">
                </div>
            </div>
        </div>
    </section>

    <!--title-->
    <section class="title">
        <div class="container">
            <div class="row">
                <div class="col-md-6 describe-part">
                    <p>Quý khách có thể đặt vé qua tổng đài phục vụ 24/24 của chúng tôi (kể cả thứ 7 và Chủ Nhật): 1900 1234 hoặc mua vé tiện lợi ngay trên chiếc điện thoại thông minh của quý vị thông qua app TICKET trên cả hai hệ điều hành phố biển nhất
                        hiện nay là IOS và Android</p>
                </div>
                <div class="col-md-3 col-ms-6 hotline-part">
                    <div class="row">
                        <div class="hotline-text">
                            <h3>
                                Tổng Đài Đặt Vé Và Chăm Sóc Khách Hàng
                            </h3>
                            <span>1900 1234</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-ms-6 download-part">
                    <div class="hotline-app">
                        <h3>Tải App TICKETONLINE</h3>
                        <div class="hotline-icon-1">
                            <img src="master-asset/img/AP-icon.png" alt="">
                        </div>
                        <div class="hotline-icon-2">
                            <img src="master-asset/img/AD-icon.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--protfolio-->
    <section class="protfolio">
        <h1>Khơi Hành Từ Các Thành Phố</h1>
        <div class="protfolio__content">
            <div class="protfolio__items">
                <img src="master-asset/img/hinh-01.png" lt="">
                <div class="protfolio__detail">
                    <h1><a href="master-asset/img/hinh-01.png" data-lightbox="image-1" data-title="My caption">TP Hồ Chí Minh</a></h1>
                    <p>Lorem Ipsum is simply dummy</p>
                </div>
            </div>
            <div class="protfolio__items">
                <img src="master-asset/img/hinh-02.png" lt="">
                <div class="protfolio__detail">
                    <h1>Đà Lạt</h1>
                    <p>Lorem Ipsum is simply dummy</p>
                </div>
            </div>
            <div class="protfolio__items">
                <img src="master-asset/img/hinh-03.png" lt="">
                <div class="protfolio__detail">
                    <h1>Cần Thơ</h1>
                    <p>Lorem Ipsum is simply dummy</p>
                </div>
            </div>
        </div>
    </section>

    <!--about-->
    <section class="about">
        <h1 class="about__title">About</h1>
        <div class="about__items">
            <div class="about__item">
                <div class="about__img about__circle">
                    <i class="fa fa-users" aria-hidden="true"></i>
                </div>
                <h3>Hơn 5 triệu lượt khách.</h3>
                <p>TICKET phụ vụ hơn 5 triệu lượt khách hằng năm trên toàn quốc.</p>
            </div>
            <div class="about__item">
                <div class="about__img about__circle">
                    <i class="fa fa-home" aria-hidden="true"></i>
                </div>
                <h3>Hơn 100 phòng vé, Trạm trung chuyển.</h3>
                <p>TICKET có hơn 100 Phòng vé và Trạm trung chuyển trên toàn hệ thống.</p>
            </div>
            <div class="about__item">
                <div class="about__img about__circle">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <h3>Hơn 100 chuyến mỗi ngày.</h3>
                <p>TICKET phụ vụ hơn 100 chuyến xe mỗi ngày trên toàn hệ thống.</p>
            </div>
        </div>
    </section>

    <!--Map-->
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.6239809027106!2d106.80772351474951!3d10.840060892278327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752768b42ed42f%3A0x7d157d9603c2c78b!2zVmnhu4duIEPDtG5nIG5naOG7hyBjYW8gSHV0ZWNo!5e0!3m2!1svi!2s!4v1569219112967!5m2!1svi!2s"
            width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </section>
@endsection
