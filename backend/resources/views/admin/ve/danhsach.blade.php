@extends('admin.layout.index') @section('content')
<style>
    .fa-thumbs-down {
        color: red !important;
    }
    
    .fa-thumbs-up {
        color: blue !important;
    }
</style>
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
                        <th>Tên tuyến</th>
                        <th>Biển số xe</th>
                        <th>Ngày khởi hành</th>
                        <th>Giờ khởi hành</th>
                        <th>Tình trạng vé</th>
                        <th>Chi tiết vé</th>
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
                        <td>{{$v->lichchay->TenLC}}</td>
                        <td>{{$v->lichchay->xe->BSXe}}</td>
                        <td>{{$v->NgayKhoiHanh}}</td>
                        <td>{{$v->GioKhoiHanh}}</td>
                        <td><div class="myDIV">
                        {{$v->TrangThai}}
                        </div>
                        </td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/chitietve/chitiet/{{$v->id}}"> Chi tiết vé</a></td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/ve/xoa/{{$v->id}}">
                                Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/ve/sua/{{$v->id}}">Sửa</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<script>
    var x = document.getElementsByClassName("myDIV");
    console.log(x);
    console.log(x[1].innerHTML);

    for (var i = 0; i < x.length; i++) {
        x[i].onclick = function() {
            console.log(this.value);
            if (this.value == 0) {
                this.innerHTML = "<i class='fa fa-thumbs-down'></i>";
            } else {
                this.innerHTML = '<i class="fa fa-thumbs-up"></i>';
            }
        }
    }
</script>
@endsection