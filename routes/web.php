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

Route::get('/about', function () {
 return  '<h1>Selamat Datang</h1>' . 'Ganteng is my face ' ;
});

Route::get('about/{makan}/{minum}/{ngemil}', function ($a,$b,$c) {
 return  'Makan    ' .$a. '.<br> '. 
 		 'Minum   ' .$b. '.<br> '.
 		 'Ngemil    ' .$c. '. '  ;
});

Route::get('user/{nama?}',function($a= "RAFY IDOY"){
	return $a;
});