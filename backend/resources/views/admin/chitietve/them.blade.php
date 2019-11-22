@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết vé
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
                        <form action="admin/chitietve/them" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>ID vé</label>
                                <input class="form-control" name="idVe" placeholder="Nhập ID vé" />
                            </div>
                            <div class="form-group">
                                <label>ID ghế</label>
                                <input class="form-control" name="idGhe" placeholder="Nhập ID ghế" />
                            </div>
                            <div class="form-group">
                                <label>Gia</label>
                                <input class="form-control" name="Gia" placeholder="Nhập giá" />
                            </div>
                            <div class="form-group">
                                <label>Số lượng</label>
                                <input class="form-control" name="SoLuong" placeholder="Nhập SL" />
                            </div>
                            <div class="form-group">
                                <label>Mã bí mật</label>
                                <input class="form-control" name="MaBiMat" placeholder="Nhập SL" />
                            </div>
                            <button type="submit" class="btn btn-default">Thêm chi tiết vé</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection