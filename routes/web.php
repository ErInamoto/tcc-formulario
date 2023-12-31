<?php

use App\Http\Controllers\AvaliadorController;
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

Route::get('/', 
    [AvaliadorController::class, 'avaliarView']
);

Route::post('/salvar', 
    [AvaliadorController::class, 'salvar']
);

Route::get('/enviado', 
    [AvaliadorController::class, 'salvar']
);

Route::get('/resultado', 
    [AvaliadorController::class, 'resultado']
);

Route::get('/selecao', 
    [AvaliadorController::class, 'selecao']
);

Route::get('detalhado',
    [AvaliadorController::class, 'detalhado']
);

Route::get('detalhado_prof',
    [AvaliadorController::class, 'detalhado_prof']
);

Route::get('/avaliacao_professor', 
[AvaliadorController::class, 'avaliacao_professor']);

Route::post('/salvar_prof', 
    [AvaliadorController::class, 'salvar_prof']
);

Route::get('/login', function () {
    return view('login');
});