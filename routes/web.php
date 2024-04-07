<?php

use App\Http\Controllers\RegisterMemberController;
use App\Livewire\ViewMember;
use Illuminate\Support\Facades\Route;

Route::post('/salvar-contato', [RegisterMemberController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('save-member');

Route::view('/visualizar_socios', 'view-member')
    ->middleware(['auth', 'verified'])
    ->name('view-member');

Route::get('/cadastrar_socio', function () { return view('register-member'); })
    ->middleware(['auth', 'verified'])
    ->name('register-member');

Route::view('home', 'home')
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::view('/', 'welcome');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
