@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Họ Tên</th>
                                <th>Email</th>
                                <th>Quyền</th>
                                <th>Password</th>                               
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$us->id}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->email}}</td>
                                <td>{{$us->level}}</td>
                                <td>{{$us->password}}</td>                              
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/users/xoa/{{$us->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/users/sua/{{$us->id}}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection