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
        $data = array(
            'nhanvien'=>$nhanvien,
            'chucvu'=>$chucvu,
            'users'=>$users
        );
    	return view('admin.nhanvien.them',$data);
    }

    public function postThem(Request $request)
    {
        $chucvu = chucvu::all();
        $users = User::all();
        $this->validate($request,
            [
                'HoTen'=>'required|min:3|max:100|unique:nhanvien',
                'SDT'=>'required',
                'DiaChi'=>'required',
                'NgaySinh'=>'required',
                'idCV'=>'required',
                'idEmail'=>'required',
                'GioiTinh'=>'required',
                'TrangThai'=>'required'
            ],
            [
                'SDT.required'=>'Bạn chưa nhập sdt',
                'GioiTinh.required'=>'Bạn chưa chọn giới tính',
                'TrangThai.required'=>'Bạn chưa nhập tình trạng',
                'DiaChi.required'=>'Bạn chưa nhập địa chỉ',
                'NgaySinh.required'=>'Bạn chưa nhập ngày sinh',
                'idCV.required'=>'Bạn chưa chọn id CV',
                'idEmail.required'=>'Bạn chưa chọn Email',
                'HoTen.required'=>'Bạn chưa nhập tên nhân viên',
                'HoTen.min'=>'Tên nhân viên quá ngắn',
                'HoTen.max'=>'Tên nhân viên quá dài'
            ]);
        $nhanvien = new nhanvien;
        $nhanvien->HoTen = $request->HoTen;
        $nhanvien->SDT = $request->SDT;
        $nhanvien->DiaChi = $request->DiaChi;
        $nhanvien->NgaySinh = $request->NgaySinh;
        $nhanvien->idCV = $request->idCV;
        $nhanvien->idEmail = $request->idEmail;
        $nhanvien->GioiTinh = $request->GioiTinh;
        $nhanvien->TrangThai = $request->TrangThai;
        $nhanvien->save();
        return redirect('admin/nhanvien/them')->with('thongbao','Thêm thành công');
    }

    public function getSua($id)
    {
        $nhanvien = nhanvien::find($id);
        $chucvu = chucvu::all();
        $users = User::all();
        $data = array(
            'nhanvien'=>$nhanvien,
            'chucvu'=>$chucvu,
            'users'=>$users,
        );
       
    	return view('admin.nhanvien.sua',$data);
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
            $nhanvien = new nhanvien;
            $nhanvien->HoTen = $request->HoTen;
            $nhanvien->SDT = $request->SDT;
            $nhanvien->DiaChi = $request->DiaChi;
            $nhanvien->NgaySinh = $request->NgaySinh;
            $nhanvien->idCV = $request->idCV;
            $nhanvien->idEmail = $request->idEmail;
            $nhanvien->GioiTinh = $request->GioiTinh;
            $nhanvien->TrangThai = $request->TrangThai;
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
