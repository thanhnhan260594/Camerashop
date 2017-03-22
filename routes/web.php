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

Route::get('/', 'CameraController@index');

Route::get('loai-san-pham/{id}/{slug}',['as'=>'Cates','uses'=>'CameraController@Cates']);

Route::get('thuong-hieu/{id}/{slug}',['as'=>'Brands','uses'=>'CameraController@Brands']);

Route::get('chi-tiet-san-pham/{id}/{slug}',['as'=>'Detail','uses'=>'CameraController@Detail']);

Route::get('lien-he',['as'=>'getContact','uses'=>'CameraController@getContact']);
Route::post('lien-he',['as'=>'postContact','uses'=>'CameraController@postContact']);

Route::get('tin-tuc',['as'=>'News','uses'=>'CameraController@News']);
Route::get('gioi-thieu',['as'=>'Introduce','uses'=>'CameraController@Introduce']);
Route::get('dich-vu',['as'=>'Service','uses'=>'CameraController@Service']);




//PHẦN ADMIN

Route::group(['prefix'=>'admin'], function(){
	Route::get('/', function(){
		return view('admin.index');
	});
	Route::group(['prefix'=>'cate'],function(){
		Route::get('',['as'=>'admin.cate.list','uses'=>'CateController@getList']);
		Route::get('add',['as'=>'admin.cate.getAdd','uses'=>'CateController@getAdd']);
		Route::post('add',['as'=>'admin.cate.postAdd','uses'=>'CateController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.cate.getEdit','uses'=>'CateController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.cate.postEdit','uses'=>'CateController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.cate.getDelete','uses'=>'CateController@getDelete']);
	});

	Route::group(['prefix'=>'brand'],function(){
		Route::get('',['as'=>'admin.brand.list','uses'=>'BrandController@getList']);
		Route::get('add',['as'=>'admin.brand.getAdd','uses'=>'BrandController@getAdd']);
		Route::post('add',['as'=>'admin.brand.postAdd','uses'=>'BrandController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.brand.getEdit','uses'=>'BrandController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.brand.postEdit','uses'=>'BrandController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.brand.getDelete','uses'=>'BrandController@getDelete']);
	});

	Route::group(['prefix'=>'product'],function(){
	 	Route::get('',['as'=>'admin.product.list','uses'=>'ProductController@getList']);
		Route::get('add',['as'=>'admin.product.getAdd','uses'=>'ProductController@getAdd']);
		Route::post('add',['as'=>'admin.product.postAdd','uses'	=>'ProductController@postAdd']);
		Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@getEdit']);
		Route::post('edit/{id}',['as'=>'admin.product.getEdit','uses'=>'ProductController@postEdit']);
		Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'=>'ProductController@getDelete']);
	});

	// Route::group(['prefix'=>'product'],function(){
	// 	Route::get('',['as'=>'admin.product.list','uses'		=>'ProductController@getList']);
	// 	Route::get('add',['as'=>'admin.product.getAdd','uses'		=>'ProductController@getAdd']);
	// 	Route::post('add',['as'=>'admin.product.postAdd','uses'	=>'ProductController@postAdd']);
	// 	Route::get('edit/{id}',['as'=>'admin.product.getEdit','uses'		=>'ProductController@getEdit']);
	// 	Route::post('edit/{id}',['as'=>'admin.product.getEdit','uses'		=>'ProductController@postEdit']);
	// 	Route::get('delete/{id}',['as'=>'admin.product.getDelete','uses'	=>'ProductController@getDelete']);
	// });
});

