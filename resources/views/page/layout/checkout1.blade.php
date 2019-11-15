@extends('page.layout.index')
@section('content')
    <!-- content  -->
    
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9 clearfix" id="checkout">
                    <div class="box">
                        <div>
                            <ul class="nav nav-pills nav-justified">
                                <li class="active"><i class="fa fa-map-marker"></i><br>CHỌN TUYẾN</a>
                                </li>
                                <li class="disabled"><i class="fa fa-truck"></i><br>CHỌN GHẾ</a>
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
                                                        <?php cate_parent($ben,0,"--",old('idBenDi')) ?>
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
                                                        <?php cate_parent($ben,0,"--",old('idBenDen')) ?>
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
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-ms-12">
                                            <a href="page/index" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-left icon-flat bg-btn-actived"></i> Quay lại</a>
                                            <a href="page/checkout/2" id="btnNext" ng-click="prev()" class="btn btn-primary btn-flat"><i class="fa fa-arrow-right icon-flat bg-btn-actived"></i> Tiếp Tục</a>
                                        </div>
                                    </div>
                                </form>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-ms-12">
                    <img src="./img/nen-xam.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    @endsection