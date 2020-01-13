<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\xe;
use App\sodoghe;

class XeController extends Controller
{
    public function getDanhSach()
    {
		$sodoghe = sodoghe::all();
    	$xe = xe::orderBy('id','DESC')->get();
    	return view('admin.xe.danhsach', ['xe'=>$xe]);
    }

    public function getThem()
    {
		$sodoghe = sodoghe::all();
        return view('admin.xe.them', ['sodoghe'=>$sodoghe]);
    }

    public function postThem(Request $request)
    {
		$sodoghe = sodoghe::all();
    	$this->validate($request,
    		[
    			'BSXe' => 'required|min:3|max:20|unique:xe'
    		],
    		[
    			'BSXe.required'=>'Bạn chưa nhập tên xe',
    			'BSXe.unique'=>'Biến số xe đã tồn tại',
    			'BSXe.min'=>'Bạn phải nhập trên 3 ký tự',
    			'BSXe.max'=>'Bạn phải nhập dưới 20 ký tự'
    		]);
    	$xe = new xe;
    	$xe->BSXe = $request->BSXe;
		$xe->idSoDoGhe = $request->idSoDoGhe;
		$xe->TinhTrang = $request->TinhTrang;
    	$xe->save();
    	return redirect('admin/xe/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
		$xe = xe::find($id);
		$sodoghe = sodoghe::all();
        return view('admin.xe.sua', ['xe'=>$xe], ['sodoghe'=>$sodoghe]);
    }

    public function postSua(Request $request,$id)
    {
		$xe = xe::find($id);
		$sodoghe = sodoghe::all();
    	$this->validate($request,
    		[
    			'BSXe' => 'required|min:3|max:100:xe'
    		],
    		[
    			'BSXe.required'=>'Bạn chưa nhập tên xe',
    			'BSXe.min'=>'Bạn phải nhập trên 3 ký tự',
    			'BSXe.max'=>'Bạn phải nhập dưới 20 ký tự'
    		]);
			$xe->BSXe = $request->BSXe;
			$xe->idSoDoGhe = $request->sodoghe;
			$xe->TinhTrang = $request->TinhTrang;
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
