@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tuyến
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
                        <form action="admin/tuyen/them" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />                           
                             <div class="form-group">
                                <label>Tên tuyến</label>
                                <input class="form-control" name="tuyen" placeholder="Nhập tên tuyến" />
                            </div>
                            <div class="form-group">
                                <label>Điểm đi</label>                               
                                <select class="form-control" name="DiemDn" id="DiemDen">
                                    <option value="TPHCM">Thành phố Hồ Chí Minh</option>
                                    <option value="DALAT">Đà Lạt</option>
                                    <option value="CANTHO">Cần Thơ</option>
                                    <option value="PHANTHIET">Phan thiết</option>
                                    <option value="NHATRANG">Nha Trang</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Điểm đến</label>                               
                                <select class="form-control" name="DiemDn" id="DiemDen">
                                    <option value="DALAT">Đà Lạt</option>
                                    <option value="CANTHO">Cần Thơ</option>
                                    <option value="PHANTHIET">Phan thiết</option>
                                    <option value="NHATRANG">Nha Trang</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm tuyến</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection