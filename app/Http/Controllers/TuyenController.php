<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tuyen;
use App\ben;

class TuyenController extends Controller
{
    public function getDanhSach()
    {
    	$tuyen = tuyen::orderBy('id','DESC')->get();
    	return view('admin.tuyen.danhsach', ['tuyen'=>$tuyen]);
    }

    public function getThem()
    {
        $ben = ben::all();
    	return view('admin.tuyen.them',['ben'=>$ben]);
    }

    public function postThem(Request $request)
    {
        $ben = ben::all();
        $this->validate($request,
            [
                // 'TenTuyen'=>'required|min:3|max:100|unique:tuyen',
                'TenTuyen'=>'unique:tuyen',
                'idBenDi'=>'required',
                'idBenDen'=>'required'
            ],
            [
                'idBenDi.required'=>'Bạn chưa chọn điểm đi',
                'idBenDen.required'=>'Bạn chưa chọn điểm đến',
                'TenTuyen.unique'=>'Tên tuyến đã tồn tại'
                // 'TenTuyen.required'=>'Bạn chưa nhập tên tuyến',
                // 'TenTuyen.min'=>'Tên tuyến quá ngắn',
                // 'TenTuyen.max'=>'Tên tuyến quá dài'
            ]);
        $tuyen = new tuyen;
        $tuyen->TenTuyen = $request->TenTuyen;
        $tuyen->idBenDi = $request->idBenDi;
        $tuyen->idBenDen = $request->idBenDen;
        $tuyen->save();
        return redirect('admin/tuyen/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $tuyen = tuyen::find($id);
        $ben = ben::all();
        return view('admin.tuyen.sua', ['tuyen'=>$tuyen],['ben'=>$ben]);
    }

    public function postSua(Request $request,$id)
    {
        $tuyen = tuyen::find($id);
        $this->validate($request,
        [
            'TenTuyen'=>'required|min:3|max:100:tuyen',
            'idBenDi'=>'required',
            'idBenDen'=>'required'
        ],
        [
            'idBenDi.required'=>'Bạn chưa chọn điểm đi',
            'idBenDen.required'=>'Bạn chưa chọn điểm đến',
            'TenTuyen.required'=>'Bạn chưa nhập tên tuyến',
            'TenTuyen.min'=>'Tên tuyến quá ngắn',
            'TenTuyen.max'=>'Tên tuyến quá dài'
        ]);
            $tuyen->TenTuyen = $request->TenTuyen;
            $tuyen->idBenDi = $request->ben;
            $tuyen->idBenDen = $request->ben;
            $tuyen->save();
        return redirect('admin/tuyen/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $tuyen = tuyen::find($id);
        $tuyen->delete();
        return redirect('admin/tuyen/danhsach')->with('thongbao','Xóa thành công');
    }
}
