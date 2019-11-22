<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    
    public function getLayout()
    {
    	return view('admin.layout.index');
    }
    
    
}
