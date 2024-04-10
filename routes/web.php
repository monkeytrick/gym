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


use App\Models\User;
use App\Models\Classes;

Route::get('/no', function () {
    return view('user-profile');
});


Auth::routes();

Route::get('/', [App\Http\Controllers\ClassesController::class, 'index'])->name('home');

Route::get('/admin', function() {
    return view('admin.admin-index');
});

//Bookings

    // Index - view all user's bookings
Route::get('booking', [App\Http\Controllers\BookingsController::class, 'index'])->middleware('auth')->name('booking.index');

    //Store
Route::post('booking', [App\Http\Controllers\BookingsController::class, 'store'])->middleware('auth')->name('booking.store');

    // View individual
Route::get('booking/{id}', [App\Http\Controllers\BookingsController::class, 'show'])->middleware('auth')->name('booking.show');

    //Cancel
Route::put('booking/{id}', [App\Http\Controllers\BookingsController::class, 'destroy'])->middleware('auth')->name('booking.delete');


// User Routes

Route::get('user/{id}', [App\Http\Controllers\UsersController::class, 'show'])->middleware('auth')->name('user.show');


Route::put('user/{id}', [App\Http\Controllers\UsersController::class, 'update'])->middleware('auth')->name('user.update');


///////////////////////////////////////Admin//////////////////////////////

Route::middleware(['auth','admin.priv'])->group(function(){

    Route::get('admin', function() {
        return view('admin.admin-index');
    });
    
    //Get Bookings
    Route::get('admin/bookings', [App\Http\Controllers\AdminBookingController::class, 'bookings'])->name('admin.bookings');
    
    //Add new class
    Route::post('admin/classes', [App\Http\Controllers\ClassesController::class, 'store'])->name('admin-classes.store');
    
    //Edit class
    Route::put('admin/classes', [App\Http\Controllers\ClassesController::class, 'update'])->name('admin-bookings.update');
    
    //Delete class
    Route::delete('admin/classes', [App\Http\Controllers\ClassesController::class, 'destroy'])->name('admin-classes.destroy');  
    
    //Get users
    Route::get('admin/users', function(){
                                        return User::all();
                                        })->name('admin-users');

   
    Route::get('admin/classes', function(){
                                        return Classes::all();
                                        })->name('admin-classes');

});
