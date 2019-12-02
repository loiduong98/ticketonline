<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\chitietve;
use App\chitietghe;

class ChiTietVeController extends Controller
{
    public function getDanhSach()
    {
        
    	$chitietve = chitietve::orderBy('id','DESC')->get();
    	return view('admin.chitietve.danhsach', ['chitietve'=>$chitietve]);
    }
}
