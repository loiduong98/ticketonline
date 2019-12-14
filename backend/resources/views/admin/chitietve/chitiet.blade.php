@extends('admin.layout.index') @section('content')
<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Vé
                    <small>chi tiết</small>
                </h1>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Tên ghế</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Mã bí mật</th>
                            <th>Quay lại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <th>{{$chitietve->id}}</th>
                        <th>{{$chitietve->idGhe}}</th>
                        <th>{{$chitietve->Gia}}</th>
                        <th>{{$chitietve->SoLuong}}</th>
                        <th>{{$chitietve->MaBiMat}}</th>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/ve/danhsach"> Quay lại</a></td>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection