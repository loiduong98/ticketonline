@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Vé
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ngày đặt vé</th>
                                <th>Tên khách hàng</th>
                                <th>ID lịch chạy</th>
                                <th>ID hóa đơn</th>
                                <th>Ngày khởi hành</th>
                                <th>Giờ khởi hành</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ve as $v)
                            <tr class="odd gradeX" align="center">
                                <td>{{$v->id}}</td>
                                <td>{{$v->NgayDatVe}}</td>
                                <td>{{$v->khachhang->HoTen}}</td>
                                <td>{{$v->idLC}}</td>
                                <td>{{$v->idHD}}</td>
                                <td>{{$v->NgayKhoiHanh}}</td>
                                <td>{{$v->GioKhoiHanh}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/ve/xoa/{{$v->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/ve/sua/{{$v->id}}">Sửa</a></td>
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