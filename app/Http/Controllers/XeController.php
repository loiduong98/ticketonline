<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\xe;
use App\tuyen;

class XeController extends Controller
{
    public function getDanhSach()
    {
    	$xe = xe::orderBy('id','DESC')->get();
    	return view('admin.xe.danhsach', ['xe'=>$xe]);
    }

    public function getThem()
    {
        return view('admin.xe.them');
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'BSXe' => 'required|min:3|max:100|unique:xe'
    		],
    		[
    			'BSXe.required'=>'Bạn chưa nhập tên xe',
    			'BSXe.unique'=>'Biến số xe đã tồn tại',
    			'BSXe.min'=>'Bạn phải nhập trên 3 ký tự',
    			'BSXe.max'=>'Bạn phải nhập dưới 100 ký tự',
    		]);
    	$xe = new xe;
    	$xe->BSXe = $request->BSXe;
    	$xe->idTuyen = $request->idTuyen;
    	$xe->save();
    	return redirect('admin/xe/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $xe = xe::find($id);
        return view('admin.xe.sua', ['xe'=>$xe]);
    }

    public function postSua(Request $request,$id)
    {
        $xe = xe::find($id);
    	$this->validate($request,
    		[
    			'BSXe' => 'required|min:3|max:100:xe'
    		],
    		[
    			'BSXe.required'=>'Bạn chưa nhập tên xe',
    			'BSXe.min'=>'Bạn phải nhập trên 3 ký tự',
    			'BSXe.max'=>'Bạn phải nhập dưới 100 ký tự'
    		]);
    	$xe->BSXe = $request->BSXe;
    	$xe->idTuyen = $request->idTuyen;
    	$xe->save();
    	return redirect('admin/xe/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $xe = xe::find($id);
        $xe->delete();
        return redirect('admin/xe/danhsach')->with('thongbao','Xóa thành công');
    }
}
