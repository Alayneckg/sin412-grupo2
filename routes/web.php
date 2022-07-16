<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CicloController;
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

Route::group(['middleware' => ['auth:web']], function () {

    // Route::get('/', function () {
    //     return view('welcome');
    // });
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // });

    Route::get('/', [Controller::class, 'index'])->name('dashboard');

    Route::get('/configuracoes', [UserController::class, 'configuracoes'])->name('configuracoes');

    // Tarefas
    Route::get('/tarefas', [TarefaController::class, 'index'])->name('tarefas');
    Route::post('/tarefas/store', [TarefaController::class, 'store'])->name('tarefas.store');
    Route::get('/tarefas/{tarefas}', [TarefaController::class, 'show'])->name('tarefas.show');
    Route::get('/tarefas/{tarefas}/edit', [TarefaController::class, 'edit'])->name('tarefas.edit');
    Route::post('/tarefas/{tarefas}', [TarefaController::class, 'update'])->name('tarefas.update');
    Route::post('/tarefas/update/refresh', [TarefaController::class, 'refresh'])->name('tarefas.refresh');
    Route::post('/tarefas/destroy/{tarefas}', [TarefaController::class, 'destroy'])->name('tarefas.destroy');

    // Ciclos
    Route::post('/ciclos/store', [CicloController::class, 'store'])->name('ciclos.store');
    Route::post('/ciclos/update', [CicloController::class, 'update'])->name('ciclos.update');
    Route::post('/ciclos/destroy', [CicloController::class, 'destroy'])->name('ciclos.destroy');

    Route::get('/calendario', [TarefaController::class, 'calendario'])->name('calendario');

    Route::get('/analytics', [RelatorioController::class, 'index'])->name('analytics');

    // User
    Route::get('/usuario/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/usuario/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/usuario/update', [UserController::class, 'update'])->name('users.update');
    Route::post('/usuario/admin/destroy', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';
