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
                                <label>Giá</label>
                                <input class="form-control" name="Gia" placeholder="Nhập giá" value="{{$lichchay->Gia}}"/>
                            </div>
                            <div class="form-group">
                                <label>Tuyến</label>
                                <select class="form-control" name="idTuyen">
                                    <option value="{{$lichchay->idTuyen}}">{{$lichchay->tuyen->TenTuyen}}</option>
                                    @foreach($tuyen as $t)
                                    <option value="{{$t['id']}}">{{$t['TenTuyen']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Xe</label>
                                <select class="form-control" name="idXe">
                                    <option value="{{$lichchay->idXe}}">{{$lichchay->xe->BSXe}}</option>
                                    @foreach($xe as $x)
                                    <option value="{{$x->id}}">{{$x->BSXe}}</option>
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