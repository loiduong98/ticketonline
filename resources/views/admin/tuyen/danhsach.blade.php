@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Tuyến
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>                               
                                <th>Tên tuyến</th>
                                <th>Điểm đi</th>
                                <th>Điểm đến</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tuyen as $t)
                            <tr class="odd gradeX" align="center">
                                <td>{{$t->id}}</td>                               
                                <td>{{$t->TenTuyen}}</td>
                                <td>{{$t->ben->TenBen}}</td>
                                <td>{{$t->ben1->TenBen}}</td>                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/tuyen/xoa/{{$t->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/tuyen/sua/{{$t->id}}">Sửa</a></td>
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