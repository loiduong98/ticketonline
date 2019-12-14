@extends('admin.layout.index') @section('content')
<div id="page-wrapper">

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hóa đơn
                    <small>chi tiết</small>
                </h1>
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>ID vé</th>
                                <th>Số lượng</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>                         
                            <tr class="odd gradeX" align="center">
                                <td>{{$ct_hoadon->id}}</td>
                                <td>{{$ct_hoadon->idVe}}</td>
                                <td>{{$ct_hoadon->SoLuong}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hoadon/danhsach}}">Quay lại</a></td>                 
                            </tr>                          
                        </tbody>
                        
                    </table>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
@endsection