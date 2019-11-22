@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sơ đồ ghế
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên sơ đồ</th>
                                <th>Số dòng</th>
                                <th>Số cột</th>
                                <th>Hình ảnh</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sodoghe as $sdg)
                            <tr class="odd gradeX" align="center">
                                <td>{{$sdg->id}}</td>
                                <td>{{$sdg->TenSoDo}}</td>
                                <td>{{$sdg->SoDong}}</td>
                                <td>{{$sdg->SoCot}}</td>
                                <td><img width="300px" height="700px" src="upload\sodoghe\{{$sdg->UrlHinh}}" alt="" /></td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/sodoghe/xoa/{{$sdg->id}}"> Xóa</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/sodoghe/sua/{{$sdg->id}}">Sửa</a></td>
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