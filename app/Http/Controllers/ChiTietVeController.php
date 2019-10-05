<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietve;
use App\chitietghe;

class ChiTietVeController extends Controller
{
    public function getDanhSach()
    {

    	$chitietve = chitietve::orderBy('id','DESC')->get();
    	return view('admin.chitietve.danhsach', ['chitietve'=>$chitietve]);
    }

    public function getThem()
    {
        $sodoghe = sodoghe::all();
    	return view('admin.chitietve.them',['sodoghe'=>$sodoghe]);
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
        $chitietve = new chitietve;
        $chitietve->idSoDoGhe = $request->idSoDoGhe;
        $chitietve->TenGhe = $request->TenGhe;
        $chitietve->save();
        return redirect('admin/chitietve/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $chitietve = chitietve::find($id);
        $sodoghe = sodoghe::all();
        return view('admin.chitietve.sua', ['chitietve'=>$chitietve],['sodoghe'=>$sodoghe]);
    }

    public function postSua(Request $request,$id)
    {
        $chitietve = chitietve::find($id);
        $this->validate($request,
        [
            'idSoDoGhe'=>'required',
            'TenGhe'=>'required'
        ],
        [
            'idSoDoGhe.required'=>'Bạn chưa chọn sơ đồ',
            'TenGhe.required'=>'Bạn chưa nhập tên ghế'
        ]);
    $chitietve->idSoDoGhe = $request->idSoDoGhe;
    $chitietve->TenGhe = $request->TenGhe;
    $chitietve->save();
        return redirect('admin/chitietve/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $chitietve = chitietve::find($id);
        $chitietve->delete();
        return redirect('admin/chitietve/danhsach')->with('thongbao','Xóa thành công');
    }
}
