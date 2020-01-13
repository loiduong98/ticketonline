@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết vé
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>ID vé</th>
                                <th>Tên ghế</th>
                                <th>Giá</th>
                                <th>Số lượng</th>
                                <th>Mã bí mật</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($chitietve as $ctv)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ctv->id}}</td>
                                <td>{{$ctv->idVe}}</td>
                                <td>{{$ctv->idGhe}}</td>
                                <td>{{$ctv->Gia}}</td>
                                <td>{{$ctv->SoLuong}}</td>
                                <td>{{$ctv->MaBiMat}}</td>                               
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/ve/danhsach"> Quay lại</a></td>
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