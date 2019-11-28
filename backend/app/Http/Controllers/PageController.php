<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Mail;
use App\khachhang;

class PageController extends Controller
{
    public function getLayout()
    {
    	return view('page.layout.trangchu');
    }
    public function getLogin()
    {
    	return view('page.layout.dangnhap');
    }
    public function getContact()
    {
    	return view('page.layout.lienhe');
    }
    public function getNews()
    {
    	return view('page.layout.tintuc');
    }
    public function getMail()
    {
    	return view('page.layout.mail');
    }
    	public function postMail(Request $request)
    {
        Mail::send(['html'=>'page.layout.mailfb'],['name','Lợi Dương'],function($message){
            $message->to('loiduong0511@yahoo.com')->subject("Chúc mừng bạn đã đặt vé thành công");
            $message->from('loiduong0511@gmail.com','Hệ thống bán vé xe điện tử LD');
        });

        return Redirect('page/mail')->with('thongbao', 'Đặt vé thành công');
    }
    
}
