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

Route::get('/', function () {
    return view('avaliacao-aluno');
});

Route::get('/avaliacao_professor', function () {
    return view('cadastro-usuario');
});

Route::get('/login', function () {
    return view('login');
});
