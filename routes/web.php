<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/index','AdminController@getLayout');

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'tuyen'], function(){
		Route::get('danhsach','TuyenController@getDanhSach');

		Route::get('them','TuyenController@getThem');
		Route::post('them','TuyenController@postThem');

		Route::get('sua/{id}','TuyenController@getSua');
		Route::post('sua/{id}','TuyenController@postSua');

		Route::get('xoa/{id}','TuyenController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'xe'], function(){
		Route::get('danhsach','XeController@getDanhSach');

		Route::get('them','XeController@getThem');
		Route::post('them','XeController@postThem');

		Route::get('sua/{id}','XeController@getSua');
		Route::post('sua/{id}','XeController@postSua');

		Route::get('xoa/{id}','XeController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'ve'], function(){
		Route::get('danhsach','VeController@getDanhSach');

		Route::get('them','VeController@getThem');
		Route::post('them','VeController@postThem');

		Route::get('sua/{id}','VeController@getSua');
		Route::post('sua/{id}','VeController@postSua');

		Route::get('xoa/{id}','VeController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'ben'], function(){
		Route::get('danhsach','BenController@getDanhSach');

		Route::get('them','BenController@getThem');
		Route::post('them','BenController@postThem');

		Route::get('sua/{id}','BenController@getSua');
		Route::post('sua/{id}','BenController@postSua');

		Route::get('xoa/{id}','BenController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'sodoghe'], function(){
		Route::get('danhsach','SoDoGheController@getDanhSach');

		Route::get('them','SoDoGheController@getThem');
		Route::post('them','SoDoGheController@postThem');

		Route::get('sua/{id}','SoDoGheController@getSua');
		Route::post('sua/{id}','SoDoGheController@postSua');

		Route::get('xoa/{id}','SoDoGheController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'hinhthucthanhtoan'], function(){
		Route::get('danhsach','HinhThucThanhToanController@getDanhSach');

		Route::get('them','HinhThucThanhToanController@getThem');
		Route::post('them','HinhThucThanhToanController@postThem');

		Route::get('sua/{id}','HinhThucThanhToanController@getSua');
		Route::post('sua/{id}','HinhThucThanhToanController@postSua');

		Route::get('xoa/{id}','HinhThucThanhToanController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'users'], function(){
		Route::get('danhsach','UsersController@getDanhSach');

		Route::get('them','UsersController@getThem');
		Route::post('them','UsersController@postThem');

		Route::get('sua/{id}','UsersController@getSua');
		Route::post('sua/{id}','UsersController@postSua');

		Route::get('xoa/{id}','UsersController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'lichchay'], function(){
		Route::get('danhsach','lichchayController@getDanhSach');

		Route::get('them','lichchayController@getThem');
		Route::post('them','lichchayController@postThem');

		Route::get('sua/{id}','lichchayController@getSua');
		Route::post('sua/{id}','lichchayController@postSua');

		Route::get('xoa/{id}','lichchayController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'nhanvien'], function(){
		Route::get('danhsach','NhanVienController@getDanhSach');

		Route::get('them','NhanVienController@getThem');
		Route::post('them','NhanVienController@postThem');

		Route::get('sua/{id}','NhanVienController@getSua');
		Route::post('sua/{id}','NhanVienController@postSua');

		Route::get('xoa/{id}','NhanVienController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'chucvu'], function(){
		Route::get('danhsach','ChucVuController@getDanhSach');

		Route::get('them','ChucVuController@getThem');
		Route::post('them','ChucVuController@postThem');

		Route::get('sua/{id}','ChucVuController@getSua');
		Route::post('sua/{id}','ChucVuController@postSua');

		Route::get('xoa/{id}','ChucVuController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'khachhang'], function(){
		Route::get('danhsach','KhachHangController@getDanhSach');

		Route::get('them','KhachHangController@getThem');
		Route::post('them','KhachHangController@postThem');

		Route::get('sua/{id}','KhachHangController@getSua');
		Route::post('sua/{id}','KhachHangController@postSua');

		Route::get('xoa/{id}','KhachHangController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'tintuc'], function(){
		Route::get('danhsach','TinTucController@getDanhSach');

		Route::get('them','TinTucController@getThem');
		Route::post('them','TinTucController@postThem');

		Route::get('sua/{id}','TinTucController@getSua');
		Route::post('sua/{id}','TinTucController@postSua');

		Route::get('xoa/{id}','TinTucController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'chitietghe'], function(){
		Route::get('danhsach','ChiTietGheController@getDanhSach');

		Route::get('them','ChiTietGheController@getThem');
		Route::post('them','ChiTietGheController@postThem');

		Route::get('sua/{id}','ChiTietGheController@getSua');
		Route::post('sua/{id}','ChiTietGheController@postSua');

		Route::get('xoa/{id}','ChiTietGheController@getXoa');

	});
});

Route::group(['prefix'=>'admin'], function(){
	Route::group(['prefix'=>'chitietve'], function(){
		Route::get('danhsach','ChiTietVeController@getDanhSach');

		Route::get('them','ChiTietVeController@getThem');
		Route::post('them','ChiTietVeController@postThem');

		Route::get('sua/{id}','ChiTietVeController@getSua');
		Route::post('sua/{id}','ChiTietVeController@postSua');

		Route::get('xoa/{id}','ChiTietVeController@getXoa');

	});
});

Route::get('page/index','PageController@getLayout');

Route::group(['prefix'=>'page'], function(){
	Route::group(['prefix'=>'checkout'], function(){
		Route::get('1','DatVeController@getTT1');
		Route::post('1','DatVeController@postTT1');

		Route::get('2','DatVeController@getTT2');
		Route::post('2','DatVeController@postTT2');
		
		Route::get('3','DatVeController@getTT3');
		Route::post('3','DatVeController@postTT3');

		Route::get('4','DatVeController@getTT4');
		Route::post('4','DatVeController@postTT4');

		Route::get('datvethanhcong','DatVeController@getDVTC');
	});
});

