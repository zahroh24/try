<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

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



Route::get('/',[HomeController::class, 'index']);


Route::get('/home',[HomeController::class, 'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/add_menu_view',[AdminController::class, 'addview']);

    Route::post('/upload_menu',[AdminController::class, 'upload']);
    Route::post('/reservation',[HomeController::class, 'reservation']);
    Route::get('/approved/{id}',[AdminController::class, 'aproved']);
    Route::get('/canceled/{id}',[AdminController::class, 'canceled']);
    Route::get('/showmenu',[AdminController::class, 'showmenu']);
    Route::get('/deletemenu/{id}',[AdminController::class, 'deletemenu']);
    Route::get('/update_menu/{id}',[AdminController::class, 'updatemenu']);
    
});
