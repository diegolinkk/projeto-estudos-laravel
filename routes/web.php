<?php

use App\Http\Controllers\ConceitoController;
use App\Http\Controllers\EstudoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProjetoController;
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
    return redirect()->route('listar_conceitos');
})->middleware('auth');

Route::get('/health', function () {
    return 'ok';
});


//agrupando por controller
Route::controller(LoginController::class)->group(function(){
    Route::get('/login','index')->name('login');
    Route::post('/login','login');

    Route::get('/login/cadastro','cadastro_form')->name('cadastro_de_usuario');
    Route::post('/login/cadastro','cadastro');

    Route::get('/logout','logout')->name('logout');

});

Route::controller(ConceitoController::class)->group(function() {
    Route::get('listar-json','listarJson');
});

//agrupamento de rota por middleware e em seguida agrupando por controller
Route::middleware('auth')->group(function (){

    //agrupando por controller
    Route::controller(ConceitoController::class)->group(function(){

        Route::get('/conceito/index','listar')->name('listar_conceitos');
        Route::get('/conceito/','listar');

        Route::get('/conceito/cadastro','cadastro_form')->name('cadastro_de_conceito');
        Route::post('/conceito/cadastro','cadastro');

        Route::get('/conceito/editar/{id}','form_editar')->name('form_editar_conceito');
        Route::post('/conceito/editar/{id}','editar');

        Route::get('/conceito/remover/{id}','remover')->name('remover_conceito');

    });

    Route::controller(ProjetoController::class)->group(function(){
        Route::get('/projeto/cadastro','cadastro_form')->name('cadastro_de_projeto');
        Route::post('/projeto/cadastro','cadastro');

        Route::get('/projeto/','listar')->name('listar_projetos');
        Route::get('/projeto/index','listar')->name('listar_projetos');

        Route::get('projeto/estudar/{id}','estudar')->name('estudar');

        Route::get('projeto/remover/{id}','remover')->name('remover_projeto');

        Route::get('projeto/editar/{id}','form_editar')->name('form_editar_projeto');
        Route::post('projeto/editar/{id}','editar');

        Route::get('projeto/concluir/{id}','concluir')->name('concluir_projeto');

    });

    Route::controller(EstudoController::class)->group(function(){
        Route::get('/estudo/index','listar')->name('listar_estudo');
        Route::get('/estudo/','listar');
    });

});
