<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\tuyen;
use App\lichchay;
use App\khachhang;
use App\chitietghe;
use App\chitietve;
use App\hinhthucthanhtoan;
use App\ben;
use App\sodoghe;
use App\ve;
use App\hoadon;
use App\ct_hoadon;
use Mail;

class DatVeController extends Controller
{
    
    public function getTT()
    {
        $tuyen = tuyen::all();
        $ben = ben::all();
        $lichchay = lichchay::all();
        $chitietghe = chitietghe::all();
        $chitietve = chitietve::all();
        $sodoghe = sodoghe::all();
        $khachhang = khachhang::all();
        $hinhthucthanhtoan = hinhthucthanhtoan::all();
        $data = array(
            'ben'=>$ben,
            'chitietghe'=>$chitietghe,
            'hinhthucthanhtoan'=>$hinhthucthanhtoan,
            'khachhang'=>$khachhang,
            'chitietve'=>$chitietve
        );
        
        return view('page.layout.checkout',$data);
        
    }

   
    public function postTT(Request $request)
    {     
        $lichchay = lichchay::all();
        $khachhang = khachhang::all();
        $tuyen     = tuyen::all();
        $chitietve = chitietve::all();
        $NgayDatVe = now();
        $idBenDi = $request->idBenDi;
        $idBenDen = $request->idBenDen; 
        $NgayKhoiHanh = $request->NgayKhoiHanh;
        $GioKhoiHanh = $request->GioKhoiHanh;
        $TenGhe = $request->TenGhe;
        $Soluong = $request->SoLuong;
        $HoTen = $request->HoTen;
        $SDT = $request->SDT;
        $Email = $request->Email;
        $DiaChi = $request->DiaChi;
        $TenHTTT = $request->TenHTTT; 
        
        foreach($tuyen as $keytuyen){
            $tuyen_di = $keytuyen->idBenDi;
            $tuyen_den = $keytuyen->idBenDen;
            $tuyen_id = $keytuyen->id;

            if($idBenDi == $tuyen_di && $idBenDen == $tuyen_den)
            {
                $id_tuyen = $tuyen_id;
            }
        }
        
        foreach($lichchay as $keyLC){
            $LC_id = $keyLC->id;
            $LC_tuyen = $keyLC->idTuyen;
            $LC_gia = $keyLC->Gia;
            if($id_tuyen == $LC_tuyen){
                $idLC = $LC_id;
                $giaLC = $LC_gia;
            }
        }
        // foreach($chitietve as $keyCTV){
        //     $CTV_id = $keyCTV->id;
        //     $CTV_ve = $keyCTV->idVe;
        //     $CTV_mbm = $keyCTV->MaBiMat;
        //     if($)
        // }
        
        // check khach hang
        foreach($khachhang as $keyKH){
            $SDT_KH = $keyKH->SDT;
            $Email_KH = $keyKH->Email;
            $Diachi_KH = $keyKH->DiaChi;

            if($SDT == $SDT_KH)
            {
                $khachhang = new khachhang;
                $khachhang->HoTen = $HoTen;
                $khachhang->SDT = $SDT_KH;
                $khachhang->Email = $Email_KH;
                $khachhang->DiaChi = $Diachi_KH;
            }else{
                $khachhang = new khachhang;
                $khachhang->HoTen = $HoTen;
                $khachhang->SDT = $SDT;
                $khachhang->Email = $Email;
                $khachhang->DiaChi = $DiaChi;
            }
        }

        
        $khachhang->save();
        $id_KH = $khachhang->id;
        $TongTien = $giaLC * $Soluong;
        $hoadon = new hoadon;
        $hoadon->NgayDatVe = $NgayDatVe;
        $hoadon->TongTien = $TongTien;
        $hoadon->GhiChu = 'test';
        $hoadon->idKH = $id_KH;
        $hoadon->idHTTT = $TenHTTT;
        $hoadon->save();
        $id_HD = $hoadon->id;

        $ve = new ve;
    	$ve->NgayDatVe = $NgayDatVe;
		$ve->idKH = $id_KH;
		$ve->idLC = $idLC;
        $ve->idHD = $id_HD;
        $ve->NgayKhoiHanh = $NgayKhoiHanh;
        $ve->GioKhoiHanh = $GioKhoiHanh;
        $ve->save();
        $id_ve = $ve->id;

        $ct_hoadon = new ct_hoadon;
        $ct_hoadon->id_hoadon = $id_HD;      
        $ct_hoadon->idVe = $id_ve;
        $ct_hoadon->SoLuong = $Soluong;
        $ct_hoadon->save();
        
        $chitietve = new chitietve;
        $chitietve->idVe = $id_ve;
        $chitietve->idGhe = $TenGhe;
        $chitietve->Gia = $TongTien;
        $chitietve->SoLuong = $Soluong;
        $chitietve->MaBiMat =  $id_ve."$"."_".str_random(32).($request->MaBiMat);
        $chitietve->save();

        Mail::send(['html'=>'page.layout.mailfb'],['name','Lợi Dương'],function($message){
            $message->to('loiduong0511@yahoo.com')->subject("Chúc mừng bạn đã đặt vé thành công");
            $message->from('loiduong0511@gmail.com','Hệ thống bán vé xe điện tử LD');
        });

        // return QrCode::size(500)->generate($MaBiMat);
        return Redirect('page/checkout/checkout')->with('thongbao','Đặt vé thành công');
        
        
    }
    public function getDVTC()
    {
        return view('page.layout.datvethanhcong');       
    }
   
}
