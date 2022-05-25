<?php

use App\Http\Controllers\ConceitoController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('cadastro_de_conceito');
})->middleware('auth');

//agrupando por controller
Route::controller(LoginController::class)->group(function(){
    Route::get('/login','index')->name('login');
    Route::post('/login','login');

    Route::get('/login/cadastro','cadastro_form')->name('cadastro_de_usuario');
    Route::post('/login/cadastro','cadastro');
});

//agrupamento de rota por middleware e em seguida agrupando por controller
Route::middleware('auth')->group(function (){

    //agrupando por controller
    Route::controller(ConceitoController::class)->group(function(){

        Route::get('/conceito/index','listar')->name('listar_conceitos');
        Route::get('/conceito/','listar');

        Route::get('/conceito/cadastro','cadastro_form')->name('cadastro_de_conceito');
        Route::post('/conceito/cadastro','cadastro');
    });
});
