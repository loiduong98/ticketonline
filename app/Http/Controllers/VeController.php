<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ve;
use App\khachhang;
use App\nhanvien;

class VeController extends Controller
{
    public function getDanhSach()
    {
    	$ve = ve::orderBy('id','DESC')->get();
    	return view('admin.ve.danhsach', ['ve'=>$ve]);
    }

    public function getThem()
    {
        return view('admin.ve.them');
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'BSve' => 'required|min:3|max:100|unique:ve'
    		],
    		[
    			'BSve.required'=>'Bạn chưa nhập tên ve',
    			'BSve.unique'=>'Biến số ve đã tồn tại',
    			'BSve.min'=>'Bạn phải nhập trên 3 ký tự',
    			'BSve.max'=>'Bạn phải nhập dưới 100 ký tự',
    		]);
    	$ve = new ve;
    	$ve->BSve = $request->BSve;
    	$ve->idTuyen = $request->idTuyen;
    	$ve->save();
    	return redirect('admin/ve/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $ve = ve::find($id);
        return view('admin.ve.sua', ['ve'=>$ve]);
    }

    public function postSua(Request $request,$id)
    {
        $ve = ve::find($id);
    	$this->validate($request,
    		[
    			'BSve' => 'required|min:3|max:100:ve'
    		],
    		[
    			'BSve.required'=>'Bạn chưa nhập tên ve',
    			'BSve.min'=>'Bạn phải nhập trên 3 ký tự',
    			'BSve.max'=>'Bạn phải nhập dưới 100 ký tự'
    		]);
    	$ve->BSve = $request->BSve;
    	$ve->idTuyen = $request->idTuyen;
    	$ve->save();
    	return redirect('admin/ve/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $ve = ve::find($id);
        $ve->delete();
        return redirect('admin/ve/danhsach')->with('thongbao','Xóa thành công');
    }
}
