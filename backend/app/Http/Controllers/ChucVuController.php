<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chucvu;

class ChucVuController extends Controller
{
    public function getDanhSach()
    {
    	$chucvu = chucvu::orderBy('id','DESC')->get();
    	return view('admin.chucvu.danhsach', ['chucvu'=>$chucvu]);
    }

    public function getThem()
    {
    	return view('admin.chucvu.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'TenCV'=>'required|min:3|max:100|unique:chucvu' 
            ],
            [
                'TenCV.required'=>'Bạn chưa nhập tên bến',
                'TenCV.min'=>'Tên bến quá ngắn',
                'TenCV.max'=>'Tên bến quá dài'
            ]);
        $chucvu = new chucvu;
        $chucvu->TenCV = $request->TenCV;
        $chucvu->save();
        return redirect('admin/chucvu/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $chucvu = chucvu::find($id);
        return view('admin.chucvu.sua', ['chucvu'=>$chucvu]);
    }

    public function postSua(Request $request,$id)
    {
        $chucvu = chucvu::find($id);
        $this->validate($request,
            [
                'TenCV'=>'required|min:3|max:100:chucvu'  
            ],
            [
                'TenCV.required'=>'Bạn chưa nhập tên bến',
                'TenCV.min'=>'Tên bến quá ngắn',
                'TenCV.max'=>'Tên bến quá dài'
            ]);
            $chucvu->TenCV = $request->TenCV;
            $chucvu->save();
        return redirect('admin/chucvu/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $chucvu = chucvu::find($id);
        $chucvu->delete();
        return redirect('admin/chucvu/danhsach')->with('thongbao','Xóa thành công');
    }
}
