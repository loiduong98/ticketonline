<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\khachhang;

class UsersController extends Controller
{
    public function getDanhSach()
    {

    	$users = User::orderBy('id','DESC')->get();
    	return view('admin.users.danhsach', ['users'=>$users]);
    }

    public function getThem()
    {
        $users = User::all();
    	return view('admin.users.them',['users'=>$users]);
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'username'=>'required|min:3|max:100|unique:users',
                'password'=>'required|min:3|max:100|unique:users',
                'idGroup'=>'required',
            ],
            [
                'idGroup.required'=>'Bạn chưa chọn group',
                'username.required'=>'Bạn chưa nhập username',
                'username.min'=>'Username quá ngắn',
                'username.max'=>'Username quá dài',
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'password quá ngắn',
                'password.max'=>'password quá dài'
            ]);
        $users = new User;
        $users->username = $request->username;
        $users->password = md5($request->password);
        $users->idGroup = $request->idGroup;
        if($request->hasFile('urlHinh'))
        {
            $file = $request->file('urlHinh');  

            $name = $file->getClientOriginalName();
            $urlHinh = str_random(4)."_".$name;
            while(file_exists("upload/users/".$urlHinh))
            {
                $urlHinh = str_random(4)."_".$name;
            }
            $file->move("upload/users",$urlHinh);
            $users->urlHinh = $urlHinh;
            // $filename =  time() . '.jpg';
    		// $filepath = public_path('upload/users');
            //  $users->urlHinh = $filename;
        }
        else
        {
            $users->urlHinh = "";
        }
        $users->save();
        return redirect('admin/users/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $users = User::find($id);
        return view('admin.users.sua', ['users'=>$users]);
    }

    public function postSua(Request $request,$id)
    {
        $users = User::find($id);
        $this->validate($request,
            [
                'username'=>'required|min:3|max:100:users',
                'password'=>'required|min:3|max:100:users',
                'idGroup'=>'required',
            ],
            [
                'idGroup.required'=>'Bạn chưa chọn group',               
                'username.required'=>'Bạn chưa nhập username',
                'username.min'=>'Username quá ngắn',
                'username.max'=>'Username quá dài',
                'password.required'=>'Bạn chưa nhập password',
                'password.min'=>'password quá ngắn',
                'password.max'=>'password quá dài'
            ]);
        $users->username = $request->username;
        $users->password = md5($request->password);
        $users->idGroup = $request->idGroup;
        if($request->hasFile('urlHinh'))
        {
            $file = $request->file('urlHinh');  

            $name = $file->getClientOriginalName();
            $urlHinh = str_random(4)."_".$name;
            while(file_exists("upload/users/".$urlHinh))
            {
                $urlHinh = str_random(4)."_".$name;
            }
            $file->move("upload/users",$urlHinh);
            $users->urlHinh = $urlHinh;
            // $filename =  time() . '.jpg';
    		// $filepath = public_path('upload/users');
            //  $users->urlHinh = $filename;
        }
        else
        {
            $users->urlHinh = "";
        }
        $users->save();
        return redirect('admin/users/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $users = User::find($id);
        $users->delete();
        return redirect('admin/users/danhsach')->with('thongbao','Xóa thành công');
    }
    public function getLogin()
    {
        return view('login');
    }
    public function postLogin(Request $request)
    {
        $arr = [
            'username'=>$request->$username,
            'password'=>$request->$password,       
        ];
        if(Auth::attempt($arr))
        {            
            return redirect('admin/index');
        }else
        {
            return redirect('admin/login');
        }
        
    }
    public function getLogout()
    {
        Auth::logout();
        return redirect('admin.login');
    }
}
