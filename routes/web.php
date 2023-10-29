<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaymentMethodController;
use App\Http\Controllers\WebConfigController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CategoryController;

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
Route::redirect('/', '/panel-admin/login');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::prefix('panel-admin')->middleware(['auth','web'])->group(function () {

    Route::get('/edit_profile',[ProfileController::class,'edit_profile']);
    Route::post('/update_profile',[ProfileController::class,'update_profile']);
    Route::post('/update_password',[ProfileController::class,'update_password']);



    Route::resource('/payment-methods',PaymentMethodController::class);
    Route::resource('/users',UserController::class);
    Route::resource('/offers',OfferController::class);
    Route::resource('/categories',CategoryController::class);
    Route::resource('/web-configs',WebConfigController::class);


    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

});
require __DIR__ . '/auth.php';
