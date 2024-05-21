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
Route::get('weba', [weba::class, 'index']);
//Create Data
Route::get('weba/create', [weba::class, 'create']);
Route::post('weba', [weba::class, 'store']);
//Show Spesific Data
Route::get('weba{id}', [weba::class, 'show']);
//Edit Data
Route::get('weba/{id}/edit', [weba::class, 'edit']);
Route::put('weba/{id}', [weba::class, 'update']);
//Delete Data
Route::delete('weba/{id}', [weba::class, 'delete']);