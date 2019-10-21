@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tuyến
                            <small>{{$tuyen->DiemDi}} - {{$tuyen->DiemDen}}</small>
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
                                    @foreach($tuyen as $t)
                                    <option value="{{$t->ben->id}}">{{$t->ben->TenBen}}</option>
                                    @endforeach
                                    <!-- @foreach($ben as $b)                                   
                                    <option
                                    @if($tuyen->idBenDi == $tuyen->id)
                                        {{"selected"}}
                                    @endif
                                     value="{{$b->id}}">{{$b->TenBen}}
                                    </option>
                                    @endforeach -->
                                </select>
                            </div>
                            
                            <div>
                                <label>Điểm đến</label>
                                <select class="form-control" name="idBenDen" id="idBenDen">
                                    @foreach($tuyen as $t)
                                    <option value="{{$t->ben->id}}">{{$t->ben->TenBen}}</option>
                                    @endforeach
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