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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/your/login','AkunController@login')->name('login');
Route::post('/postlogin','AkunController@post_login');

// Route::group(['middleware' => ['auth','cekrole:master,petugas']],function(){
	Route::get('/bigdata/admin','AdminController@dashboard');
	Route::get('/employee','AdminController@employee');
	Route::post('/add/employee','AkunController@add_employee');
// });

// _______-------------------User

	Route::get('/','DashboardController@dashboard');
	Route::get('/contact','DashboardController@contact');
	Route::get('/about','DashboardController@about');
	Route::get('/team','DashboardController@team');
	Route::get('/visi-misi','DashboardController@visi_misi');
	Route::get('/IT/consulting','DashboardController@konsultan');
	Route::get('/software-house','DashboardController@software');
	Route::get('/website','DashboardController@website');
	Route::get('/android','DashboardController@android');
	Route::get('/gap/analysis','DashboardController@gap');
	Route::get('/management-bussines','DashboardController@cmb');
