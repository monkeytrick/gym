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



// Home
    // Route::get('/', 'App\Http\Controllers\ClassesController@index');

use App\Models\User;
use App\Models\Classes;




// Returns original Laravel page
// Route::get('/no', function () {
//     return view('welcome');
// });

Route::get('/no', function () {
    return view('user-profile');
});


Auth::routes();

//Originally, after installing auth, this was the controller, which was created automatically. Could use this for 
//homepage but seems better to keep as classes:

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


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

    //Delete user needed
    
    Route::get('admin/classes', function(){
                                        return Classes::all();
                                        })->name('admin-classes');

});

// Delete users and bookings on table
// Have a user profile page showing all bookings and editable data
//Edit sidebar
// On homepage, set header filters for classes
// pagify dates


// classtype[]

//foreach(class){
//     foreach(classtype)
//         if(this class == array exist)
//             return
//         else

// }

// foreach classtype print as option

// js get all class names
// js add click listener to class names
//     eventfunction
//         if clicked
//             get all classes as 
//                 loop through all class_exists   
//                     if class is not same as eventclass name, display noneOf
//                         if all is clicked display through locale_compose



// action will be Delete - 

// how to pass path to ajax? will need to build route from within page
// As before, id will have to be given as 'delete-id' or 'cancel-id
// on clicking icon, event-listener will need to pass id to modal
// modal button will call function that getsElement by Id and saves to variable
//variable will be the path that delete request is made to 


// https://laravel.com/docs/7.x/csrf

// https://laracasts.com/discuss/channels/laravel/protecting-apiroute-against-direct-access

// Does laravel auto check ajax for CSRF token?
// Try to send AJAX request without this token