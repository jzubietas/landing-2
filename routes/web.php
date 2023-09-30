<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMailable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify' => true]);
Route::get('/', [App\Http\Controllers\Web\HomeController::class, 'index'])->name('web.index');
Route::get('nosotros', [App\Http\Controllers\Web\HomeController::class, 'nosotros'])->name('web.nosotros');
Route::get('distribuidores', [App\Http\Controllers\Web\HomeController::class, 'distribuidores'])->name('web.distribuidores');
Route::get('noticias', [App\Http\Controllers\Web\HomeController::class, 'noticias'])->name('web.noticias');

/*Exemplo de Mailabel */
Route::get('/bemvindos', function(){
    $email = new WelcomeMailable;
    Mail::to('noreply@galpha.co')->send($email);
});
