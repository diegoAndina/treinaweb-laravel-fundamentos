<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FiltrarFuncionarioController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\TestarController;
use App\Http\Controllers\Admin\TesteController;


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

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', [TesteController::class,  'index']);
Route::get('/testar', [TestarController::class, 'testar']);

Route::get('/salvar ', [FuncionarioController::class, 'salvar'])->name('salvarDados');
Route::resource('clients', ClientController::class);
Route::get('/funcionarios/filtrar', [FiltrarFuncionarioController::class, 'filtrarDados'])->name('filtrarFuncionarios');

Route::resource('funcionarios', FuncionarioController::class);
Route::resource('enderecos', EnderecoController::class);
Route::resource('admin/posts', 'App\Http\Controllers\Admin\PostsController');
Route::resource('admin/teste', 'App\Http\Controllers\Admin\TesteController');
