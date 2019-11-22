@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lịch chạy
                            <small>{{$lichchay->id}}</small>
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
                        <form action="admin/lichchay/sua/{{$lichchay->id}}" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                             <div class="form-group">
                                <label>Ngày khởi hành</label>
                                <input class="form-control" type="date" name="NgayKhoiHanh" placeholder="Chọn ngày khởi hành" value="{{$lichchay->NgayKhoiHanh}}"/>
                            </div>
                            
                            <div class="form-group">
                                <label>Giờ khởi hành</label>
                                <input class="form-control" type="time" name="GioKhoiHanh" placeholder="Chọn giờ khởi hành" value="{{$lichchay->GioKhoiHanh}}"/>
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="Gia" placeholder="Nhập giá" value="{{$lichchay->Gia}}"/>
                            </div>
                            <div class="form-group">
                                <label>Id Tuyến</label>
                                <input class="form-control" name="idTuyen" placeholder="Nhập id tuyến" value="{{$lichchay->idTuyen}}"/>
                            </div>
                            <div class="form-group">
                                <label>Id Xe</label>
                                <input class="form-control" name="idXe" placeholder="Nhập id xe" value="{{$lichchay->idXe}}"/>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa lịch chạy</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection