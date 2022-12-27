<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware(['auth', 'first_login'])->group(function () {
    //rota para dasboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //rota para ajuda com videos
    Route::view('/ajuda', 'ajuda')->name('ajuda');

    //Grupo de rotas de recursos
    Route::resources([
        'usuarios' => UserController::class,
    ]);
});

require __DIR__.'/auth.php';
