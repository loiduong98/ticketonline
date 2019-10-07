<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getLayout()
    {
    	return view('page.layout.index');
    }

}
