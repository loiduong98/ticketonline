<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tuyen;
use App\xe;

class TuyenController extends Controller
{
    public function getDanhSach()
    {
    	$tuyen = tuyen::orderBy('id','DESC')->get();
    	return view('admin.tuyen.danhsach', ['tuyen'=>$tuyen]);
    }

    public function getThem()
    {
    	return view('admin.tuyen.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'DiemDi'=>'required',
                'DiemDen'=>'required',
                'NgayKhoiHanh'=>'required',
                'GioKhoiHanh'=>'required'  
            ],
            [
                'DiemDi.required'=>'Bạn chưa chọn điểm đi',
                'DiemDen.required'=>'Bạn chưa chọn điểm đến',
                'NgayKhoiHanh'=>'Bạn chưa chọn ngày khởi hành',
                'GioKhoiHanh'=>'Bạn chưa chọn giờ khởi hành'
            ]);
        $tuyen = new tuyen;
        $tuyen->DiemDi = $request->DiemDi;
        $tuyen->DiemDen = $request->DiemDen;
        $tuyen->NgayKhoiHanh = $request->NgayKhoiHanh;
        $tuyen->GioKhoiHanh = $request->GioKhoiHanh;
        $tuyen->SoLuongVe = $request->SoLuongVe;
        $tuyen->idXe = $request->idXe;
        $tuyen->save();
        return redirect('admin/tuyen/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $tuyen = tuyen::find($id);
        return view('admin.tuyen.sua', ['tuyen'=>$tuyen]);
    }

    public function postSua(Request $request,$id)
    {
        $tuyen = tuyen::find($id);
        $this->validate($request,
            [
                'DiemDi'=>'required',
                'DiemDen'=>'required',
                'NgayKhoiHanh'=>'required',
                'GioKhoiHanh'=>'required'  
            ],
            [
                'DiemDi.required'=>'Bạn chưa chọn điểm đi',
                'DiemDen.required'=>'Bạn chưa chọn điểm đến',
                'NgayKhoiHanh'=>'Bạn chưa chọn ngày khởi hành',
                'GioKhoiHanh'=>'Bạn chưa chọn giờ khởi hành'
            ]);
        $tuyen->DiemDi = $request->DiemDi;
        $tuyen->DiemDen = $request->DiemDen;
        $tuyen->NgayKhoiHanh = $request->NgayKhoiHanh;
        $tuyen->GioKhoiHanh = $request->GioKhoiHanh;
        $tuyen->SoLuongVe = $request->SoLuongVe;
        $tuyen->idXe = $request->idXe;
        $tuyen->save();
        return redirect('admin/tuyen/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $tuyen = tuyen::find($id);
        $tuyen->delete();
        return redirect('admin/tuyen/danhsach')->with('thongbao','Xóa thành công');
    }
}
