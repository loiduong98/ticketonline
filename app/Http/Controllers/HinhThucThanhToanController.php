<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hinhthucthanhtoan;

class HinhThucThanhToanController extends Controller
{
    public function getDanhSach()
    {

    	$hinhthucthanhtoan = hinhthucthanhtoan::orderBy('id','DESC')->get();
    	return view('admin.hinhthucthanhtoan.danhsach', ['hinhthucthanhtoan'=>$hinhthucthanhtoan]);
    }

    public function getThem()
    {
        $hinhthucthanhtoan = hinhthucthanhtoan::all();
    	return view('admin.hinhthucthanhtoan.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'TenHTTT'=>'required|min:3|max:100|unique:hinhthucthanhtoan'
            ],
            [
                'TenHTTT.required'=>'Bạn chưa nhập tên tuyến',
                'TenHTTT.min'=>'Tên tuyến quá ngắn',
                'TenHTTT.max'=>'Tên tuyến quá dài'
            ]);
        $hinhthucthanhtoan = new hinhthucthanhtoan;
        $hinhthucthanhtoan->TenHTTT = $request->TenHTTT;
        $hinhthucthanhtoan->save();
        return redirect('admin/hinhthucthanhtoan/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $hinhthucthanhtoan = hinhthucthanhtoan::find($id);
        return view('admin.hinhthucthanhtoan.sua', ['hinhthucthanhtoan'=>$hinhthucthanhtoan]);
    }

    public function postSua(Request $request,$id)
    {
        $hinhthucthanhtoan = hinhthucthanhtoan::find($id);
        $this->validate($request,
            [
                'TenHTTT'=>'required|min:3|max:100|unique:hinhthucthanhtoan'
            ],
            [
                'TenHTTT.required'=>'Bạn chưa nhập tên tuyến',
                'TenHTTT.min'=>'Tên tuyến quá ngắn',
                'TenHTTT.max'=>'Tên tuyến quá dài'
            ]);
        $hinhthucthanhtoan->TenHTTT = $request->TenHTTT;
        $hinhthucthanhtoan->save();
        return redirect('admin/hinhthucthanhtoan/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $hinhthucthanhtoan = hinhthucthanhtoan::find($id);
        $hinhthucthanhtoan->delete();
        return redirect('admin/hinhthucthanhtoan/danhsach')->with('thongbao','Xóa thành công');
    }
}
