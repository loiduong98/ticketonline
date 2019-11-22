@extends('page.layout.index')
@section('content')

<style>
* {
box-sizing: border-box;
}
body {
background-color: #f1f1f1;
}
#regForm {
background-color: #ffffff;
margin: 100px auto;
font-family: Raleway;
padding: 40px;
width: 70%;
min-width: 300px;
}
h1 {
text-align: center;
}
input {
padding: 10px;
width: 100%;
font-size: 17px;
font-family: Raleway;
border: 1px solid #aaaaaa;
}
/* Mark input boxes that gets an error on validation: */
input.invalid {
background-color: #ffdddd;
}
/* Hide all steps by default: */
.tab {
display: none;
}
button {
background-color: #4CAF50;
color: #ffffff;
border: none;
padding: 10px 20px;
font-size: 17px;
font-family: Raleway;
cursor: pointer;
}
button:hover {
opacity: 0.8;
}
#prevBtn {
background-color: #bbbbbb;
}
/* Make circles that indicate the steps of the form: */
.step {
height: 15px;
width: 15px;
margin: 0 2px;
background-color: #bbbbbb;
border: none;
border-radius: 50%;
display: inline-block;
opacity: 0.5;
}
.step.active {
opacity: 1;
}
/* Mark the steps that are finished and valid: */
.step.finish {
background-color: #4CAF50;
}
</style>
 <div class="col-lg-7" style="padding-bottom:120px">
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
    <!-- One "tab" for each step in the form: -->
    <div class="tab">
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
                                            <label for="#">Điểm Đến</label>
                                            <div class="controls">
                                                <i class="fa fa-bus text-primary"></i>
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
                                            <label for="#">Ngày Khơi Hành</label>
                                            <div class="controls">
                                                <i class="fa fa-clock-o text-primary" aria-hidden="true"></i>
                                                <input id="datepicker" name="NgayKhoiHanh" class="form-control dDate date-readonly " type="date" value="{!! old('NgayKhoiHanh') !!}">
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
                                                <input id="txtAmount" type="number" name="SoLuong" placeholder="" value="1" class="form-control" min="1" max="10" value="{!! old('SoLuong') !!}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-ms-12">
                <img src="./img/nen-xam.jpg" alt="">
            </div>
        </div>
    </div>    
    <div class="tab">CHỌN GHẾ:
        <div class="row">
            <div class="col-6">
                <img src="master-asset/img/Sơ đồ giường.png" alt="">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="controls col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                        <select class="form-control" name="TenGhe" id="TenGhe">
                            <option value="0" label="Mời bạn chọn ghế" selected="selected">Mời bạn chọn ghế</option>
                            @foreach($chitietghe as $ctg)
                            <option value="{{$ctg->id}}">{{$ctg->TenGhe}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tab">THÔNG TIN KHÁCH HÀNG:
        <div class="container" id="content-steps">
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
                                        <input name="DiaChi" class="form-control" type="text" placeholder="Diachi">
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
            </div>
        </div>
    </div>
    <div class="tab">THANH TOÁN:
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-ms-12">
                <div class="panel">
                    <p class="text-center text-primary text-uppercase">
                        <strong>Chọn phương thức thanh toán</strong>
                    </p>
                    <div class="form-group">
                        <div class="col-md-12">
                            <ul class="row">
                            <!-- @foreach($hinhthucthanhtoan as $httt)
                            <li name='TenHTTT' style="list-style: none;" class="col-xs-6 col-md-4" value="{{$httt->id}}">
                                <div class="gwitem text-center ">
                                    <p>{{$httt->TenHTTT}}</p>
                                    <img src="master-asset/img/card.png" class="img-fluid" alt="">
                                    <input type="radio">
                                </div>
                            </li>
                            @endforeach
                            @foreach($hinhthucthanhtoan as $httt)
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="{{$httt->TenHTTT}}" id="HTTT_{{$httt->id}}" value="HTTT_{{$httt->id}}" checked>
                                    <label class="form-check-label" for="HTTT_{{$httt->id}}">
                                        <p>{{$httt->TenHTTT}}</p>
                                        <img src="master-asset/img/card.png" class="img-fluid" alt="">
                                    </label>
                                </div>
                            @endforeach -->
                            <select name="TenHTTT" id="TenHTTT">
                                @foreach($hinhthucthanhtoan as $httt)
                                <option value="{{$httt->id}}">{{$httt->TenHTTT}}</option>
                                @endforeach
                            </select>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-ms-12">
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
                                        Tuyến:<td id="tuyen_check" class="col-xs-3"></td>
                                    </tr>
                                    <tr>
                                        Ngày đi:<td id="ngay_check" ></td>
                                        Ghế/giường:<td id="ghe_check" ></td>
                                    </tr>
                                    <tr>
                                        Họ tên:<td id="ten_check" ></td>
                                    </tr>
                                    <tr>
                                        Email:<td id="mail_check" ></td>
                                        SĐT:<td id="sdt_check" ></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->
    </div>
</div>
<div style="overflow:auto;">
    <div style="float:right;">
        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
</div>
<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
</div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab
function showTab(n) {
// This function will display the specified tab of the form...
var x = document.getElementsByClassName("tab");
x[n].style.display = "block";
//... and fix the Previous/Next buttons:
if (n == 0) {
document.getElementById("prevBtn").style.display = "none";
} else {
document.getElementById("prevBtn").style.display = "inline";
}
if (n == (x.length - 1)) {
document.getElementById("nextBtn").innerHTML = "Submit";
} else {
document.getElementById("nextBtn").innerHTML = "Next";
}
//... and run a function that will display the correct step indicator:
fixStepIndicator(n)
}
function nextPrev(n) {
// This function will figure out which tab to display
var x = document.getElementsByClassName("tab");
// Exit the function if any field in the current tab is invalid:
if (n == 1 && !validateForm()) return false;
// Hide the current tab:
x[currentTab].style.display = "none";
// Increase or decrease the current tab by 1:
currentTab = currentTab + n;
// if you have reached the end of the form...
if (currentTab >= x.length) {
// ... the form gets submitted:
document.getElementById("datve").submit();
return false;
}
// Otherwise, display the correct tab:
showTab(currentTab);
}
function validateForm() {
// This function deals with validation of the form fields
var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");
// A loop that checks every input field in the current tab:
for (i = 0; i < y.length; i++) {
// If a field is empty...
if (y[i].value == "") {
// add an "invalid" class to the field:
y[i].className += " invalid";
// and set the current valid status to false
valid = false;
}
}
// If the valid status is true, mark the step as finished and valid:
if (valid) {
document.getElementsByClassName("step")[currentTab].className += " finish";
}
return valid; // return the valid status
}
function fixStepIndicator(n) {
// This function removes the "active" class of all steps...
var i, x = document.getElementsByClassName("step");
for (i = 0; i < x.length; i++) {
x[i].className = x[i].className.replace(" active", "");
}
//... and adds the "active" class on the current step:
x[n].className += " active";
}
</script>

@endsection