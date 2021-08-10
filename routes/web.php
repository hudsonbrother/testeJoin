<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaProdutoController;

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

Route::get('/categoria', [CategoriaProdutoController::class, 'index']);
Route::get('/categoria/create', [CategoriaProdutoController::class, 'create']);
Route::post('/categoria', [CategoriaProdutoController::class, 'store']);