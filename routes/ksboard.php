<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main;


Route::get('/ksadmin/admin/board','Board\Ksboard@index')->name('ksboard.index');
Route::post('/ksadmin/admin/board','Board\Ksboard@store')->name('ksboard.store');
