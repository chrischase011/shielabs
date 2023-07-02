<?php

use App\Http\Livewire\Admin\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use App\Http\Livewire\Components\Navigation;
use App\Http\Livewire\Home;
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

Route::get('/', Home::class)->name('home');


Route::get('/logout', [Navigation::class, 'logout'])->name('logout');

Route::group(['middleware' => 'authCheck'], function () {
    Route::get('/login', Login::class)
        ->name('login');

    Route::get('/register', Register::class)
        ->name('register');
});

Route::group(['middleware' => 'adminCheck', 'prefix' => 'admin'], function () {
    Route::get('dashboard', Dashboard::class)->name('admin.dashboard');
});
