<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Livewire\Counter;


Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/register', [FrontController::class, 'register'])->name('register');
Route::get('/login', [FrontController::class, 'login'])->name('login');

Route::get('/counter',Counter::class)->name('counter');







