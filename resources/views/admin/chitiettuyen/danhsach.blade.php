@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết tuyến
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID Tuyến</th>
                                <th>ID nhân viên</th>
                                <th>ID khách hàng</th>
                                <th>Giá vé</th>
                                <th>Giờ khởi hành</th>
                                <th>Thời gian đi</th>
                                <th>Quãng đường</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chitiettuyen as $ctt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ctt->idTuyen}}</td>
                                <td>{{$ctt->idNV}}</td>
                                <td>{{$ctt->idKH}}</td>
                                <td>{{$ctt->GiaVe}}</td>
                                <td>{{$ctt->GioKhoiHanh}}</td>
                                <td>{{$ctt->ThoiGianDi}}</td>
                                <td>{{$ctt->QuangDuong}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/chitiettuyen/xoa/{{$ctt->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/chitiettuyen/sua/{{$ctt->id}}">Sửa</a></td>
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