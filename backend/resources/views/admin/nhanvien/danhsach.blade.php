@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Nhân viên
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Họ Tên</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>
                                <th>Địa chỉ</th>
                                <th>Ngày sinh</th>
                                <th>Chức vụ</th>
                                <th>Username</th>
                                <th>Giới Tính</th>
                                <th>Tình trạng</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($nhanvien as $nv)
                            <tr class="odd gradeX" align="center">
                                <td>{{$nv->id}}</td>
                                <td>{{$nv->HoTen}}</td>
                                <td>{{$nv->SDT}}</td>
                                <td>{{$nv->Email}}</td>
                                <td>{{$nv->DiaChi}}</td>
                                <td>{{$nv->NgaySinh}}</td>
                                <td>{{$nv->chucvu->TenCV}}</td>
                                <td>{{$nv->users->username}}</td>
                                <td>{{$nv->GioiTinh}}</td>
                                <td>{{$nv->TinhTrang}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/nhanvien/xoa/{{$nv->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/nhanvien/sua/{{$nv->id}}">Sửa</a></td>
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