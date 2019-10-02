@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Loại Xe
                            <small>{{$loaixe->TenLX}}</small>
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
                        <form action="admin/loaixe/sua/{{$loaixe->id}}" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                             <div class="form-group">
                                <label>Tên loại xe</label>
                                <input class="form-control" name="TenLX" placeholder="Nhập biển số xe" value="{{$loaixe->TenLX}}" />
                            </div>                           
                            <div class="form-group">
                                <label>ID Xe</label>
                                <input class="form-control" name="idXe" placeholder="Nhập ID xe" value="{{$loaixe->idXe}}"/>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa loại xe</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection