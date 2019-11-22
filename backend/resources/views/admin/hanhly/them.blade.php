@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khách hàng
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
                        <form action="admin/khachhang/them" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Tên khách hàng</label>
                                <input class="form-control" name="Ten" placeholder="Nhập tên khách hàng" />
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
                                <label>Email</label>
                                <input class="form-control" name="Email" placeholder="Nhập email" />
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input class="form-control" name="DiaChi" placeholder="Nhập địa chỉ" />
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="SDT" placeholder="Nhập SDT" />
                            </div>
                            <div class="form-group">
                                <label>Ghi chú</label>
                                <textarea id="demo" class="form-control ckeditor" rows="3" name="GhiChu"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-default">Thêm khách hàng</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection