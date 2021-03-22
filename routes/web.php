<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');

Route::view('dashboard', 'dashboard');

Route::view('setting', 'setting');

Route::view('logout', 'session.logout');