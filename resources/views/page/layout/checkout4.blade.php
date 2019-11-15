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
                                <li class="disabled"><i class="fa fa-truck"></i><br>THÔNG TIN KHÁCH HÀNG</a>
                                </li>
                                <li class="active"><i class="fa fa-eye"></i><br>THANH TOÁN</a>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="body-content">
        <div id="content-steps" class="container">
            <div class="alert alert-warning">
                <strong>Lưu ý !</strong> Nếu quý khách chọn thanh toán chuyển khoản, vui lòng chuyển tiền vé trong vòng <strong>12 tiếng</strong> kể từ thời gian đặt vé. Không nhận chuyển khoản vé vào thứ Bảy, Chủ Nhật.
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-ms-12">
                    <div class="panel">
                        <p class="text-center text-primary text-uppercase">
                            <strong>Chọn phương thức thanh toán</strong>
                        </p>
                        <form action="" class="form-horizontal">
                            <fieldset>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <ul class="row">
                                        @foreach($hinhthucthanhtoan as $httt)
                                            <li class="col-xs-6 col-md-4" value="{{$httt->id}}">
                                                <div class="gwitem text-center ">
                                                    <p>{{$httt->TenHTTT}}</p>
                                                    <img src="master-asset/img/card.png" alt="">
                                                    <input type="radio">
                                                </div>
                                            </li>
                                        @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-lg-12 col-md-12 col-sm-2 col-xs-12 col-ms-12">
                                        <button type="submit" class="btn btn-success btn-block">Thực hiên thanh toán</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-ms-12">
                    <div class="panel">
                        <p class="text-center text-uppercase text-primary">
                            <strong>Thông tin đặt vé</strong>
                        </p>
                        <form action="" class="form-horizontal">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="col-xs-3">Tuyến:</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Ngày đi:</td>
                                                <td>Ghế/giường:</td>
                                            </tr>
                                            <tr>
                                                <td>Họ tên:</td>
                                                <td>Ngày sinh:</td>
                                            </tr>
                                            <tr>
                                                <td>Email:</td>
                                                <td>SĐT:</td>
                                            </tr>
                                            <tr>
                                                <td>Tổng tiền:</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12 col-md-12 col-sm-2 col-xs-12 col-ms-12">
                                    <a href=page/checkout/3 class="btn btn-primary btn-block">Quay lại</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection