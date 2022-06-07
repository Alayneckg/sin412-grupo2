<?php

use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\UserController;
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

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('/configuracoes', [UserController::class, 'configuracoes'])->name('configuracoes');

    Route::get('/tarefas', [TarefaController::class, 'index'])->name('tarefas');

    Route::get('/calendario', [TarefaController::class, 'calendario'])->name('calendario');

    Route::get('/analytics', [RelatorioController::class, 'index'])->name('analytics');

    // User
    Route::get('/usuario/{user}', [UserController::class, 'show'])->name('users.show');
    Route::get('/usuario/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('/usuario/{user}', [UserController::class, 'update'])->name('users.update');
    Route::get('/usuario/admin/destroy/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});

require __DIR__.'/auth.php';
