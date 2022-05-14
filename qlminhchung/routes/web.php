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
Auth::routes();
Route::group(['middleware' => 'auth'], function(){
	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/nhomthuchien', 'HomeController@show')->name('nhomthuchien');
/*	Route::get('/tieuchuan', 'TieuchuanController@index')->name('tieuchuan');
	Route::match(['get', 'post'],'/themtieuchuan', 'TieuchuanController@add')->name('themtieuchuan');
*/
	Route::get('/tieuchuancsgd', 'TieuchuancsgdController@index')->name('tieuchuancsgd');
	Route::match(['get', 'post'],'/timtieuchuancsgd', 'TieuchuancsgdController@search')->name('timtieuchuancsgd');
/*	Route::match(['get', 'post'],'/themtieuchuancsgd', 'TieuchuancsgdController@add')->name('themtieuchuancsgd');
*/

	Route::get('/tieuchuanctdt', 'TieuchuanctdtController@index')->name('tieuchuanctdt');
	Route::match(['get', 'post'],'/timtieuchuanctdt', 'TieuchuanctdtController@search')->name('timtieuchuanctdt');
/*	Route::match(['get', 'post'],'/themtieuchuanctdt', 'TieuchuanctdtController@add')->name('themtieuchuanctdt');
*/

	Route::get('/minhchungcsgd', 'MinhchungcsgdController@index')->name('minhchungcsgd');
	Route::match(['get', 'post'],'/themminhchungcsgd', 'MinhchungcsgdController@create')->name('themminhchungcsgd');
	Route::match(['get', 'post'],'/suaminhchungcsgd/{id}', 'MinhchungcsgdController@edit')->name('suaminhchungcsgd');
	Route::get('/xoaminhchungcsgd/{id}', 'MinhchungcsgdController@delete');
	Route::match(['get', 'post'],'/timminhchungcsgd', 'MinhchungcsgdController@search')->name('timminhchungcsgd');

	Route::get('/minhchungctdt', 'MinhchungctdtController@index')->name('minhchungctdt');
	Route::match(['get', 'post'],'/themminhchungctdt', 'MinhchungctdtController@create')->name('themminhchungctdt');
	Route::match(['get', 'post'],'/suaminhchungctdt/{id}', 'MinhchungctdtController@edit')->name('suaminhchungctdt');
	Route::get('/xoaminhchungctdt/{id}', 'MinhchungctdtController@delete');
	Route::match(['get', 'post'],'/timminhchungctdt', 'MinhchungctdtController@search')->name('timminhchungctdt');

	Route::get('/tieuchi', 'TieuchiController@index')->name('tieuchi');
/*	Route::match(['get', 'post'],'/themtieuchi', 'TieuchiController@create')->name('themtieuchi');
*/
	Route::match(['get', 'post'],'/danhgiatieuchi', 'TieuchiController@danhgia')->name('danhgiatieuchi');

	Route::get('/tieuchicsgd', 'TieuchicsgdController@index')->name('tieuchicsgd');
	Route::match(['get', 'post'],'/timtieuchicsgd', 'TieuchicsgdController@search')->name('timtieuchicsgd');

	Route::get('/tieuchictdt', 'TieuchictdtController@index')->name('tieuchictdt');
	Route::match(['get', 'post'],'/timtieuchictdt', 'TieuchictdtController@search')->name('timtieuchictdt');

	Route::get('/danhsachbaocaocsgd', 'BaocaocsgdController@index')->name('danhsachbaocaocsgd');
	Route::match(['get', 'post'],'/vietbaocaocsgd', 'BaocaocsgdController@create')->name('vietbaocaocsgd');
	Route::match(['get', 'post'],'/suabaocaocsgd/{id}', 'BaocaocsgdController@edit')->name('suabaocaocsgd');
	Route::get('/xoabaocaocsgd/{id}', 'BaocaocsgdController@delete');
	Route::match(['get', 'post'],'/timbaocaocsgd', 'BaocaocsgdController@search')->name('timbaocaocsgd');

	Route::match(['get', 'post'],'/chonminhchungcsgd', 'MinhchungcsgdController@show')->name('chonminhchungcsgd');
	Route::match(['get', 'post'],'/chontieuchuancsgd', 'TieuchuancsgdController@show')->name('chontieuchuancsgd');
	Route::match(['get', 'post'],'/chontieuchicsgd', 'TieuchicsgdController@show')->name('chonchicsgd');


	Route::get('/danhsachbaocaoctdt', 'BaocaoctdtController@index')->name('danhsachbaocaoctdt');
	Route::match(['get', 'post'],'/vietbaocaoctdt', 'BaocaoctdtController@create')->name('vietbaocaoctdt');
	Route::match(['get', 'post'],'/suabaocaoctdt/{id}', 'BaocaoctdtController@edit')->name('suabaocaoctdt');
	Route::get('/xoabaocaoctdt/{id}', 'BaocaoctdtController@delete');
	Route::match(['get', 'post'],'/timbaocaoctdt', 'BaocaoctdtController@search')->name('timbaocaoctdt');

	Route::match(['get', 'post'],'/chonminhchungctdt', 'MinhchungctdtController@show')->name('chonminhchungctdt');
	Route::match(['get', 'post'],'/chontieuchuanctdt', 'TieuchuanctdtController@show')->name('chontieuchuanctdt');
	Route::match(['get', 'post'],'/chontieuchictdt', 'TieuchictdtController@show')->name('chontieuchictdt');

	Route::get('/danhsachuser', 'UserController@index')->name('danhsachuser');
	Route::match(['get', 'post'],'/themuser', 'UserController@create')->name('themuser');
	Route::match(['get', 'post'],'/suauser/{id}', 'UserController@edit')->name('suauser');
	Route::get('/xoauser/{id}', 'UserController@delete');
	Route::match(['get', 'post'],'/timuser', 'UserController@search')->name('timuser');

	
});