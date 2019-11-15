<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // function __construct()
    // {
    //     $this->kiemtradangnhap();
    // }
    // function kiemtradangnhap()
    // {
    //     if(Auth::check())
    //     {
    //         dd($user);
    //         view()->share('user',Auth::user());
            
    //     }
        
    // }
}

