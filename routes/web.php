<?php

use App\Http\Controllers\app;
use App\Http\Controllers\loginController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function() {
    return view('app');
})->name('login');

Route::post('/postLogin', [loginController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [loginController::class, 'postLogout'])->name('Logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/beranda', [app::class, 'beranda'])->name('beranda');
    Route::get('/addMenu', [app::class, 'addMenu'])->name('addMenu');
    Route::post('/addMenuSuccess', [app::class, 'addMenuSuccess'])->name('addMenuSuccess');
    Route::get('/editMenu/{id}', [app::class, 'editMenu'])->name('editMenu');
    Route::post('/updateMenu/{id}', [app::class, 'updateMenu'])->name('updateMenu');
    Route::get('/deleteMenu/{id}', [app::class, 'deleteMenu'])->name('deleteMenu');
});
