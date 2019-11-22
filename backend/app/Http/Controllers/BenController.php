<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ben;

class BenController extends Controller
{
    public function getDanhSach()
    {
    	$ben = ben::orderBy('id','DESC')->get();
    	return view('admin.ben.danhsach', ['ben'=>$ben]);
    }

    public function getThem()
    {
    	return view('admin.ben.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'TenBen'=>'required|min:3|max:100|unique:ben' 
            ],
            [
                'TenBen.required'=>'Bạn chưa nhập tên bến',
                'TenBen.min'=>'Tên bến quá ngắn',
                'TenBen.max'=>'Tên bến quá dài'
            ]);
        $ben = new ben;
        $ben->TenBen = $request->TenBen;
        $ben->save();
        return redirect('admin/ben/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $ben = ben::find($id);
        return view('admin.ben.sua', ['ben'=>$ben]);
    }

    public function postSua(Request $request,$id)
    {
        $ben = ben::find($id);
        $this->validate($request,
            [
                'TenBen'=>'required|min:3|max:100|unique:ben'  
            ],
            [
                'TenBen.required'=>'Bạn chưa nhập tên bến',
                'TenBen.min'=>'Tên bến quá ngắn',
                'TenBen.max'=>'Tên bến quá dài'
            ]);
            $ben->TenBen = $request->TenBen;
            $ben->save();
        return redirect('admin/ben/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $ben = ben::find($id);
        $ben->delete();
        return redirect('admin/ben/danhsach')->with('thongbao','Xóa thành công');
    }
}
