@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết tuyến
                            <small>thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
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
                        <form action="admin/chitiettuyen/sua/{{$chitiettuyen->idTuyen}}" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>ID Nhân viên</label>
                                <input class="form-control" name="idNV" placeholder="Nhập id nhân viên" value="{{$chitiettuyen->idNV}}" />
                            </div>
                            <div class="form-group">
                                <label>ID khách hàng</label>
                                <input class="form-control" name="idKH" placeholder="Nhập ID khách hàng" value="{{$chitiettuyen->idKH}}"/>
                            </div>
                            <div class="form-group">
                                <label>Giá vé</label>
                                <input class="form-control" name="GiaVe" placeholder="Nhập giá vé" value="{{$chitiettuyen->GiaVe}}"/>
                            </div>
                            <div class="form-group">
                                <label>Giờ khởi hành</label>
                                <input class="form-control" type="time" name="GioKhoiHanh" placeholder="Nhập giờ KH" value="{{$chitiettuyen->GioKhoiHanh}}"/>
                            </div>
                            <div class="form-group">
                                <label>Thời gian đi</label>
                                <input class="form-control" name="ThoiGianDi" placeholder="Nhập thời gian đi" value="{{$chitiettuyen->ThoiGianDi}}"/>
                            </div>
                            <div class="form-group">
                                <label>Quãng đường</label>
                                <input class="form-control" name="QuangDuong" placeholder="Nhập quãng đường" value="{{$chitiettuyen->QuangDuong}}"/>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa chi tiết tuyến</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection