<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::get('/', "HomeController@index")->name("home");
Route::get('/about', function () {
    return view('about');
})->name("about");
Route::get('/services', function () {
    return view('services');
})->name("services");
Route::get('/contact', function () {
    return view('contact');
})->name("contact");


//admin routes
// Route::group(["middleware" => "auth"], function () {
//     Route::get('/admin', function () {
//         return view('admin.index');
//     });
//     Route::resource("categories", "CategoryController");
//     Route::resource("products", "ProductController");
// });

//admin routes
Route::middleware("auth")->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource("categories", "CategoryController");
    Route::resource("products", "ProductController");
});

Auth::routes();
