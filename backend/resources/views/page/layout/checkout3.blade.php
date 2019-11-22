@extends('page.layout.index')
@section('content')
    <!-- content  -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 clearfix" id="checkout">
                    <div class="box">
                        <form method="post" action="check-1.html">
                            <ul class="nav nav-pills nav-justified">
                                <li class="disabled"><i class="fa fa-map-marker"></i><br>CHỌN TUYẾN</a>
                                </li>
                                <li class="disabled"><i class="fa fa-truck"></i><br>CHỌN GHẾ</a>
                                </li>
                                <li class="active"><i class="fa fa-truck"></i><br>THÔNG TIN KHÁCH HÀNG</a>
                                </li>
                                <li class="disabled"><i class="fa fa-eye"></i><br>THANH TOÁN</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- info -->
    <section id="body-content">
        <div class="container" id="content-steps">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                    <div class="panel" style="min-height: 390px">
                        <h4 class="text-center text-primary text-uppercase">Thông tin khách hàng</h4>
                        <form action="">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                                        <div class="form-group clearfix">
                                            <label>Họ Tên</label>
                                            <div class="controls no-icon">
                                                <input class="form-control" type="text" placeholder="Họ tên">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                                        <div class="form-group clearfix">
                                            <label>Di Động</label>
                                            <div class="controls no-icon">
                                                <input class="form-control" type="text" placeholder="Số di động">
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                                <div class="row">                                  
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                                        <div class="form-group clearfix">
                                            <label>Email</label>
                                            <div class="controls no-icon">
                                                <input class="form-control" type="text" placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                                        <div class="form-group clearfix">
                                            <label>Địa chỉ</label>
                                            <div class="controls no-icon">
                                                <input class="form-control" type="text" placeholder="Diachi">
                                            </div>
                                        </div>
                                    </div>
                                </div>                             
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                    <div class="panel" style="min-height: 390px">
                        <h4 class="text-center text-uppercase text-primary">
                            Điều khoản & Lưu ý
                        </h4>
                        <div>
                            <p class="text-justify">
                                * Quý khách vui lòng mang email có chứa mã vé đến văn phòng để đổi vé lên xe trước giờ xuất bến ít nhất 60 phút.
                            </p>
                            <p class="text-justify">
                                * Thông tin hành khách phải chính xác, nếu không sẽ không thể lên xe hoặc hủy/đổi vé.
                            </p>
                            <p class="text-justify">
                                * Quý khách không được đổi / trả vé vào các ngày Lễ Tết ( ngày thường quý khách được quyền chuyển đổi hoặc hủy vé một lần duy nhất trước giờ xe chạy 24h ), phí hủy vé là 10%.
                            </p>
                            <p class="text-justify">

                            </p>
                            <p class="text-justify"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container" style="padding:20px;">
        <a href="page/checkout/2" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left icon-flat bg-btn-actived"></i> Quay lại</a>
        <a href="page/checkout/4" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right icon-flat bg-btn-actived"></i> Tiếp Tục</a>
    </div>
@endsection