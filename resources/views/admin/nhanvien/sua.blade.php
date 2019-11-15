@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhân viên
                            <small>{{$nhanvien->HoTen}}</small>
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
                        <form action="admin/nhanvien/sua/{{$nhanvien->id}}" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                             <div class="form-group">
                                <label>Tên nhân viên</label>
                                <input class="form-control" name="HoTen" placeholder="Nhập tên nhân viên" value="{{$nhanvien->HoTen}}"/>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="SDT" placeholder="Nhập số điện thoại" value="{{$nhanvien->SDT}}"/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="Email" placeholder="Nhập email" value="{{$nhanvien->Email}}"/>
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="Nhập địa chỉ" value="{{$nhanvien->DiaChi}}"/>
                            </div>
                            <div class="form-group">
                                <label>Ngày sinh</label>
                                <input class="form-control" type="date" name="NgaySinh" placeholder="Chọn ngày sinh" value="{{$nhanvien->NgaySinh}}"/>
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
                                <label>Usersname</label>
                                <input class="form-control" name="idUsers" placeholder="Usersname" value="{{$nhanvien->users->username}}"/>
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
                                <label>Tình trạng</label>
                                <select class="form-control" name="TinhTrang" id="TinhTrang">                                   
                                    <option value="Hoạt động">Hoạt động</option>
                                    <option value="Không hoạt động">Không hoạt động</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa nhân viên</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection