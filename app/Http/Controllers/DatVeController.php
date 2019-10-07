<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tuyen;
use App\lichchay;
use App\khachhang;
use App\chitietghe;
use App\phuongthucthanhtoan;

class DatVeController extends Controller
{
    public function getTT1()
    {
    	return view('page.layout.check-1');
    }
    public function postThemTT1(Request $request)
    {
        $tuyen = tuyen::all();
        $this->validate($request,
            [
                'idBenDi'=>'required',
                'idBenDen'=>'required' 
            ],
            [
                'idBenDi.required'=>'Bạn chưa chọn tên bến đi',
                'idBenDen.required'=>'Bạn chưa chọn tên bến đến'
            ]);
        $tuyen = new tuyen;
        $tuyen->idBenDi = $request->idBenDi;
        $tuyen->idBenDen = $request->idBenDen;
        $tuyen->save();
        return redirect('page/checkout/2');
    }

    public function getTT2()
    {
    	return view('page.layout.check-2');
    }
    public function postThemTT2(Request $request)
    {
        $chitietghe = chitietghe::all();
        $this->validate($request,
            [
                'TenGhe'=>'required',
            ],
            [
                'TenGhe.required'=>'Bạn chưa chọn ghế',
            ]);
        $chitietghe = new chitietghe;
        $chitietghe->TenGhe = $request->TenGhe;
        $chitietghe->save();
        return redirect('page/checkout/3');
    }

    public function getTT3()
    {
    	return view('page.layout.check-3');
    }
    public function postThemTT3(Request $request)
    {
        $lichchay = lichchay::all();
        $this->validate($request,
            [
                'NgayKhoiHanh'=>'required',
                'GioKhoiHanh'=>'required'
            ],
            [
                'NgayKhoiHanh.required'=>'Bạn chưa chọn ngày khởi hành',
                'GioKhoiHanh.required'=>'Bạn chưa chọn giờ khởi hành',
            ]);
        $lichchay = new lichchay;
        $lichchay->NgayKhoiHanh = $request->NgayKhoiHanh;
        $lichchay->GioKhoiHanh = $request->GioKhoiHanh;
        $lichchay->save();
        return redirect('page/checkout/4');
    }

    public function getTT4()
    {
    	return view('page.layout.check-4');
    }
    public function postThemTT4(Request $request)
    {
        $phuongthucthanhtoan = phuongthucthanhtoan::all();
        $this->validate($request,
            [
                'TenPTTT'=>'required',
            ],
            [
                'TenPTTT.required'=>'Bạn chưa chọn ghế',
            ]);
        $phuongthucthanhtoan = new phuongthucthanhtoan;
        $phuongthucthanhtoan->TenPTTT = $request->TenPTTT;
        $phuongthucthanhtoan->save();
        return redirect('page/checkout/datvethanhcong')->with('thongbao','Đặt vé thành công');
    }
    public function getDVTC()
    {
    	return view('page.layout.datvethanhcong');
    }
}
