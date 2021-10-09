<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController as HC;


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
Route::get('/', function () {
    return view('/auth/login');
});

Auth::routes(['register' => false,
			'reset' => false]);
route::get('/register', [HC::class, 'register'])->name('register');
Route::get('/admin', [HC::class, 'admin'])->name('admin')->middleware('is_admin');
route::get('/lurah', [HC::class, 'lurahs'])->name('lurahs');
Route::get('/home', [HC::class, 'home'])->name('home');
route::get('pdk.create', [HC::class, 'create'])->name('pdk.create');
route::post('/warga/create', [HC::class, 'store'])->name('pdk.store');
route::delete('pdk/destroy/{id}', [HC::class, 'destroy'])->name('pdk.destroy');
route::get('pdk/edit/{id}', [HC::class, 'edit'])->name('pdk.edit');
route::patch('pdk/update/{id}', [HC::class, 'update'])->name('pdk.update');
