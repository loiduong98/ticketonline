<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\loaixe;
use App\xe;

class LoaiXeController extends Controller
{
    public function getDanhSach()
    {
    	$loaixe = loaixe::orderBy('id','DESC')->get();
    	return view('admin.loaixe.danhsach', ['loaixe'=>$loaixe]);
    }

    public function getThem()
    {
    	return view('admin.loaixe.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'TenLX'=>'required'  
            ],
            [
                'TenLX.required'=>'Bạn chưa nhập tên LX'
            ]);
        $loaixe = new loaixe;
        $loaixe->TenLX = $request->TenLX;
        $loaixe->idXe = $request->idXe;
        $loaixe->save();
        return redirect('admin/loaixe/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $loaixe = loaixe::find($id);
        return view('admin.loaixe.sua', ['loaixe'=>$loaixe]);
    }

    public function postSua(Request $request,$id)
    {
    	$loaixe = loaixe::find($id);
        $this->validate($request,
            [
                'TenLX'=>'min:3',  
            ],
            [
                'TenLX.min'=>'Tên loại xe quá ngắn',
            ]);
        $loaixe->TenLX = $request->TenLX;
        $loaixe->idXe = $request->idXe;
        $loaixe->save();
        return redirect('admin/loaixe/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $loaixe = loaixe::find($id);
        $loaixe->delete();
        return redirect('admin/loaixe/danhsach')->with('thongbao','Xóa thành công');
    }
}
