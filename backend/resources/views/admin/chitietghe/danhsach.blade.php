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
                                <th>ID chi tiết ghế</th>
                                <th>Sơ đồ ghế</th>
                                <th>Tên ghế</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chitietghe as $ctg)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ctg->id}}</td>
                                <td>{{$ctg->sodoghe->TenSoDo}}</td>
                                <td>{{$ctg->TenGhe}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/chitietghe/xoa/{{$ctg->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/chitietghe/sua/{{$ctg->id}}">Sửa</a></td>
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