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
                                <th>Ngày đặt vé</th>
                                <th>Tổng tiền</th>
                                <th>Ghi chú</th>
                                <th>Tên khách hàng</th>
                                <th>Hình thức thanh toán</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hoadon as $hd)
                            <tr class="odd gradeX" align="center">
                                <td>{{$hd->id}}</td>
                                <td>{{$hd->NgayDatVe}}</td>
                                <td>{{$hd->TongTien}}</td>
                                <td>{{$hd->GhiChu}}</td>
                                <td>{{$hd->khachhang->HoTen}}</td>
                                <td>{{$hd->hinhthucthanhtoan->TenHTTT}}</td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/hoadon/chitiet/{{$hd->id}}"> Chi tiết hóa đơn</a></td>                 
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