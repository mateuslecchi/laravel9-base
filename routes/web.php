<?php

use App\Http\Controllers\AvaliacoesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmprestimoController;
use App\Http\Controllers\FerramentaController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\FuncionarioParadaController;
use App\Http\Controllers\ParadaController;
use App\Http\Controllers\RelatorioController;
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

    //Mudar status da parada
    Route::patch('/paradas/{parada}/status', [ParadaController::class, 'status'])
        ->name('paradas.status');

    //Registrar emprestimo em parada especifica
    Route::post('/paradas/{parada}/novo', [EmprestimoController::class, 'createParada'])
        ->name('emprestimos.parada');

    //Mudar status do emprestimo
    Route::patch('/emprestimos/{emprestimo}/status', [EmprestimoController::class, 'status'])
        ->name('emprestimos.status');

    //Grupo de rotas de recursos
    Route::resources([
        'ferramentas'   => FerramentaController::class,
        'funcionarios'  => FuncionarioController::class,
        'paradas'       => ParadaController::class,
        'emprestimos'   => EmprestimoController::class,
        'usuarios'      => UserController::class,
        'paradas.funcionarios' => FuncionarioParadaController::class,
    ]);

    //Rotas para avaliacoes
    Route::post('/paradas/avaliar', [AvaliacoesController::class, 'store'])
        ->name('avaliacoes.store');

    //Rotas para relatorios
    Route::get('/relatorios', [RelatorioController::class, 'index'])->name('relatorios.index');
    Route::get('/relatorios/1', [RelatorioController::class, 'relatorioUm'])->name('relatorios.export1');
    Route::get('/relatorios/2', [RelatorioController::class, 'relatorioDois'])->name('relatorios.export2');
    Route::get('/relatorios/3', [RelatorioController::class, 'relatorioTres'])->name('relatorios.export3');
    Route::get('/relatorios/4', [RelatorioController::class, 'relatorioQuatro'])->name('relatorios.export4');
});


require __DIR__ . '/auth.php';
