<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tintuc;

class TinTucController extends Controller
{
    public function getDanhSach()
    {

    	$tintuc = tintuc::orderBy('id','DESC')->get();
    	return view('admin.tintuc.danhsach', ['tintuc'=>$tintuc]);
    }

    public function getThem()
    {
        $tintuc = tintuc::all();
    	return view('admin.tintuc.them',['tintuc'=>$tintuc]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'TieuDe'=>'required|min:3|max:100|unique:tintuc',
                'NoiDung'=>'required|min:3:tintuc',
                'urlHinh'=>'required'
            ],
            [
                'NoiDung.required'=>'Bạn chưa nhập nội dung',
                'urlHinh.required'=>'Bạn chưa chọn hình',
                'TieuDe.required'=>'Bạn chưa nhập username',
                'TieuDe.min'=>'Username quá ngắn',
                'TieuDe.max'=>'Username quá dài'
            ]);
        $tintuc = new tintuc;
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->NoiDung = $request->NoiDung;
        if($request->hasFile('urlHinh'))
        {
            $file = $request->file('urlHinh');  

            $name = $file->getClientOriginalName();
            $urlHinh = str_random(4)."_".$name;
            while(file_exists("upload/tintuc/".$urlHinh))
            {
                $urlHinh = str_random(4)."_".$name;
            }
            $file->move("upload/tintuc",$urlHinh);
            $tintuc->urlHinh = $urlHinh;
            // $filename =  time() . '.jpg';
    		// $filepath = public_path('upload/tintuc');
            //  $tintuc->urlHinh = $filename;
        }
        else
        {
            $tintuc->urlHinh = "";
        }
        $tintuc->save();
        return redirect('admin/tintuc/them')->with('thongbao','Thêm thành công');
    }


    public function getSua($id)
    {
        $tintuc = tintuc::find($id);
        return view('admin.tintuc.sua', ['tintuc'=>$tintuc]);
    }

    public function postSua(Request $request,$id)
    {
        $tintuc = tintuc::find($id);
        $this->validate($request,
            [
                'TieuDe'=>'required|min:3|max:100:tintuc',
                'NoiDung'=>'required|min:3:tintuc',
                'urlHinh'=>'required'
            ],
            [
                'NoiDung.required'=>'Bạn chưa nhập nội dung',
                'urlHinh.required'=>'Bạn chưa chọn hình',
                'TieuDe.min'=>'Username quá ngắn',
                'TieuDe.max'=>'Username quá dài'
            ]);
        $tintuc = new tintuc;
        $tintuc->TieuDe = $request->TieuDe;
        $tintuc->NoiDung = $request->NoiDung;
        if($request->hasFile('urlHinh'))
        {
            $file = $request->file('urlHinh');  

            $name = $file->getClientOriginalName();
            $urlHinh = str_random(4)."_".$name;
            while(file_exists("upload/tintuc/".$urlHinh))
            {
                $urlHinh = str_random(4)."_".$name;
            }
            $file->move("upload/tintuc",$urlHinh);
            $tintuc->urlHinh = $urlHinh;
            // $filename =  time() . '.jpg';
    		// $filepath = public_path('upload/tintuc');
            //  $tintuc->urlHinh = $filename;
        }
        else
        {
            $tintuc->urlHinh = "";
        }
        $tintuc->save();
        return redirect('admin/tintuc/sua/'.$id)->with('thongbao','Sửa thành công');
    }
}
