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

 



	Route::group(['prefix'=>'home'],function(){
		Route::get('/','FrontendController@getHome');
	Route::group(['prefix'=>'danhsachsp'],function(){
		Route::get('/{id}','FrontendController@getLSP');

	
	});

	Route::group(['prefix'=>'chitiet'],function(){
		Route::get('/{id}','FrontendController@getDetail');
		Route::post('/{id}','FrontendController@postComment');
		Route::post('/{id}','FrontendController@postDanhGia');

	
	});

	Route::group(['prefix'=>'gioithieu'],function(){
		Route::get('/','FrontendController@getIntro');
	});
	Route::group(['prefix'=>'tintuc'],function(){
		Route::get('/','FrontendController@getNew');
	});
	Route::group(['prefix'=>'lienhe'],function(){
		Route::get('/','FrontendController@getContact');
	});

	Route::group(['prefix'=>'search'],function(){
		Route::get('/','FrontendController@getSearch');
	});
}); 

Route::group(['prefix'=>'cart'],function(){

		Route::get('add/{id}','CartController@getAddCart');
		Route::get('show','CartController@getShowCart');
		Route::get('delete/{id}','CartController@getDeleteCart');
		Route::get('update','CartController@getUpdateCart');
		Route::get('checkout','CartController@getCheckout');
		Route::post('checkout','CartController@postProduct');
		Route::post('checkout','CartController@postComplete');
		// Route::get('xacnhan','CartController@getInfor');
	});
Route::get('complete','CartController@getComplete');
Route::get('info','CartController@getInfo');

Route::group(['namespace'=>'Admin'],function(){
	Route::group(['prefix'=>'login'],function(){
		Route::get('/','LoginController@getLogin');
		Route::post('/','LoginController@postLogin');
	});

Route::get('logout','HomeController@getLogout');

	Route::group(['prefix'=>'admin'],function(){
		Route::get('home','HomeController@getHome');		
		Route::get('home','HomeController@getHDB');

		Route::group(['prefix'=>'category'],function(){
			Route::get('/','CategoryController@getCate');			
			Route::post('/','CategoryController@postCate');
			Route::get('edit/{id}','CategoryController@getEditCate');
			Route::post('edit','CategoryController@postEditCate');
			Route::get('delete/{id}','CategoryController@getDeleteCate');
			});
			Route::group(['prefix'=>'product'],function(){
				Route::get('/','ProductController@getPro');	
				Route::post('/','ProductController@postProduct');			
				Route::post('import','ExcelController@import');				
				Route::get('xuat','ExcelController@export');				
				// Route::get('edit/{id}','ProductController@getEditProduct');
				Route::post('edit','ProductController@postEditProduct');
			Route::get('delete/{id}','ProductController@getDeleteProduct');
			Route::get('an','ProductController@getProduct');
			});
			Route::group(['prefix'=>'hoadonban'],function(){
				Route::get('/','HoaDonController@getDSHDB');
				Route::get('chitiet/{id}','HoaDonController@getDetails');
				Route::post('chitiet/{id}','HoaDonController@postEditHoaDon');
				Route::get('pdfexport/{id}','HoaDonController@pdfexport');
				// Route::get('delete/{id}','HoaDonController@getDeleteHDB');
				Route::get('edit/{id}','HoaDonController@getEditDetails');
				Route::get('edit/{id}','HoaDonController@getEditHoaDon');				
				Route::get('delete/{id}','HoaDonController@getDeleteDetails');
			});
			Route::group(['prefix'=>'hoadonnhap'],function(){
				Route::get('/','HoaDonController@getDSHDN');
				Route::post('/','HoaDonController@postHDN');
				Route::get('chitiet/{id}','HoaDonController@getCTHDN');
				Route::post('importhdn','ExcelController@importHDN');
				Route::get('export','ExcelController@exportHDN');
			});
			Route::group(['prefix'=>'nhanvien'],function(){
				Route::get('/','NhanVienController@getDSNV');
				Route::post('/','NhanVienController@postNV');
				Route::post('edit','NhanVienController@postEditNV');
				Route::get('delete/{id}','NhanVienController@getDeleteNV');	
				Route::get('an','NhanVienController@getNhanVien');
			});
	});
});