@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhân viên
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
                        <form action="admin/nhanvien/them" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Tên nhân viên</label>
                                <input class="form-control" name="HoTen" placeholder="Nhập tên nhân viên" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="SDT" placeholder="Nhập số điện thoại" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="Nhập địa chỉ" />
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input class="form-control" type="date" name="NgaySinh" placeholder="Chọn ngày sinh" />
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select class="form-control" name="GioiTinh" id="GioiTinh">                                   
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    <option value="Khác">Giới tính khác</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Chức vụ</label>
                                <select class="form-control" name="idCV">
                                    @foreach($chucvu as $cv)
                                    <option value="{{$cv->id}}">{{$cv->TenCV}}</option>
                                    @endforeach
                                </select>
                            </div>       
                            <div class="form-group">
                                <label>Email</label>
                                <select class="form-control" name="idEmail">
                                    @foreach($users as $us)
                                    <option value="{{$us->id}}">{{$us->email}}</option>
                                    @endforeach
                                </select>
                            </div>                           
                            <div>
                            <label>Trạng Thái</label>
                            <select class="form-control" name="TrangThai">
                                <option value="1">Hoạt động</option>
                                <option value="0">Không hoạt động</option>   
                            </select>
                            </div>
                            <br> 
                            <button type="submit" class="btn btn-default">Thêm nhân viên</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection