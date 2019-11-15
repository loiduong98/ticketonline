@extends('page.layout.index')
@section('content')
<!-- content  -->
<section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 clearfix" id="checkout">
                    <div class="box">                       
                            <ul class="nav nav-pills nav-justified">
                                <li class="disabled"><i class="fa fa-map-marker"></i><br>CHỌN TUYẾN</a>
                                </li>
                                <li class="active"><i class="fa fa-truck"></i><br>CHỌN GHẾ</a>
                                </li>
                                <li class="disabled"><i class="fa fa-truck"></i><br>THÔNG TIN KHÁCH HÀNG</a>
                                </li>
                                <li class="disabled"><i class="fa fa-eye"></i><br>THANH TOÁN</a>
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
                <img src="master-asset/img/Sơ đồ giường.png" alt="">
            </div>
            <div class="col-6">
                <div class="row">
                    <div class="controls col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                        <select class="form-control" name="" id="">
                            <option value="0" label="Mời bạn chọn ghế" selected="selected">Mời bạn chọn ghế</option>
                            @foreach($chitietghe as $ctg)
                            <option value="{{$ctg->id}}">{{$ctg->TenGhe}}</option>
                            @endforeach
                        </select>
                    </div>
                    <!-- <div class="controls col-lg-6 col-md-6 col-sm-6 col-xs-12 col-ms-12">
                        <select class="form-control" name="" id="">
                            <option value="0" label="Ghế đã được đặt" selected="selected">Ghế đã được đặt</option>
                        </select>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="container " style="padding:20px;">
            <a href="page/checkout/1" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left icon-flat bg-btn-actived"></i> Quay lại</a>
            <a href="page/checkout/3" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right icon-flat bg-btn-actived"></i> Tiếp Tục</a>
        </div>
    </section>
@endsection