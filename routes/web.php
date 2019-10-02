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
	Route::group(['prefix'=>'loaixe'], function(){
		Route::get('danhsach','LoaiXeController@getDanhSach');

		Route::get('them','LoaiXeController@getThem');
		Route::post('them','LoaiXeController@postThem');

		Route::get('sua/{id}','LoaiXeController@getSua');
		Route::post('sua/{id}','LoaiXeController@postSua');

		Route::get('xoa/{id}','LoaiXeController@getXoa');

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
	Route::group(['prefix'=>'chitiettuyen'], function(){
		Route::get('danhsach','ChiTietTuyenController@getDanhSach');

		Route::get('them','ChiTietTuyenController@getThem');
		Route::post('them','ChiTietTuyenController@postThem');

		Route::get('sua/{id}','ChiTietTuyenController@getSua');
		Route::post('sua/{id}','ChiTietTuyenController@postSua');

		Route::get('xoa/{id}','ChiTietTuyenController@getXoa');

	});
});
