<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;
 
Route::get('/postech/{alamat}/cek nama', [HaiController::class, 'index']);

Route::get('/num', function () {
    return view('welcome');
});
