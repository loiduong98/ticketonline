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
                                <input class="form-control" name="TenTuyen" placeholder="Nhập tên tuyến" />
                            </div>
                            <div>
                                <label>Điểm đi</label>
                                <select class="form-control" name="idBenDi" id="idBenDi">
                                    @foreach($ben as $b)
                                    <option value="{{$b->id}}">{{$b->TenBen}}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div>
                                <label>Điểm đến</label>
                                <select class="form-control" name="idBenDen" id="idBenDen">
                                    @foreach($ben as $b)
                                    <option value="{{$b->id}}">{{$b->TenBen}}</option>
                                    @endforeach
                                </select>
                            </div> 
                            </br>
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