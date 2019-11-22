<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sodoghe;

class SoDoGheController extends Controller
{
    public function getDanhSach()
    {

    	$sodoghe = sodoghe::orderBy('id','DESC')->get();
    	return view('admin.sodoghe.danhsach', ['sodoghe'=>$sodoghe]);
    }

    public function getThem()
    {
        $sodoghe = sodoghe::all();
    	return view('admin.sodoghe.them',['sodoghe'=>$sodoghe]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'TenSoDo'=>'required|min:3|max:100|unique:sodoghe',
                'SoDong'=>'required',
                'SoCot'=>'required'
            ],
            [
                'SoDong.required'=>'Bạn chưa chọn điểm đi',
                'SoCot.required'=>'Bạn chưa chọn điểm đến',
                'TenSoDo.required'=>'Bạn chưa nhập tên sơ đồ',
                'TenSoDo.min'=>'Tên sơ đồ quá ngắn',
                'TenSoDo.max'=>'Tên sơ đồ quá dài'
            ]);
        $sodoghe = new sodoghe;
        $sodoghe->TenSoDo = $request->TenSoDo;
        $sodoghe->SoDong = $request->SoDong;
        $sodoghe->SoCot = $request->SoCot;
        $sodoghe->UrlHinh = $request->UrlHinh;
        if($request->hasFile('UrlHinh'))
        {
            $file = $request->file('UrlHinh');  

            $name = $file->getClientOriginalName();
            $UrlHinh = str_random(4)."_".$name;
            while(file_exists("upload/sodoghe/".$UrlHinh))
            {
                $UrlHinh = str_random(4)."_".$name;
            }
            $file->move("upload/sodoghe",$UrlHinh);
            $sodoghe->UrlHinh = $UrlHinh;
            // $filename =  time() . '.jpg';
    		// $filepath = public_path('upload/sodoghe');
            //  $sodoghe->UrlHinh = $filename;
        }
        else
        {
            $sodoghe->UrlHinh = "";
        }
        $sodoghe->save();
        return redirect('admin/sodoghe/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $sodoghe = sodoghe::find($id);
        return view('admin.sodoghe.sua', ['sodoghe'=>$sodoghe]);
    }

    public function postSua(Request $request,$id)
    {
        $sodoghe = sodoghe::find($id);
        $this->validate($request,
            [
                'TenSoDo'=>'required|min:3|max:100:sodoghe',
                'SoDong'=>'required',
                'SoCot'=>'required'
            ],
            [
                'SoDong.required'=>'Bạn chưa chọn điểm đi',
                'SoCot.required'=>'Bạn chưa chọn điểm đến',
                'TenSoDo.required'=>'Bạn chưa nhập tên sơ đồ',
                'TenSoDo.min'=>'Tên sơ đồ quá ngắn',
                'TenSoDo.max'=>'Tên sơ đồ quá dài'
            ]);
        $sodoghe->TenSoDo = $request->TenSoDo;
        $sodoghe->SoDong = $request->SoDong;
        $sodoghe->SoCot = $request->SoCot;
        $sodoghe->UrlHinh = $request->UrlHinh;
        if($request->hasFile('UrlHinh'))
        {
            $file = $request->file('UrlHinh');  

            $name = $file->getClientOriginalName();
            $UrlHinh = str_random(4)."_".$name;
            while(file_exists("upload/sodoghe/".$UrlHinh))
            {
                $UrlHinh = str_random(4)."_".$name;
            }
            $file->move("upload/sodoghe",$UrlHinh);
            $sodoghe->UrlHinh = $UrlHinh;
            // $filename =  time() . '.jpg';
    		// $filepath = public_path('upload/sodoghe');
            //  $sodoghe->UrlHinh = $filename;
        }
        else
        {
            $sodoghe->UrlHinh = "";
        }
        $sodoghe->save();
        return redirect('admin/sodoghe/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $sodoghe = sodoghe::find($id);
        $sodoghe->delete();
        return redirect('admin/sodoghe/danhsach')->with('thongbao','Xóa thành công');
    }
}
