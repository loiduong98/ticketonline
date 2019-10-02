@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Vé
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
                        <form action="admin/ve/them" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Ngày khởi hành</label>
                                <input class="form-control" type="date" name="NgayKH" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Quãng đường</label>
                                <input class="form-control" name="QuangDuong" placeholder="Nhập quãng đường" />
                            </div>
                            <div class="form-group">
                                <label>Thời gian đi</label>
                                <input class="form-control" name="ThoiGianDi" placeholder="Nhập thời gian đi" />
                            </div>
                            <div class="form-group">
                                <label>Giá</label>
                                <input class="form-control" name="Gia" placeholder="Nhập giá" />
                            </div>
                            <div class="form-group">
                                <label>Giờ khởi hành</label>
                                <input class="form-control" type="time" name="GioKH" placeholder="" />
                            </div>
                            

                        </div>
                            <button type="submit" class="btn btn-default">Thêm vé</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection