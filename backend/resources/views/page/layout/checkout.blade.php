@extends('page.layout.index') @section('content')

<style>
* {
    margin: 0;
    padding: 0;
}

.seat {
    transition: 0.4s all;
}

.booked {
    color: #968684;
}

.selecting {
    color: #ff9e00;
}

#chonghe i.fa {
    cursor: pointer;
    font-size: 22px;
}

.booked i.fa {
    cursor: none !important;
}

#chonghe {
    visibility: hidden;
    opacity: 0;
    display: none;
}

.hidechontuyen {
    visibility: hidden;
    opacity: 0;
    display: none;
}

.showchonghe {
    visibility: visible !important;
    opacity: 1 !important;
    display: inherit !important;
}

.hide-thong-tin-khach-hang {
    visibility: hidden;
    opacity: 0;
    display: none;
}

.hidethanhtoan {
    visibility: hidden;
    opacity: 0;
    display: none;
}

#pushGhe {
    opacity: 0;
}
</style>
<div class="container" class="col-lg-7" style="padding-bottom:120px">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $err){{$err}}<br> @endforeach
    </div>
    @endif @if(session('thongbao'))
    <div class="alert alert-success">
        {{session('thongbao')}}
    </div>
    @endif
    <form id='datve' action="page/checkout" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}" />
        <div class="container" id="chontuyen">
            <div class="row">
                <div class="col-sm-12">
                    <div id="formchontuyen">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                <div class="form-group">
                                    <label for="">Điểm khởi hành</label>
                                    <div class="controls">
                                        <select name="idBenDi" id="slStart"
                                            class="form-control selectpicker bs-select-hideden">
                                            <option>--Mời bạn chọn điểm khởi hành--</option>
                                            @foreach($ben as $b)
                                            <option value="{{$b->id}}">{{$b->TenBen}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                <div class="form-group">
                                    <label for="">Điểm đến</label>
                                    <div class="controls">
                                        <select name="idBenDen" id="slEnd"
                                            class="form-control selectpicker bs-select-hideden">
                                            <option>--Mời bạn chọn điểm đến--</option>
                                            @foreach($ben as $b)
                                            <option value="{{$b->id}}">{{$b->TenBen}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                <div class="form-group">
                                    <label for="">Ngày khởi hành</label>
                                    <div class="controls">
                                        <input id="datepicker" name="NgayKhoiHanh"
                                            class="form-control dDate date-readonly " type="date">
                                        <small><em>Định dạng: dd-mm-yyyy</em></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                <div class="form-group">

                                    <label for="">Giờ khởi hành</label>
                                    <select name="GioKhoiHanh" id="GioKhoiHanh">
                                        <option value="8h00">8h00</option>
                                        <option value="13h00">13h00</option>
                                        <option value="20h00">20h00</option>
                                    </select>
                                </div>
                                <!-- <label for="">Số lượng</label>
                                <div class="controls"> -->

                                <!-- </div> -->
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 col-ms-12" style="padding-bottom: 10px;">
                                <button type="button" class="btn btn-primary btn-block" id="btn-muave"><i
                                        class="fa fa-ticket icon-flat bg-btn-actived"></i>Mua vé</button>
                            </div>


                        </div>

                    </div>

                </div>
                <!-- end col 12 -->

            </div>
            <!-- end row -->

        </div>
        <!-- end container -->

        <div class="container" id="chonghe">
            <div class="row">
                <div class="col-sm-2">

                </div>
                <!-- end col 2 -->
                <div class="col-sm-8">
                    <div
                        class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                        <table
                            class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm" name="TenGhe" id="TenGhe">
                            <thead class="thead-dark|thead-light">
                                <tr>
                                    <th scope="col" style="color: red">Sơ đồ ghế</th>


                                    <th scope="col">
                                        <div style="color: #ff9e00;">
                                            <i class="fas fa-door-closed"></i> đang chọn
                                        </div>
                                    </th>

                                    <th scope="col">
                                        <div style="color: #968684;">
                                            <i class="fa fa-bed"></i> đã đặt
                                        </div>
                                    </th>

                                    <th scope="col">
                                        <div style="color: #202429;">
                                            <i class="fa fa-bed"></i> còn trống
                                        </div>
                                    </th>

                                </tr>
                            </thead>
                            <!-- end table header -->
                            <tbody>
                                <tr>
                                    <td><img style="width: 50px;height: 50px;" src="master-asset/img/volang.png"
                                            alt="volang"></td>
                                    <td></td>
                                    <td></td>
                                    <td><img style="width: 50px;height: 50px;" src="master-asset/img/cua.png"
                                            alt="volang"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A1" data-idGhe="1">
                                            <i class="fa fa-bed"></i> A1
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B1" data-idGhe="2">
                                            <i class="fa fa-bed"></i> B1
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C1" data-idGhe="3">
                                            <i class="fa fa-bed"></i> C1
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->

                                    <td>
                                        <div class="seat" data-maGhe="D1" data-idGhe="4">
                                            <i class="fa fa-bed"></i> D1
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>

                                <!-- end 1 row -->
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A2" data-idGhe="5">
                                            <i class="fa fa-bed"></i> A2
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B2" data-idGhe="6">
                                            <i class="fa fa-bed"></i> B2
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C2" data-idGhe="7">
                                            <i class="fa fa-bed"></i> C2
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D2" data-idGhe="8">
                                            <i class="fa fa-bed"></i> D2
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>
                                <!-- end 1 row -->
                                <tr>
                                    <td>
                                        <div class="seat booked" data-maGhe="A3" data-idGhe="9">
                                            <i class="fa fa-bed"></i> A3
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B3" data-idGhe="10">
                                            <i class="fa fa-bed"></i> B3
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C3" data-idGhe="11">
                                            <i class="fa fa-bed"></i> C3
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D3" data-idGhe="12">
                                            <i class="fa fa-bed"></i> D3
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A4" data-idGhe="13">
                                            <i class="fa fa-bed"></i> A4
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B4" data-idGhe="14">
                                            <i class="fa fa-bed"></i> B4
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat booked" data-maGhe="C4" data-idGhe="15">
                                            <i class="fa fa-bed"></i> C4
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D4" data-idGhe="16">
                                            <i class="fa fa-bed"></i> D4
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A5" data-idGhe="17">
                                            <i class="fa fa-bed"></i> A5
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B5" data-idGhe="18">
                                            <i class="fa fa-bed"></i> B5
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C5" data-idGhe="19">
                                            <i class="fa fa-bed"></i> C5
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D5" data-idGhe="20">
                                            <i class="fa fa-bed"></i> D5
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A6" data-idGhe="21">
                                            <i class="fa fa-bed"></i> A6
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B6" data-idGhe="22">
                                            <i class="fa fa-bed"></i> B6
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C6" data-idGhe="23">
                                            <i class="fa fa-bed"></i> C6
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D6" data-idGhe="24">
                                            <i class="fa fa-bed"></i> D6
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>

                                <!-- end 1 row -->
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A7" data-idGhe="25">
                                            <i class="fa fa-bed"></i> A7
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B7" data-idGhe="26">
                                            <i class="fa fa-bed"></i> B7
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C7" data-idGhe="27">
                                            <i class="fa fa-bed"></i> C7
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D7" data-idGhe="28">
                                            <i class="fa fa-bed"></i> D7
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>
                                <!-- end 1 row -->
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A8" data-idGhe="29">
                                            <i class="fa fa-bed"></i> A8
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B8" data-idGhe="30">
                                            <i class="fa fa-bed"></i> B8
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C8" data-idGhe="31">
                                            <i class="fa fa-bed"></i> C8
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D9" data-idGhe="32">
                                            <i class="fa fa-bed"></i> D9
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>
                                <!-- end 1 row -->
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A9" data-idGhe="33">
                                            <i class="fa fa-bed"></i> A9
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B9" data-idGhe="34">
                                            <i class="fa fa-bed"></i> B9
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C9" data-idGhe="35">
                                            <i class="fa fa-bed"></i> C9
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D9" data-idGhe="36">
                                            <i class="fa fa-bed"></i> D9
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>
                                <!-- end 1 row -->
                                <tr>
                                    <td>
                                        <div class="seat" data-maGhe="A10" data-idGhe="37">
                                            <i class="fa fa-bed"></i> A10
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="B10" data-idGhe="38">
                                            <i class="fa fa-bed"></i> B10
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="C10" data-idGhe="39">
                                            <i class="fa fa-bed"></i> C10
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                    <td>
                                        <div class="seat" data-maGhe="D10" data-idGhe="40">
                                            <i class="fa fa-bed"></i> D10
                                        </div>
                                    </td>
                                    <!-- end 1 seat -->
                                </tr>
                                <!-- end 1 row -->
                                <tr>
                                    <h5 id="text-confirm" style="font-weight: 300;">
                                        Bạn đã chọn <span style="color: red; font-weight: bold;">0</span> ghế
                                    </h5>
                                    <h5 id="tongTien" style="font-weight: 300;">
                                        Tổng số tiền là: <span style="color: red; font-weight: bold">(000,000)</span> đ
                                    </h5>
                                    <h5 style="display: none;" id="soluong">
                                        <input value="0" name="SoLuong">
                                    </h5>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="pushGhe">
                        <select name="TenGhe" id="TenGhe">
                            <option value="1" selected="selected"></option>
                        </select>
                    </div>

                </div>
                <!-- end col 8 -->
                <div class="col-sm-2">

                </div>
                <!-- end col 2 -->
            </div>
            <!-- end row -->
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-sm-6">
                    <button type="button" id="quaylaichontuyen" class="btn btn-block btn-outline btn-dark">Quay lại chọn
                        tuyến</button>
                </div>
                <div class="col-sm-6">
                    <button type="button" id="denthongtin" class="btn btn-block btn-outline btn-primary">Tiếp
                        theo</button>
                </div>
            </div>
        </div>
        <!-- end container -->



        <div class="container hide-thong-tin-khach-hang" id="thong-tin-khach-hang">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                    <div class="panel" style="min-height: 390px">
                        <h4 class="text-center text-primary text-uppercase">Thông tin khách hàng</h4>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                                <div class="form-group clearfix">
                                    <label>Họ Tên</label>
                                    <div class="controls no-icon">
                                        <input id="HoTen" name="HoTen" class="form-control" type="text"
                                            placeholder="Họ tên">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                                <div class="form-group clearfix">
                                    <label>Di Động</label>
                                    <div class="controls no-icon">
                                        <input id="SDT" name="SDT" class="form-control" type="text"
                                            placeholder="Số di động">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                                <div class="form-group clearfix">
                                    <label>Email</label>
                                    <div class="controls no-icon">
                                        <input id="Email" name="Email" class="form-control" type="text"
                                            placeholder="Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                                <div class="form-group clearfix">
                                    <label>Địa chỉ</label>
                                    <div class="controls no-icon">
                                        <input id="DiaChi" name="DiaChi" class="form-control" type="text"
                                            placeholder="Địa chỉ của bạn">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                    <div class="panel" style="min-height: 390px">
                        <h4 class="text-center text-uppercase text-primary">
                            Điều khoản & Lưu ý
                        </h4>
                        <div>
                            <p class="text-justify">
                                * Quý khách vui lòng mang email có chứa mã vé đến văn phòng để đổi vé lên xe trước giờ
                                xuất bến ít nhất 60 phút.
                            </p>
                            <p class="text-justify">
                                * Thông tin hành khách phải chính xác, nếu không sẽ không thể lên xe hoặc hủy/đổi vé.
                            </p>
                            <p class="text-justify">
                                * Quý khách không được đổi / trả vé vào các ngày Lễ Tết ( ngày thường quý khách được
                                quyền chuyển đổi hoặc hủy vé một lần duy nhất trước giờ xe chạy 24h ), phí hủy vé là
                                10%.
                            </p>
                            <p class="text-justify">
                            </p>
                            <p class="text-justify"></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-sm-6">
                    <button type="button" id="quaylaichonghe" class="btn btn-block btn-outline btn-dark">Quay lại chọn
                        ghế</button>
                </div>
                <div class="col-sm-6">
                    <button type="button" id="denthanhtoan" class="btn btn-block btn-outline btn-primary">Tiếp
                        theo</button>
                </div>
            </div>

        </div>
        <!-- end container -->


        <div id="thanhtoan" class="container hidethanhtoan" style="padding-top: 10px;">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ms-12 text-center">
                    
                    <script>
                    //hien thi momo thanh toan
                    function changeChoose() {
                        var momo = document.getElementById('TenHTTT');
                        var showmomo = document.getElementById("showmomo");
                        if (momo.value == 2) {
                            var showmomo = document.getElementById('showmomo');
                            showmomo.innerHTML = '<img src="master-asset/img/momo.jpg" alt="" class="img-fluid">';
                        } else if(momo.value == 1){
                            var showmomo = document.getElementById('showmomo');
                            showmomo.innerHTML = '<p class="pt-5">Ngân hàng Vietcombank</p><p>Số tài khoản: 0071001333878</p><p>Chi nhánh Tp.HCM</p><img src="master-asset/img/vietcombank.png" alt="" class="img-fluid p-3">';
                        }else if(momo.value == 3){
                            var showmomo = document.getElementById('showmomo');
                            showmomo.innerHTML = '<img src="master-asset/img/airpay.jpg" alt="" class="img-fluid">';
                        }
                    }
                    //ket thuc thanh toan
                    //----------------------------------
                    </script>
                    
                    <select name="TenHTTT" id="TenHTTT" onChange="changeChoose()">
                        <option><small>Mời bạn chọn hình thức thanh toán</small></option>
                        @foreach($hinhthucthanhtoan as $httt)

                        <option value="{{$httt->id}}">{{$httt->TenHTTT}}</option>
                        @endforeach
                    </select>
                    <div id="showmomo" class="text-center">
                        <img src="master-asset/img/thanhtoan.png" alt="" class="img-fluid p-3">
                    </div>
                </div>
                <div class="panel">
                        <p class="text-center text-uppercase text-primary">
                            <strong>Thông tin đặt vé</strong>
                        </p>
                        <div class="form-group">
                            <div class="col-md-12">
                                <table class="table show_end">
                                    <tbody>
                                        <tr>
                                            <td class="col-xs-3">Tuyến đi: <span class='tuyendi_show'></span></td>
                                            <td class=''>Tuyến đến: <span class='tuyenden_show'></td>
                                        </tr>
                                        <tr>
                                            <td class=''>Ngày đi: <span class='date_show'></td>
                                            <td class=''>Giờ đi: <span class='time_show'></td>
                                            <td class=''>Ghế/giường: <span class='ghe_show'></td>
                                              
                                        </tr>
                                        <tr>
                                            <td class=''>Họ tên: <span class='name_show'></td>
                                            <td class=''>Email: <span class='mail_show'></td>
                                            <td class=''>SĐT: <span class='phone_show'></td>
                                            <td class=''>Địa chỉ: <span class='add_show'></td>
                                        </tr>
                                        <tr>
                                            <td>Tổng tiền:</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-ms-12">
                    <div class="panel">
                        <p class="text-center text-primary text-uppercase">
                            <strong>Chọn phương thức thanh toán</strong>
                        </p>
                        <fieldset>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <ul class="row" style="list-style-type: none;">
                                        @foreach($hinhthucthanhtoan as $httt)
                                        <li class="col-xs-6 col-md-4">
                                            <div class="gwitem text-center" style="font-size:14px; font-weight:bold;">
                                                <p>{{$httt->TenHTTT}}</p>
                                                <img src="https://library.kissclipart.com/20181216/zse/kissclipart-mastercard-logo-png-clipart-mastercard-credit-card-e1dd82cbbdc63d51.png"
                                                    alt="" class="img-fluid">
                                            </div>
                                        </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                        </fieldset>

                    </div>
                </div> -->
            </div>
            <div class="alert alert-warning">
                <strong>Lưu ý !</strong> Nếu quý khách chọn thanh toán chuyển khoản, vui lòng chuyển tiền vé trong vòng
                <strong>12 tiếng</strong> kể từ thời gian đặt vé. Không nhận chuyển khoản vé vào thứ Bảy, Chủ Nhật.
            </div>
            <!-- end 1 row -->
            <div class="row" style="padding-bottom: 10px;">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-block btn-dark" id="quaylaithongtin">Quay lại</button>
                </div>
                <div class="col-sm-6">
                    <button type="submit" class="btn btn-success btn-block">Thực hiên thanh toán</button>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<!-- <script src="../admin-asset/js"></script> -->

<script>
$('select[name*="idBen"]').change(function() {

    // start by setting everything to enabled
    $('select[name*="idBen"] option').attr('hidden', false);

    // loop each select and set the selected value to disabled in all other selects
    $('select[name*="idBen"]').each(function() {
        var $this = $(this);
        $('select[name*="idBen"]').not($this).find('option').each(function() {
            if ($(this).attr('value') == $this.val())
                $(this).attr('hidden', true);
        });
    });

});
</script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var denChonGhe = document.getElementById('btn-muave');
    var chonghe = document.getElementById('chonghe');
    var chontuyen = document.getElementById('chontuyen');
    var thongtinkhachhang = document.getElementById('thong-tin-khach-hang');

    denChonGhe.onclick = function() {
        chonghe.classList.add('showchonghe');
        chontuyen.classList.add('hidechontuyen');
    }

    var quaylaichontuyen = document.getElementById('quaylaichontuyen');

    quaylaichontuyen.onclick = function() {
        chontuyen.classList.remove('hidechontuyen');
        chonghe.classList.remove('showchonghe');
    }

    var denthongtin = document.getElementById('denthongtin');
    denthongtin.onclick = function() {
        thongtinkhachhang.classList.remove('hide-thong-tin-khach-hang');
        chonghe.classList.remove('showchonghe');
    }

    var quaylaichonghe = document.getElementById('quaylaichonghe');
    quaylaichonghe.onclick = function() {
        chonghe.classList.add('showchonghe');
        thongtinkhachhang.classList.add('hide-thong-tin-khach-hang');
    }


    var thanhtoan = document.getElementById('thanhtoan');
    var denthanhtoan = document.getElementById('denthanhtoan');
    denthanhtoan.onclick = function() {
        thanhtoan.classList.remove('hidethanhtoan');
        thongtinkhachhang.classList.add('hide-thong-tin-khach-hang');
    }

    var quaylaithongtin = document.getElementById('quaylaithongtin');
    quaylaithongtin.onclick = function() {
        thanhtoan.classList.add('hidethanhtoan');
        thongtinkhachhang.classList.remove('hide-thong-tin-khach-hang');
    }

    var soGheDangChon = 0;
    var soLuong = document.getElementById("soluong");
    var ghe = document.getElementsByClassName('seat');
    var hienThiSoGhe = document.getElementById('text-confirm');
    var giaVe = 220000;
    var tongTien = document.getElementById('tongTien');
    var maGheDangChon = [];
    var pushGhe = document.getElementById('pushGhe');
    var idGheDangChon = [];

    for (var i = ghe.length - 1; i >= 0; i--) {
        ghe[i].onclick = function() {
            this.classList.toggle('selecting');
            if (this.classList[1] == 'selecting') {
                soGheDangChon++;
                // this.getAttribute('data-maGhe');
                maGheDangChon.push(this.getAttribute('data-maGhe'))
                idGheDangChon.push(this.getAttribute('data-idGhe'))
                console.log(maGheDangChon);
                console.log(idGheDangChon);
                hienThiSoGhe.innerHTML = ("Bạn đã chọn <span style='color: red; font-weight: bold;'>" +
                    soGheDangChon + "</span> ghế là: <span style='color: red; font-weight: bold;'>" +
                    maGheDangChon.toString() + "</span>");
                tongTien.innerHTML = ("Tổng số tiền là: <span style='color: red; font-weight: bold'>(" + (
                    giaVe * soGheDangChon).toLocaleString() + ")</span> đ")
                pushGhe.innerHTML = ('<select name="TenGhe" id="TenGhe"><option value="' + idGheDangChon[
                    0] + '" selected="selected"></option></select>')
                soLuong.innerHTML = ('<input value="' + soGheDangChon + '" name="SoLuong">')
            } else {
                soGheDangChon--;
                var gheBoChon = this.getAttribute('data-maGhe');
                var z = maGheDangChon.indexOf(gheBoChon);
                if (z != -1) {
                    maGheDangChon.splice(z, 1);
                    idGheDangChon.splice(z, 1);
                }
                console.log(maGheDangChon);
                console.log(idGheDangChon);
                hienThiSoGhe.innerHTML = ("Bạn đã chọn <span style='color: red; font-weight: bold;'>" +
                    soGheDangChon + "</span> ghế là: <span style='color: red; font-weight: bold;'>" +
                    maGheDangChon.toString() + "</span>");
                tongTien.innerHTML = ("Tổng số tiền là: <span style='color: red; font-weight: bold'>(" + (
                    giaVe * soGheDangChon).toLocaleString() + ")</span> đ")
                pushGhe.innerHTML = ('<select name="TenGhe" id="TenGhe"><option value="' + idGheDangChon[
                    0] + '" selected="selected"></option></select>')
                soLuong.innerHTML = ('<input value="' + soGheDangChon + '" name="SoLuong">')
            }


            // hienThiSoGhe.innerHTML = ("Bạn đã chọn <span style='color: red; font-weight: bold;'>"+ soGheDangChon +"</span> ghế là: <span style='color: red; font-weight: bold;'>"+ maGheDangChon.toString() +"</span>");
            // tongTien.innerHTML = ("Tổng số tiền là: <span style='color: red; font-weight: bold'>("+ (giaVe * soGheDangChon).toLocaleString() +")</span> đ")
            // pushGhe.innerHTML = ('<option value="'+ idGheDangChon[0]+'" label="Mời bạn chọn ghế" selected="selected">Ghe A1</option>')
        }
    }
}, false);
</script>
<script>
$(document).ready(function() {
    $( "#slStart" ).on( "change", function( event ) {
        var a1 = $(this).val();
        $('.show_end .tuyendi_show').text(a1);
    });
    $( "#slEnd" ).on( "change", function( event ) {
        var a2 = $(this).val();
        $('.show_end .tuyenden_show').text(a2);
    });
    $( "#datepicker" ).on( "change", function( event ) {
        var a3 = $(this).val();
        $('.show_end .date_show').text(a3);
    });
    $( "#GioKhoiHanh" ).on( "change", function( event ) {
        var a4 = $(this).val();
        $('.show_end .time_show').text(a4);
    });
    $( "#TenGhe" ).on( "change", function( event ) {
        var a5 = $(this).val();
        $('.show_end .ghe_show').text(a5);
    });
    $( "#HoTen" ).on( "change", function( event ) {
        var a6 = $(this).val();
        $('.show_end .name_show').text(a6);
    });
    $( "#SDT" ).on( "change", function( event ) {
        var a7 = $(this).val();
        $('.show_end .phone_show').text(a7);
    });
    $( "#Email" ).on( "change", function( event ) {
        var a8 = $(this).val();
        $('.show_end .mail_show').text(a8);
    });
    $( "#DiaChi" ).on( "change", function( event ) {
        var a9 = $(this).val();
        $('.show_end .add_show').text(a9);
    });
    $( "#TenHTTT" ).on( "change", function( event ) {
        var a10 = $(this).val();
        $('.show_end .httt_show').text(a10);
    
    });
});
</script>

@endsection