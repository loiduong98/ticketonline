@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Lịch chạy
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Ngày khởi hành</th>
                                <th>Giờ khởi hành</th>
                                <th>Giá</th>
                                <th>Tên tuyến</th>
                                <th>Sơ đồ ghế</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lichchay as $lc)
                            <tr class="odd gradeX" align="center">
                                <td>{{$lc->id}}</td>
                                <td>{{$lc->NgayKhoiHanh}}</td>
                                <td>{{$lc->GioKhoiHanh}}</td>
                                <td>{{$lc->Gia}}</td>
                                <td>{{$lc->tuyen->TenTuyen}}</td>
                                <td>{{$lc->xe->idSoDoGhe}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/lichchay/xoa/{{$lc->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/lichchay/sua/{{$lc->id}}">Sửa</a></td>
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