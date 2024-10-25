<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
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
Route::get('/', [AdminController::class, 'index']);
//admin route start//
Route::get('admin', [AdminController::class, 'login']);
Route::post('admin/login', [AdminController::class,'checklogin']);
Route::get('/logout', [AdminController::class,'logout']);
Route::get('admin', [AdminController::class, 'login']);


Route::middleware(['admin'])->group(function(){
    Route::get('Admindashboard', [AdminController::class, 'Admindashboard'])->name('Admindashboard');

    Route::get('add-property', [AdminController::class, 'property']);

    Route::post('/insertproperty', [AdminController::class, 'insertproperty']);
    Route::get('/viewproperty', [AdminController::class, 'viewproperty']);
    Route::get('/profile', [AdminController::class, 'profile']);
});


//admin route end //




// Route::get('/', function () {
//     return view('frontend.home');
// });
Route::get('about-us', function () {
    return view('frontend.aboutUs');
});
Route::get('services', function(){
    return view('frontend.services');
});
Route::get('contact-us', function () {
    return view('frontend.contactUs');
});
Route::get('property', function () {
    return view('frontend.property');
});
Route::get('about-property', function () {
    return view('frontend.aboutProperty');
});
Route::get('bid-step-form', function () {
    return view('frontend.bidStepForm');
});

