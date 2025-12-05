<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Undangan2DController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'showForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/undangan/2D/undangan1', [Undangan2DController::class, 'undangan1'])->name('undangan1');
Route::get('/undangan/3D/undangan1', function () {
    return view('Undangan3D.undangan1', [
        'judul' => 'The Wedding of',
        'mempelai' => 'Rina & Dimas',
        'tanggal' => '12-12-2025'
    ]);
});

Route::get('/undangan/digital/2d/{slug}', [Undangan2DController::class, 'template_floral'])->name('template_floral');


Route::middleware('admin')->group(function () {
    route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    route::get('/admin/data/order', [AdminController::class, 'data_order'])->name('admin.data_order');
    route::get('/admin/template/undangan', [AdminController::class, 'template_undangan'])->name('admin.template_undangan');
    route::post('/admin/create/order', [AdminController::class, 'create_order'])->name('admin.create_order');
    route::get('/admin/create/data/undangan', [Undangan2DController::class, 'index'])->name('admin.index');
    route::post('/admin/created/undangan', [Undangan2DController::class, 'store'])->name('admin.store');
    Route::resource('undangan', Undangan2DController::class);
    Route::get('/u/{slug}', function ($slug) {
        $data = \App\Models\Undangan::where('slug', $slug)->firstOrFail();
    return view("templates.".$data->template.".index", compact('data'));
});
    
});

Route::middleware('user')->group(function () {
    Route::get('/user/dashboard', function () {
        return "Halaman User";
    });
});