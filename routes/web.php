<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\BandasController;


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


Route::get('/imc/{nome}/{peso}/{altura}/{genero}', [PacienteController::class, 'calcularIMC']);

Route::get('/', [ProdutosController::class, 'index']);
Route::get('/novo', [ProdutosController::class, 'newProduct']);
Route::get('/usados', [ProdutosController::class, 'usedProduct']);

Route::get('/bandas', [BandasController::class, 'index']);
Route::get('/bandas/cadastrar', [BandasController::class, 'create']);
Route::post('/bandas/cadastrar', [BandasController::class, 'store']);

