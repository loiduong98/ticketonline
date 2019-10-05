<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\khachhang;

class KhachHangController extends Controller
{
    public function getDanhSach()
    {

    	$khachhang = khachhang::orderBy('id','DESC')->get();
    	return view('admin.khachhang.danhsach', ['khachhang'=>$khachhang]);
    }

    public function getThem()
    {
    	return view('admin.khachhang.them');
    }

    public function postThem(Request $request)
    {
        $this->validate($request,
            [
                'HoTen'=>'required|min:3|max:100|unique:khachhang',
                'SDT'=>'required',
                'Email'=>'required',
                'DiaChi'=>'required',
                'NgaySinh'=>'required',
                'idCV'=>'required',
                'idUsers'=>'required',
            ],
            [
                'SDT.required'=>'Bạn chưa nhập sdt',
                'Email.required'=>'Bạn chưa nhập email',
                'DiaChi.required'=>'Bạn chưa nhập địa chỉ',
                'NgaySinh.required'=>'Bạn chưa nhập ngày sinh',
                'idCV.required'=>'Bạn chưa chọn id CV',
                'idUsers.required'=>'Bạn chưa chọn id Users',
                'HoTen.required'=>'Bạn chưa nhập tên nhân viên',
                'HoTen.min'=>'Tên nhân viên quá ngắn',
                'HoTen.max'=>'Tên nhân viên quá dài'
            ]);
        $khachhang = new khachhang;
        $khachhang->HoTen = $request->HoTen;
        $khachhang->SDT = $request->SDT;
        $khachhang->Email = $request->Email;
        $khachhang->DiaChi = $request->DiaChi;
        $khachhang->NgaySinh = $request->NgaySinh;
        $khachhang->idCV = $request->idCV;
        $khachhang->idUsers = $request->idUsers;
        $khachhang->save();
        return redirect('admin/khachhang/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $khachhang = khachhang::find($id);
        return view('admin.khachhang.sua',['khachhang'=>$khachhang]);
    }

    public function postSua(Request $request,$id)
    {
        $khachhang = khachhang::find($id);
        $chucvu = chucvu::all();
        $users = User::all();
        $this->validate($request,
            [
                'HoTen'=>'required|min:3|max:100:khachhang',
                'SDT'=>'required',
                'Email'=>'required',
                'DiaChi'=>'required',
                'NgaySinh'=>'required',
                'idCV'=>'required',
                'idUsers'=>'required',
            ],
            [
                'SDT.required'=>'Bạn chưa nhập sdt',
                'Email.required'=>'Bạn chưa nhập email',
                'DiaChi.required'=>'Bạn chưa nhập địa chỉ',
                'NgaySinh.required'=>'Bạn chưa nhập ngày sinh',
                'idCV.required'=>'Bạn chưa chọn id CV',
                'idUsers.required'=>'Bạn chưa chọn id Users',
                'HoTen.min'=>'Tên nhân viên quá ngắn',
                'HoTen.max'=>'Tên nhân viên quá dài'
            ]);
        $khachhang->HoTen = $request->HoTen;
        $khachhang->SDT = $request->SDT;
        $khachhang->Email = $request->Email;
        $khachhang->DiaChi = $request->DiaChi;
        $khachhang->NgaySinh = $request->NgaySinh;
        $khachhang->idCV = $request->idCV;
        $khachhang->idUsers = $request->idUsers;
        $khachhang->save();
        return redirect('admin/khachhang/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $khachhang = khachhang::find($id);
        $khachhang->delete();
        return redirect('admin/khachhang/danhsach')->with('thongbao','Xóa thành công');
    }
}
