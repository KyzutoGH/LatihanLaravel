<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Weba;
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

//Routing WEBA
Route::get('coba', [Weba::class, 'index']);

Route::get('coba/create', [Weba::class, 'create']);
Route::post('coba', [Weba::class, 'store']);

Route::get('coba{id}', [Weba::class, 'show']);

Route::get('coba/{id}/edit', [Weba::class, 'edit']);
Route::put('coba/{id}', [Weba::class, 'update']);

Route::delete('coba/{id}', [Weba::class, 'delete']);