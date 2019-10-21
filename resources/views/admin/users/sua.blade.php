@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Users
                            <small>{{$users->username}}</small>
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
                        <form action="admin/users/sua/{{$users->id}}" method="POST" enctype="multipart/form-data">
                             <input type="hidden" name="_token" value="{{csrf_token()}}" />
                             <div class="form-group">
                                <label>username</label>
                                <input class="form-control" name="username" placeholder="Nhập username" value="{{$users->username}}"/>
                            </div>
                            <div class="form-group">
                                <label>password</label>
                                <input class="form-control" type="password"  name="password" placeholder="Nhập password" value="{{$users->password}}"/>
                            </div>
                            <div class="form-group">
                                <label>Group</label>
                                <select class="form-control" name="idGroup" id="idGroup">                                   
                                    <option value="Users">Users</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>    
                            <div class="form-group">
                                <label>Hình</label>
                                <input type="file" name="urlHinh">
                            </div>                    
                            <button type="submit" class="btn btn-default">Sửa users</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection