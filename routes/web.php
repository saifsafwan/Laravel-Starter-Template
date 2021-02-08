<?php

use Illuminate\Support\Facades\Route;

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

Route::view('/','welcome')->name('homepage');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'dashboard', 'middleware' => ['role:user', 'auth'], 'as'=> 'dashboard.'], function () {
    Route::view('/', 'dashboard')->name('index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['role:admin', 'auth'], 'as'=> 'admin.'], function () {
    Route::view('/', 'admin.index')->name('index');
});

require __DIR__.'/auth.php';
