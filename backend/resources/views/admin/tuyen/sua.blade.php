@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tuyến
                            <small>{{$tuyen->TenTuyen}}</small>
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
                        <form action="admin/tuyen/sua/{{$tuyen->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Tên tuyến</label>
                                <input class="form-control" name="TenTuyen" placeholder="Nhập tên tuyến" value="{{$tuyen->TenTuyen}}"/>
                            </div>
                            <div>
                                <label>Điểm đi</label>
                                <select class="form-control" name="idBenDi" id="idBenDi">
                                    <option value="{{$tuyen->ben->id}}">{{$tuyen->ben->TenBen}}</option>
                                    @foreach($ben as $b)
                                    <option value="{{$b->id}}">{{$b->TenBen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div>
                                <label>Điểm đến</label>
                                <select class="form-control" name="idBenDen" id="idBenDen">
                                    <option value="{{$tuyen->ben1->id}}">{{$tuyen->ben1->TenBen}}</option>
                                    @foreach($ben as $b)
                                    <option value="{{$b->id}}">{{$b->TenBen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <div>
                            <label>Trạng Thái</label>
                            <select class="form-control" name="TrangThai">
                                <option value="1">Hoạt động</option>
                                <option value="0">Không hoạt động</option>   
                            </select>
                            </div>
                            </br>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection