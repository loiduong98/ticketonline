<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietve;
use App\chitietghe;

class ChiTietVeController extends Controller
{
    public function getDanhSach()
    {
        $chitietghe = chitietghe::all();
    	$chitietve = chitietve::orderBy('id','DESC')->get();
    	return view('admin.chitietve.danhsach', ['chitietve'=>$chitietve]);
    }

    public function getThem()
    {
        $chitietghe = chitietghe::all();
    	return view('admin.chitietve.them',['chitietghe'=>$chitietghe]);
    }

    public function postThem(Request $request)
    {
        $chitietghe = chitietghe::all();
        $this->validate($request,
            [
                'idVe'=>'required',
                'idGhe'=>'required'
            ],
            [
                'idVe.required'=>'Bạn chưa chọn vé',
                'idGhe.required'=>'Bạn chưa nhập ghế'
            ]);
        $chitietve = new chitietve;
        $chitietve->idVe = $request->idVe;
        $chitietve->idGhe = $request->idGhe;
        $chitietve->Gia = $request->Gia;
        $chitietve->SoLuong = $request->SoLuong;
        $chitietve->MaBiMat = str_random(32)."_".($request->MaBiMat);
        $chitietve->save();
        return redirect('admin/chitietve/them')->with('thongbao','Thêm thành công');
    }
}
