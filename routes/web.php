<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VentasController;

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

/*Route::get('/', function () {
   $ventas = \App\Models\Venta::all();
   
    return view('welcome',['ventas'=>$ventas]);
});*/

Route::get('/venta',[VentasController::class,'index'])->name('venta.index');

Route::get('/venta/create', [VentasController::class,'create'])->name('venta.create');

Route::post('/venta/create', [VentasController::class,'store'])->name('venta.store');
