<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;

Route::prefix('/ksadmin')->name('ksadmin.')->group(function (){
	Route::prefix('/admin')->name('admin.')->group(function (){
		Route::prefix('/ksmember')->name('ksmember.')->group(function (){
			Route::get('/', 'Admin\Ksmember@index');
			Route::post('/','Admin\Ksmember@store');
			Route::get('/id','Admin\Ksmember@detail');
			Route::get('/idx','Admin\Ksmember@detail');
			Route::delete('/id','Admin\Ksmember@remove');
		});
	});
});