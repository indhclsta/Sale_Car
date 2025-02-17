<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AuthLogin;
use App\Models\Mobil;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\JenisMobil;

Route::get('/', [AuthLogin::class, 'login']) -> name('login');

Route::get('/register', [AuthLogin::class, 'register']) -> name('register');
Route::post('/register/submit',[AuthLogin::class, 'submit'])->name('submit');

Route::get('/home', [AuthLogin::class, 'home']) -> name('home');
Route::get('/JenisMobil/Create', [JenisMobil::class, 'create']) -> name('create');
Route::get('/JenisMobil/Delete/{id}', [JenisMobil::class, 'delete']) -> name('delete');
Route::post('/JenisMobil/Create/submit2', [JenisMobil::class, 'submit2']) -> name('submit2');
Route::post('/btn', [AuthLogin::class, 'btn'])->name('btn');
Route::get('/JenisMobil', [JenisMobil::class, 'JenisMobil'])->name('JenisMobil');
Route::get('/contact', [ContactController::class, 'contact'])-> name('contact');
Route::post('/contact/tambahContact', [ContactController::class, 'tambahContact'])->name('tambahContact');
Route::get('/menu', [JenisMobil::class, 'menu'])-> name('menu');



Route::get('/homeC', [ContactController::class, 'homeC'])->name('homeC');
Route::get('/JenisMobilC', [JenisMobil::class, 'JenisMobilC'])->name('JenisMobilC');
Route::get('/contactC', [ContactController::class, 'contactC'])-> name('contactC');
Route::post('/contactC/tambahContact', [ContactController::class, 'tambahContact'])->name('tambahContactC');
Route::get('/menuC', [JenisMobil::class, 'menuC'])-> name('menuC');




