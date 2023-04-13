<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuariosController;
use Illuminate\Routing\RouteGroup;

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
Route::get('/',function(){
    return view('auth.login');
});

//Route::get('/usuario/create', [UsuariosController::class,'create']);

Route::resource('usuario', UsuariosController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [UsuariosController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'],function () {
    
    Route::get('/', [UsuariosController::class, 'index'])->name('home');
    
});