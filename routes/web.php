<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ApiController;

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

// Route::get('/', function () {
    
//     $requisicao = http::get('https://random-data-api.com/api/v2/users?size=100'); //pegando dados dos usuarios
//     $dados = $requisicao->json();

//     return view('index', ['dados' => $dados]);
// });

Route::get('/users', [ApiController::class, 'index'])->name('users.index');
