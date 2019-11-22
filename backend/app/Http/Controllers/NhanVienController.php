<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;
use App\chucvu;
use App\User;

class NhanVienController extends Controller
{
    public function getDanhSach()
    {

    	$nhanvien = nhanvien::orderBy('id','DESC')->get();
    	return view('admin.nhanvien.danhsach', ['nhanvien'=>$nhanvien]);
    }

    public function getThem()
    {
        $nhanvien = nhanvien::all();
        $users = User::all();
        $chucvu = chucvu::all();
    	return view('admin.nhanvien.them',['nhanvien'=>$nhanvien]);
    }

    public function postThem(Request $request)
    {
        $chucvu = chucvu::all();
        $users = User::all();
        $this->validate($request,
            [
                'HoTen'=>'required|min:3|max:100|unique:nhanvien',
                'SDT'=>'required',
                'Email'=>'required',
                'DiaChi'=>'required',
                'NgaySinh'=>'required',
                'idCV'=>'required',
                'idUsers'=>'required',
                'GioiTinh'=>'required',
                'TinhTrang'=>'required'
            ],
            [
                'SDT.required'=>'Bạn chưa nhập sdt',
                'GioiTinh.required'=>'Bạn chưa chọn giới tính',
                'TinhTrang.required'=>'Bạn chưa nhập tình trạng',
                'Email.required'=>'Bạn chưa nhập email',
                'DiaChi.required'=>'Bạn chưa nhập địa chỉ',
                'NgaySinh.required'=>'Bạn chưa nhập ngày sinh',
                'idCV.required'=>'Bạn chưa chọn id CV',
                'idUsers.required'=>'Bạn chưa chọn id Users',
                'HoTen.required'=>'Bạn chưa nhập tên nhân viên',
                'HoTen.min'=>'Tên nhân viên quá ngắn',
                'HoTen.max'=>'Tên nhân viên quá dài'
            ]);
        $nhanvien = new nhanvien;
        $nhanvien->HoTen = $request->HoTen;
        $nhanvien->SDT = $request->SDT;
        $nhanvien->Email = $request->Email;
        $nhanvien->DiaChi = $request->DiaChi;
        $nhanvien->NgaySinh = $request->NgaySinh;
        $nhanvien->idCV = $request->chucvu;
        $nhanvien->idUsers = $request->users;
        $nhanvien->GioiTinh = $request->GioiTinh;
        $nhanvien->TinhTrang = $request->TinhTrang;
        $nhanvien->save();
        return redirect('admin/nhanvien/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $nhanvien = nhanvien::find($id);
        $chucvu = chucvu::all();
        $users = User::all();
    	return view('admin.nhanvien.sua',['nhanvien'=>$nhanvien],['chucvu'=>$chucvu]);
    }

    public function postSua(Request $request,$id)
    {
        $nhanvien = nhanvien::find($id);
        $chucvu = chucvu::all();
        $users = User::all();
        $this->validate($request,
            [
                'HoTen'=>'required|min:3|max:100:nhanvien',
                'SDT'=>'required',
                'Email'=>'required',
                'DiaChi'=>'required',
                'NgaySinh'=>'required',
                
            ],
            [
                'SDT.required'=>'Bạn chưa nhập sdt',
                
                
                'Email.required'=>'Bạn chưa nhập email',
                'DiaChi.required'=>'Bạn chưa nhập địa chỉ',
                'NgaySinh.required'=>'Bạn chưa nhập ngày sinh',
                
                'HoTen.min'=>'Tên nhân viên quá ngắn',
                'HoTen.max'=>'Tên nhân viên quá dài'
            ]);
        $nhanvien->HoTen = $request->HoTen;
        $nhanvien->SDT = $request->SDT;
        $nhanvien->Email = $request->Email;
        $nhanvien->DiaChi = $request->DiaChi;
        $nhanvien->NgaySinh = $request->NgaySinh;
        $nhanvien->idCV = $request->idCV;
        $nhanvien->idUsers = $request->idUsers;
        $nhanvien->GioiTinh = $request->GioiTinh;
        $nhanvien->TinhTrang = $request->TinhTrang;
        $nhanvien->save();
        return redirect('admin/nhanvien/sua/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getXoa($id)
    {
        $nhanvien = nhanvien::find($id);
        $nhanvien->delete();
        return redirect('admin/nhanvien/danhsach')->with('thongbao','Xóa thành công');
    }
}
