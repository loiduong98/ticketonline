<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lichchay;
use App\tuyen;
use App\xe;

class LichChayController extends Controller
{
    public function getDanhSach()
    {

    	$lichchay = lichchay::orderBy('id','DESC')->get();
    	return view('admin.lichchay.danhsach', ['lichchay'=>$lichchay]);
    }

    public function getThem()
    {
        $tuyen = tuyen::all();
        $xe = xe::all();
    	return view('admin.lichchay.them',['tuyen'=>$tuyen],['xe'=>$xe]);
    }

    public function postThem(Request $request)
    {
        $tuyen = tuyen::all();
        $xe = xe::all();
        $this->validate($request,
            [
                'NgayKhoiHanh'=>'required',
                'GioKhoiHanh'=>'required',
                'Gia'=>'required',
                'idTuyen'=>'required',
                'idXe'=>'required'
            ],
            [
                'NgayKhoiHanh.required'=>'Bạn chưa chọn ngày khởi hành',
                'GioKhoiHanh.required'=>'Bạn chưa chọn ngày khởi hành',
                'Gia.required'=>'Bạn chưa chọn điểm đến',
                'idTuyen.required'=>'Bạn chưa nhập tên tuyến',
                'idXe.required'=>'Bạn chưa nhập tên tuyến'
            ]);
        $lichchay = new lichchay;
        $lichchay->NgayKhoiHanh = $request->NgayKhoiHanh;
        $lichchay->GioKhoiHanh = $request->GioKhoiHanh;
        $lichchay->Gia = $request->Gia;
        $lichchay->idTuyen = $request->idTuyen;
        $lichchay->idXe = $request->idXe;
        $lichchay->save();
        return redirect('admin/lichchay/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $lichchay = lichchay::find($id);
        $tuyen = tuyen::all();
        $xe = xe::all();
        return view('admin.lichchay.sua', ['lichchay'=>$lichchay],['tuyen'=>$tuyen],['xe'=>$xe]);
    }

    public function postSua(Request $request,$id)
    {
        $lichchay = lichchay::find($id);
        $tuyen = tuyen::all();
        $xe = xe::all();
        $this->validate($request,
            [
                'NgayKhoiHanh'=>'required',
                'GioKhoiHanh'=>'required',
                'Gia'=>'required',
                'idTuyen'=>'required',
                'idXe'=>'required'
            ],
            [
                'NgayKhoiHanh.required'=>'Bạn chưa chọn ngày khởi hành',
                'GioKhoiHanh.required'=>'Bạn chưa chọn ngày khởi hành',
                'Gia.required'=>'Bạn chưa chọn điểm đến',
                'idTuyen.required'=>'Bạn chưa nhập tên tuyến',
                'idXe.required'=>'Bạn chưa nhập tên tuyến'
            ]);
        $lichchay->NgayKhoiHanh = $request->NgayKhoiHanh;
        $lichchay->GioKhoiHanh = $request->GioKhoiHanh;
        $lichchay->Gia = $request->Gia;
        $lichchay->idTuyen = $request->idTuyen;
        $lichchay->idXe = $request->idXe;
        $lichchay->save();
        return redirect('admin/lichchay/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $lichchay = lichchay::find($id);
        $lichchay->delete();
        return redirect('admin/lichchay/danhsach')->with('thongbao','Xóa thành công');
    }
}
