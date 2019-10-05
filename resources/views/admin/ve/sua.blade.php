@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Vé
                            <small>{{$ve->id}}</small>
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
                        <form action="admin/ve/sua/{{$ve->id}}" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                             <div class="form-group">
                                <label>Ngày đặt vé</label>
                                <input class="form-control" type="date" name="NgayDatVe" placeholder="" value="{{$ve->NgayDatVe}}"/>
                            </div>
                            <div class="form-group">
                                <label>ID Khách hàng</label>
                                <input class="form-control" name="idKH" placeholder="Nhập id khách hàng" value="{{$ve->idKH}}"/>
                            </div>
                            <div class="form-group">
                                <label>ID Lịch chạy</label>
                                <input class="form-control" name="idLC" placeholder="Nhập id lịch chạy" value="{{$ve->idLC}}"/>
                            </div>
                            <div class="form-group">
                                <label>ID Hóa Đơn</label>
                                <input class="form-control" name="idHD" placeholder="Nhập id hóa đơn" value="{{$ve->idHD}}"/>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa khách hàng</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection