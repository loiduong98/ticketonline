<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietghe;
use App\sodoghe;

class ChiTietGheController extends Controller
{
    public function getDanhSach()
    {

    	$chitietghe = chitietghe::orderBy('id','DESC')->get();
    	return view('admin.chitietghe.danhsach', ['chitietghe'=>$chitietghe]);
    }

    public function getThem()
    {
        $sodoghe = sodoghe::all();
    	return view('admin.chitietghe.them',['sodoghe'=>$sodoghe]);
    }

    public function postThem(Request $request)
    {
        $sodoghe = sodoghe::all();
        $this->validate($request,
            [
                'idSoDoGhe'=>'required',
                'TenGhe'=>'required'
            ],
            [
                'idSoDoGhe.required'=>'Bạn chưa chọn sơ đồ',
                'TenGhe.required'=>'Bạn chưa nhập tên ghế'
            ]);
        $chitietghe = new chitietghe;
        $chitietghe->idSoDoGhe = $request->idSoDoGhe;
        $chitietghe->TenGhe = $request->TenGhe;
        $chitietghe->save();
        return redirect('admin/chitietghe/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $chitietghe = chitietghe::find($id);
        $sodoghe = sodoghe::all();
        return view('admin.chitietghe.sua', ['chitietghe'=>$chitietghe],['sodoghe'=>$sodoghe]);
    }

    public function postSua(Request $request,$id)
    {
        $chitietghe = chitietghe::find($id);
        $this->validate($request,
        [
            'idSoDoGhe'=>'required',
            'TenGhe'=>'required'
        ],
        [
            'idSoDoGhe.required'=>'Bạn chưa chọn sơ đồ',
            'TenGhe.required'=>'Bạn chưa nhập tên ghế'
        ]);
    $chitietghe->idSoDoGhe = $request->idSoDoGhe;
    $chitietghe->TenGhe = $request->TenGhe;
    $chitietghe->save();
        return redirect('admin/chitietghe/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $chitietghe = chitietghe::find($id);
        $chitietghe->delete();
        return redirect('admin/chitietghe/danhsach')->with('thongbao','Xóa thành công');
    }
}
