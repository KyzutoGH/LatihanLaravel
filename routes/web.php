<?php

use App\Http\Controllers\SiswaController;
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
Route::get('/', function () {
    return view('welcome');
});
/*'String URL', Callback Array NamaController::class, 'nama funciton'*/
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/list', [SiswaController::class, 'list']);
Route::get('/siswa/create', [SiswaController::class, 'create']); 
Route::post('/siswa', [SiswaController::class, 'simpan']);
