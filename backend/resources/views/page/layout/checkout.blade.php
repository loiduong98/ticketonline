@extends('page.layout.index')
@section('content')

    <style>
    *{
    margin: 0;
    padding: 0;
}

.seat{
    transition: 0.4s all;
}

.booked{
    color: #eaeaea;
}

.selecting{
    color: #ff9e00;
}

#chonghe i.fa{
    cursor: pointer;
    font-size: 22px;
}

.booked i.fa{
    cursor: none!important;
}

#chonghe{
    visibility: hidden;
    opacity: 0;
    display: none;
}

.hidechontuyen{
    visibility: hidden;
    opacity: 0;
    display: none;
}

.showchonghe{
    visibility: visible!important;
    opacity: 1!important;
    display: inherit!important;
}

.hide-thong-tin-khach-hang{
    visibility: hidden;
    opacity: 0;
    display: none;
}

.hidethanhtoan{
    visibility: hidden;
    opacity: 0;
    display: none;
}

#pushGhe{
    opacity: 0;
}

 </style>
<div class="container" class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err){{$err}}<br>
                                @endforeach      
                            </div>
                        @endif

                        @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
 <form id='datve' action="page/checkout/checkout" method="POST" enctype="multipart/form-data">
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
                                        <select name="idBenDi" id="slStart" class="form-control selectpicker bs-select-hideden">
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
                                        <select name="idBenDen" id="slEnd" class="form-control selectpicker bs-select-hideden">
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
                                    <input id="datepicker" name="NgayKhoiHanh" class="form-control dDate date-readonly " type="date" value="{!! old('NgayKhoiHanh') !!}">
                                        <small><em>Định dạng: dd-mm-yyyy</em></small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 col-ms-12">
                                <div class="form-group">
                                    <label for="">Số lượng</label>
                                    <div class="controls">
                                        <input type="number" name="SoLuong" placeholder="1" value="1" class="form-control" min="1" max="10">
                                    </div>
                                    <label for="">Giờ khởi hành</label>
                                    <select name="GioKhoiHanh" id="GioKhoiHanh">
                                    <option value="8h00">8h00</option>
                                    <option value="13h00">13h00</option>
                                    <option value="20h00">20h00</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 col-ms-12" style="padding-bottom: 10px;" >
                                <button type="button" class="btn btn-primary btn-block"  id="btn-muave"><i class="fa fa-ticket icon-flat bg-btn-actived"></i>Mua vé</button>
                            </div>


                        </div>
                    
                </div>

            </div> <!-- end col 12 -->

        </div> <!-- end row -->

    </div> <!-- end container -->

    <div class="container" id="chonghe">
        <div class="row">
            <div class="col-sm-2">

            </div> <!-- end col 2 -->
            <div class="col-sm-8">
                <div class="table-responsive|table-responsive-sm|table-responsive-md|table-responsive-lg|table-responsive-xl">
                    <table class="table table-striped|table-dark|table-bordered|table-borderless|table-hover|table-sm">
                      <thead class="thead-dark|thead-light">
                        <tr>
                          <th scope="col" style="color: #ff9e00">Sơ đồ ghế</th>
                          <th scope="col">
                              <div style="color: #eaeaea;">
                                <i class="fa fa-bed"></i> đã đặt
                              </div>
                          </th>
                          <th scope="col">
                              <div style="color: #ff9e00;">
                                <i class="fa fa-bed"></i> đang chọn
                              </div>
                          </th>
                          <th scope="col">
                              <div style="color: #202429;">
                                <i class="fa fa-bed"></i> còn trống
                              </div>
                          </th>
                        </tr>
                      </thead> <!-- end table header -->
                      <tbody>
                        <tr>
                          <td>
                            <div class="seat" data-maGhe="A1" data-idGhe="1">
                                <i class="fa fa-bed"></i> A1
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="A2" data-idGhe="2">
                                <i class="fa fa-bed"></i> A2
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="A3" data-idGhe="3">
                                <i class="fa fa-bed"></i> A3
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="A4" data-idGhe="4">
                                <i class="fa fa-bed"></i> A4
                            </div>
                          </td> <!-- end 1 seat -->
                        </tr> <!-- end 1 row -->
                        <tr>
                          <td>
                            <div style="color: #eaeaea;">
                                <i class="fa fa-bed"></i> B1
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="B2" data-idGhe="6">
                                <i class="fa fa-bed"></i> B2
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="B3" data-idGhe="7">
                                <i class="fa fa-bed"></i> B3
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="B4" data-idGhe="8">
                                <i class="fa fa-bed"></i> B4
                            </div>
                          </td> <!-- end 1 seat -->
                        </tr> <!-- end 1 row -->
                        <tr>
                          <td>
                            <div class="seat" data-maGhe="C1" data-idGhe="9">
                                <i class="fa fa-bed"></i> C1
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="C2" data-idGhe="10">
                                <i class="fa fa-bed"></i> C2
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="C3" data-idGhe="11">
                                <i class="fa fa-bed"></i> C3
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="C4" data-idGhe="12">
                                <i class="fa fa-bed"></i> C4
                            </div>
                          </td> <!-- end 1 seat -->
                        </tr> <!-- end 1 row -->
                        <tr>
                          <td>
                            <div class="seat" data-maGhe="D1" data-idGhe="13">
                                <i class="fa fa-bed"></i> D1
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="D2" data-idGhe="14">
                                <i class="fa fa-bed"></i> D2
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="D3" data-idGhe="15">
                                <i class="fa fa-bed"></i> D3
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="D4" data-idGhe="16">
                                <i class="fa fa-bed"></i> D4
                            </div>
                          </td> <!-- end 1 seat -->
                        </tr> <!-- end 1 row -->
                        <tr>
                          <td>
                            <div class="seat" data-maGhe="E1" data-idGhe="17">
                                <i class="fa fa-bed"></i> E1
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="E2" data-idGhe="18">
                                <i class="fa fa-bed"></i> E2
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="E3" data-idGhe="19">
                                <i class="fa fa-bed"></i> E3
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="E4" data-idGhe="20">
                                <i class="fa fa-bed"></i> E4
                            </div>
                          </td> <!-- end 1 seat -->
                        </tr> <!-- end 1 row -->
                        <tr>
                          <td>
                            <div class="seat" data-maGhe="F1" data-idGhe="21">
                                <i class="fa fa-bed"></i> F1
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="F2" data-idGhe="22">
                                <i class="fa fa-bed"></i> F2
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="F3" data-idGhe="23">
                                <i class="fa fa-bed"></i> F3
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="F4" data-idGhe="24">
                                <i class="fa fa-bed"></i> F4
                            </div>
                          </td> <!-- end 1 seat -->
                        </tr> <!-- end 1 row -->
                        <tr>
                          <td>
                            <div class="seat" data-maGhe="G1" data-idGhe="25">
                                <i class="fa fa-bed"></i> G1
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="G2" data-idGhe="26">
                                <i class="fa fa-bed"></i> G2
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="G3" data-idGhe="27">
                                <i class="fa fa-bed"></i> G3
                            </div>
                          </td> <!-- end 1 seat -->
                          <td>
                            <div class="seat" data-maGhe="G4" data-idGhe="28">
                                <i class="fa fa-bed"></i> G4
                            </div>
                          </td> <!-- end 1 seat -->
                        </tr> <!-- end 1 row -->
                        <tr>
                            <h5 id="text-confirm" style="font-weight: 300;">
                                Bạn đã chọn <span style="color: red; font-weight: bold;">0</span> ghế
                            </h5>
                            <h5 id="tongTien" style="font-weight: 300;">
                                Tổng số tiền là: <span style="color: red; font-weight: bold">(000,000)</span> đ
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

            </div> <!-- end col 8 -->
            <div class="col-sm-2">

            </div> <!-- end col 2 -->
        </div> <!-- end row -->
        <div class="row" style="padding-bottom: 10px;">
            <div class="col-sm-6">
                <button type="button" id="quaylaichontuyen" class="btn btn-block btn-outline btn-dark">Quay lại chọn tuyến</button>
            </div>
            <div class="col-sm-6">
                <button type="button" id="denthongtin" class="btn btn-block btn-outline btn-primary">Tiếp theo</button>
            </div>
        </div>
    </div> <!-- end container -->



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
                                    <input id="HoTen" name="HoTen" class="form-control" type="text" placeholder="Họ tên">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                            <div class="form-group clearfix">
                                <label>Di Động</label>
                                <div class="controls no-icon">
                                    <input id="SDT" name="SDT" class="form-control" type="text" placeholder="Số di động">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                            <div class="form-group clearfix">
                                <label>Email</label>
                                <div class="controls no-icon">
                                    <input id="Email" name="Email" class="form-control" type="text" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                            <div class="form-group clearfix">
                                <label>Địa chỉ</label>
                                <div class="controls no-icon">
                                    <input name="DiaChi" class="form-control" type="text" placeholder="Địa chỉ của bạn">
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
        </div> <!-- end row -->
        <div class="row" style="padding-bottom: 10px;">
            <div class="col-sm-6">
                <button type="button" id="quaylaichonghe" class="btn btn-block btn-outline btn-dark">Quay lại chọn ghế</button>
            </div>
            <div class="col-sm-6">
                <button type="button" id="denthanhtoan" class="btn btn-block btn-outline btn-primary">Tiếp theo</button>
            </div>
        </div>

    </div> <!-- end container -->


    <div id="thanhtoan" class="container hidethanhtoan" style="padding-top: 10px;">
        <div class="alert alert-warning">
            <strong>Lưu ý !</strong> Nếu quý khách chọn thanh toán chuyển khoản, vui lòng chuyển tiền vé trong vòng <strong>12 tiếng</strong> kể từ thời gian đặt vé. Không nhận chuyển khoản vé vào thứ Bảy, Chủ Nhật.
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-ms-12">
                <!-- <div class="panel">
                    <p class="text-center text-uppercase text-primary">
                        <strong>Thông tin đặt vé</strong>
                    </p>
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
                    
                </div> -->
                <select name="TenHTTT" id="TenHTTT" >
                    @foreach($hinhthucthanhtoan as $httt)
                    <option value="{{$httt->id}}">{{$httt->TenHTTT}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-ms-12" >
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
                                                <img src="https://library.kissclipart.com/20181216/zse/kissclipart-mastercard-logo-png-clipart-mastercard-credit-card-e1dd82cbbdc63d51.png" alt="" class="img-fluid">
                                            </div>
                                        </li>
                                        @endforeach
                                       
                                    </ul>
                                </div>
                            </div>
                        </fieldset>
                    
                </div>
            </div>
        </div> <!-- end 1 row -->
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
var ghe = document.getElementsByClassName('seat');
var hienThiSoGhe = document.getElementById('text-confirm');
var giaVe = 100000;
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
            hienThiSoGhe.innerHTML = ("Bạn đã chọn <span style='color: red; font-weight: bold;'>"+ soGheDangChon +"</span> ghế là: <span style='color: red; font-weight: bold;'>"+ maGheDangChon.toString() +"</span>");
            tongTien.innerHTML = ("Tổng số tiền là: <span style='color: red; font-weight: bold'>("+ (giaVe * soGheDangChon).toLocaleString() +")</span> đ")
            pushGhe.innerHTML = ('<select name="TenGhe" id="TenGhe"><option value="'+idGheDangChon[0]+'" selected="selected"></option></select>')
        } else{
            soGheDangChon--;
            var gheBoChon = this.getAttribute('data-maGhe');
            var z = maGheDangChon.indexOf(gheBoChon);
            if (z != -1) {
                maGheDangChon.splice(i,1);
                idGheDangChon.splice(i,1);
            }
            console.log(maGheDangChon);
            console.log(idGheDangChon);
            hienThiSoGhe.innerHTML = ("Bạn đã chọn <span style='color: red; font-weight: bold;'>"+ soGheDangChon +"</span> ghế là: <span style='color: red; font-weight: bold;'>"+ maGheDangChon.toString() +"</span>");
            tongTien.innerHTML = ("Tổng số tiền là: <span style='color: red; font-weight: bold'>("+ (giaVe * soGheDangChon).toLocaleString() +")</span> đ")
            pushGhe.innerHTML = ('<select name="TenGhe" id="TenGhe"><option value="'+idGheDangChon[0]+'" selected="selected"></option></select>')
        }


        // hienThiSoGhe.innerHTML = ("Bạn đã chọn <span style='color: red; font-weight: bold;'>"+ soGheDangChon +"</span> ghế là: <span style='color: red; font-weight: bold;'>"+ maGheDangChon.toString() +"</span>");
        // tongTien.innerHTML = ("Tổng số tiền là: <span style='color: red; font-weight: bold'>("+ (giaVe * soGheDangChon).toLocaleString() +")</span> đ")
        // pushGhe.innerHTML = ('<option value="'+ idGheDangChon[0]+'" label="Mời bạn chọn ghế" selected="selected">Ghe A1</option>')
    }
}
}, false);


    </script>


@endsection