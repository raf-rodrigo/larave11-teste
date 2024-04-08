<?php

use App\Http\Controllers\RegisterMemberController;
use App\Livewire\UpdateMember;
use App\Livewire\ViewMember;
use Illuminate\Support\Facades\Route;

Route::put('/editar_socio/update/{id}', [RegisterMemberController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('update-member-id');

Route::get('/excluir_socio/{id}', [RegisterMemberController::class, 'delete'])
    ->middleware(['auth', 'verified'])
    ->name('delete-member');

Route::get('/editar_socio/{id}', [UpdateMember::class, 'render'])
    ->middleware(['auth', 'verified'])
    ->name('update-member');

Route::post('/salvar_contato', [RegisterMemberController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('save-member');

Route::get('/visualizar_socio/{id}', [RegisterMemberController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('view-member-id');

Route::view('/editar_socio', 'update-member')
    ->middleware(['auth', 'verified'])
    ->name('update-member');

Route::view('/visualizar_socio', 'view-member')
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
