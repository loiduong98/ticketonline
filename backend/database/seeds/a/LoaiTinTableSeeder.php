<?php

use Illuminate\Database\Seeder;

class LoaiTinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('LoaiTin')->insert([
        	['idTL'=>'1','Ten' => 'Giáo Dục','TenKhongDau' => 'Giao-Duc'],
        	['idTL'=>'1','Ten' => 'Nhịp Điệu Trẻ','TenKhongDau' => 'Nhip-Dieu-Tre'],
        	['idTL'=>'1','Ten' => 'Du Lịch','TenKhongDau' => 'Du-Lich'],
        	['idTL'=>'1','Ten' => 'Du Học','TenKhongDau' => 'Du-Hoc'],
        	['idTL'=>'2','Ten' => 'Cuộc Sống Đó Đây','TenKhongDau' => 'Cuoc-Song-Do-Day'],
        	['idTL'=>'2','Ten' => 'Ảnh','TenKhongDau' => 'Anh'],
        	['idTL'=>'2','Ten' => 'Người Việt 5 Châu','TenKhongDau' => 'Nguoi-Viet-5-Chau'],
        	['idTL'=>'2','Ten' => 'Phân Tích','TenKhongDau' => 'Phan-Tich'],
        	['idTL'=>'3','Ten' => 'Chứng Khoán','TenKhongDau' => 'Chung-Khoan'],
        	['idTL'=>'3','Ten' => 'Bất Động Sản','TenKhongDau' => 'Bat-Dong-San'],
        	['idTL'=>'3','Ten' => 'Doanh Nhân','TenKhongDau' => 'Doanh-Nhan'],
        	['idTL'=>'3','Ten' => 'Quốc Tế','TenKhongDau' => 'Quoc-Te'],
        	['idTL'=>'3','Ten' => 'Mua Sắm','TenKhongDau' => 'Mua-Sam'],
        	['idTL'=>'3','Ten' => 'Doanh Nghiệp Viết','TenKhongDau' => 'Doanh-Nghiep-Viet'],
        	['idTL'=>'4','Ten' => 'Hoa Hậu','TenKhongDau' => 'Hoa-Hau'],
        	['idTL'=>'4','Ten' => 'Nghệ Sỹ','TenKhongDau' => 'Nghe-Sy'],
        	['idTL'=>'4','Ten' => 'Âm Nhạc','TenKhongDau' => 'Am-Nhac'],
        	['idTL'=>'4','Ten' => 'Thời Trang','TenKhongDau' => 'Thoi-Trang'],
        	['idTL'=>'4','Ten' => 'Điện Ảnh','TenKhongDau' => 'Dien-Anh'],
        	['idTL'=>'4','Ten' => 'Mỹ Thuật','TenKhongDau' => 'My-Thuat'],
        	['idTL'=>'5','Ten' => 'Bóng Đá','TenKhongDau' => 'Bong-Da'],
        	['idTL'=>'5','Ten' => 'Tennis','TenKhongDau' => 'Tennis'],
        	['idTL'=>'5','Ten' => 'Chân Dung','TenKhongDau' => 'Chan-Dung'],
        	['idTL'=>'5','Ten' => 'Ảnh','TenKhongDau' => 'Anh-TT'],
        	['idTL'=>'6','Ten' => 'Hình Sự','TenKhongDau' => 'Hinh-Su']
    	]);
    }
}


