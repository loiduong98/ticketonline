@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Xe
                            <small>{{$xe->BSXe}}</small>
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
                        <form action="admin/xe/sua/{{$xe->id}}" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Biển số xe</label>
                                <input class="form-control" name="BSXe" placeholder="Nhập biển số xe" value="{{$xe->BSXe}}" />
                            </div>
                            
                            <div class="form-group">
                                <label>Sơ đồ ghế</label>
                                <select class="form-control" name="idSoDoGhe">
                                    <option value="{{$xe->sodoghe->idSoDoghe}}">{{$xe->sodoghe->TenSoDo}}</option>                                  
                                    @foreach($sodoghe as $sdg)
                                        <option value="{{$sdg->id}}">{{$sdg->TenSoDo}}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                            </br>
                            <div>
                            <label>Trạng Thái</label>
                            <select class="form-control" name="TrangThai">
                                <option value="1">Hoạt động</option>
                                <option value="0">Không hoạt động</option>   
                            </select>
                            </div>
                            </br>
                            <button type="submit" class="btn btn-default">Sửa Xe</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection