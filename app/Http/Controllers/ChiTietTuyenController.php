<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitiettuyen;
use App\nhanvien;
use App\khachhang;


class ChiTietTuyenController extends Controller
{
    public function getDanhSach()
    {
    	$chitiettuyen = chitiettuyen::orderBy('idTuyen','DESC')->get();
    	return view('admin.chitiettuyen.danhsach', ['chitiettuyen'=>$chitiettuyen]);
    }

    public function getThem()
    {
    	return view('admin.chitiettuyen.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'GiaVe'=>'required', 
            ],
            [
                'GiaVe.required'=>'Bạn chưa nhập',
            ]);
        $chitiettuyen = new chitiettuyen;
        $chitiettuyen->idNV = $request->idNV;
        $chitiettuyen->idKH = $request->idKH;
        $chitiettuyen->GiaVe = $request->GiaVe;
        $chitiettuyen->GioKhoiHanh = $request->GioKhoiHanh;
        $chitiettuyen->ThoiGianDi = $request->ThoiGianDi;
        $chitiettuyen->QuangDuong = $request->QuangDuong;
        $chitiettuyen->save();
        return redirect('admin/chitiettuyen/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($idTuyen)
    {
        $chitiettuyen = chitiettuyen::find($idTuyen);
        return view('admin.chitiettuyen.sua', ['chitiettuyen'=>$chitiettuyen]);
    }

    public function postSua(Request $request,$idTuyen)
    {
        $chitiettuyen = chitiettuyen::find($idTuyen);
        $this->validate($request,
            [
                'GiaVe'=>'required', 
            ],
            [
                'GiaVe.required'=>'Bạn chưa nhập',
            ]);
        $chitiettuyen = new chitiettuyen;
        $chitiettuyen->idNV = $request->idNV;
        $chitiettuyen->idKH = $request->idKH;
        $chitiettuyen->GiaVe = $request->GiaVe;
        $chitiettuyen->GioKhoiHanh = $request->GioKhoiHanh;
        $chitiettuyen->ThoiGianDi = $request->ThoiGianDi;
        $chitiettuyen->QuangDuong = $request->QuangDuong;
        $chitiettuyen->save();
        return redirect('admin/chitiettuyen/sua/'.$idTuyen)->with('thongbao','Sửa thành công');
    }

    public function getXoa($idTuyen)
    {
        $chitiettuyen = chitiettuyen::find($idTuyen);
        $chitiettuyen->delete();
        return redirect('admin/chitiettuyen/danhsach')->with('thongbao','Xóa thành công');
    }
}
