<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tuyen;
use App\lichchay;
use App\khachhang;
use App\chitietghe;
use App\hinhthucthanhtoan;
use App\ben;

class DatVeController extends Controller
{
    public function getTT1()
    {
        $tuyen = tuyen::all();
        $ben = ben::all();
        $lichchay = lichchay::all();
    	return view('page.layout.checkout1');
    }
    public function getTT2()
    {
        $chitietghe = chitietghe::all();
    	return view('page.layout.checkout2');
    }
    public function getTT3()
    {
        $khachhang = khachhang::all();
    	return view('page.layout.checkout3');
    }
    public function getTT4()
    {
        $hinhthucthanhtoan = hinhthucthanhtoan::all();
    	return view('page.layout.checkout4');
    }
    public function postTT4(Request $request)
    {
        $lichchay = new lichchay;

        $tuyen->idBenDi;
        $tuyen->idBenDen; 
        $lichchay->NgayKhoiHanh;
        $lichchay->GioKhoiHanh;
        $lichchay->Gia;
        // @if(($tuyen) > 0)     
        //         @foreach($tuyen->all() as $err){{$err}}<br>
        //         @endforeach      
        // @endif
        
        $chitietghe = new chitietghe;
        $chitietghe->TenGhe;
         
        

        $hinhthucthanhtoan = new hinhthucthanhtoan;
        $hinhthucthanhtoan->TenHTTT;
        $lichchay->save();
        $chitietghe->save();
        $tuyen->save();
        $hinhthucthanhtoan->save();
        return $request->all();
        return redirect('page/checkout/datvethanhcong')->with('thongbao','Đặt vé thành công');
    }
    public function getDVTC()
    {
    	return view('page.layout.datvethanhcong');
    }
}
