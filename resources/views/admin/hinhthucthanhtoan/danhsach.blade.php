@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Hình thức thanh toán
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên hình thức thanh toán</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hinhthucthanhtoan as $httt)
                            <tr class="odd gradeX" align="center">
                                <td>{{$httt->id}}</td>
                                <td>{{$httt->TenHTTT}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hinhthucthanhtoan/xoa/{{$httt->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/hinhthucthanhtoan/sua/{{$httt->id}}">Sửa</a></td>
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