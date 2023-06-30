<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PagesController::class,'index']);

Route::get('/about', function () {
    return view('website.about.about');

});

Route::get('/contact', function () {
    return view('website.contact.contact');

});

Route::get('/departments', function () {
    return view('website.departments.departments');

});

Route::get('/doctors', function () {
    return view('website.doctors.doctors');

});

Route::get('/gallery', function () {
    return view('website.gallery.gallery');

});

Route::get('/services', function () {
    return view('website.services.services');

});