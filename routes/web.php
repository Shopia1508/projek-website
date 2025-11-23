<?php

use App\Http\Controllers\ControllerOrder;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuController; // <-- WAJIB DITAMBAH
use App\Models\Menus;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/products', function () {
    $menus = Menus::all();
    return view('products', compact('menus'));
})->name('products');

Route::get('/location', function () {
    return view('location');
})->name('location');

Route::get('/about', function () {
    return view('about');
})->name('about');

// ORDER
Route::get('/order', [ControllerOrder::class, 'create'])->name('order');
Route::post('/order', [ControllerOrder::class, 'store'])->name('order');
Route::post('/order/create-form-cart', [ControllerOrder::class, 'createFormCart'])->name('order.createFromCart');

// ADMIN LOGIN
Route::get('/admin-login', [LoginController::class, 'showAdminLogin'])->name('admin.login');
Route::post('/admin-login', [LoginController::class, 'adminLogin'])->name('admin.login.submit');

// ADMIN DASHBOARD
Route::get('/admin/index', function () {
    return view('admin.index');
})->name('admin.index');

// ADMIN MENUS PAGE
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/menus', [MenuController::class, 'index'])->name('menus');
    Route::get('/menus/create', [MenuController::class, 'create'])->name('menus.create');
    Route::post('/menus', [MenuController::class, 'store'])->name('menus.store');
    Route::get('/menus/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
    Route::post('/menus/{id}/update', [MenuController::class, 'update'])->name('menus.update');
    Route::delete('/menus/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');

});

//TAMBAH DATA CREATE

