<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hoadon;
use App\khachhang;
use App\hinhthucthanhtoan;
use App\ct_hoadon;

class HoaDonController extends Controller
{
    public function getDanhSach()
    {
        $hoadon = hoadon::orderBy('id','DESC')->get();
    	return view('admin.hoadon.danhsach', ['hoadon'=>$hoadon]);
    	
    }
    public function getChiTiet($id)
    {
        $ct_hoadon = ct_hoadon::all();
        $ct_hoadon = ct_hoadon::find($id);
        return view('admin.hoadon.chitiet', ['ct_hoadon'=>$ct_hoadon]);        
    }
}
