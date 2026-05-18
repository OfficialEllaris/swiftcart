<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');

Route::middleware('guest')->group(function () {

    Route::livewire('/login', 'pages::login')->name('login');

    Route::livewire('/onboarding', 'pages::onboarding')->name('onboarding');

});

Route::livewire('/logout', 'pages::logout')->name('logout');

Route::middleware('auth')->group(function () {

    Route::livewire('/dashboard', 'pages::dashboard')->name('dashboard');

});
