<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[ProdukController::class,'index']);
Route::get('/tambah',[ProdukController::class,'tambah']);
Route::post('/tambah/add',[ProdukController::class,'add']);
Route::get('/ubah/{id}',[ProdukController::class,'ubah']);
Route::post('/ubah/update',[ProdukController::class,'update']);
Route::get('/hapus/{id}',[ProdukController::class,'hapus']);
