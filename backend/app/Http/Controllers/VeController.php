<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ve;
use App\xe;
use App\khachhang;
use App\nhanvien;
use App\lichchay;
use App\chitietve;

class VeController extends Controller
{
    public function getDanhSach()
    {
        chitietve::all();
        $ve = ve::orderBy('id','DESC')->get();
        return view('admin.ve.danhsach', ['ve'=>$ve]);
        
    }

    public function getThem()
    {
        return view('admin.ve.them');
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
    			'NgayDatVe'=>'required',
                'idKH'=>'required',
				'idLC'=>'required',
				'idHD'=>'required'
    		],
    		[
    			'NgayDatVe.required'=>'Bạn chưa chọn ngày',
    			'idKH.required'=>'Bạn chưa nhập id khách hàng',
    			'idLC.required'=>'Bạn chưa nhập id lịch chạy',
    			'idHD.required'=>'Bạn phải nhập id hóa đơn',
    		]);
    	$ve->NgayDatVe = $request->NgayDatVe;
		$ve->idKH = $request->idKH;
		$ve->idLC = $request->idLC;
		$ve->idHD = $request->idHD;
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
