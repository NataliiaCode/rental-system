<?php


use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\PropertyTypeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Auth;
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




Route::get('/', [MainController::class, 'index'])->name('home');

// BuildingController
Route::get('properties/house', [BuildingController::class, 'house'])->name('properties.house');

Route::get('properties/apartments', [BuildingController::class, 'apartments'])->name('properties.apartments');

Route::get('properties/flats', [BuildingController::class, 'flats'])->name('properties.flats');

Route::get('properties/twolevels', [BuildingController::class, 'twolevels'])->name('properties.twolevels');

Route::get('properties/cottages', [BuildingController::class, 'cottages'])->name('properties.cottages');


Route::get('/sort/{type}', [MainController::class, 'sort'])->name('sort');
Route::get('/search', [MainController::class, 'search'])->name('search');

Route::post('cart/add', [FavoriteController::class, 'add']);
Route::post('cart/remove', [FavoriteController::class, 'remove']);




Route::get('/properties/{id}', 'App\Http\Controllers\MainController@showProperty')->name('properties.show');

Route::post('/properties/{property}/images', 'PropertyController@storeImage');
Route::put('/properties/{property}/images/{image}', 'PropertyController@updateImage');

Route::post('/properties/{property}/image', 'PropertiesController@storeImage')->name('properties.image.store');




// routes/web.php
Route::get('contacts-us', [MainController::class, 'contacts'])->name('contacts');
Route::post('contacts-us', [MainController::class, 'sendEmail'])->name('sendEmail');
Route::get('about-us', [MainController::class, 'about'])->name('about');





// middleware' => 'auth'
Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth', 'admin']],
    function () {
        Route::get('/admin/propertyTypes', 'App\Http\Controllers\Admin\PropertyTypeController@index')->name('admin.propertyTypes.index');
        Route::get('/admin/propertyTypes/create', 'App\Http\Controllers\Admin\PropertyTypeController@create')->name('admin.propertyTypes.create');
        Route::post('/admin/propertyTypes', 'App\Http\Controllers\Admin\PropertyTypeController@store')->name('admin.propertyTypes.store');
        Route::get('/admin/propertyTypes/{propertyType}', 'App\Http\Controllers\Admin\PropertyTypeController@show')->name('admin.propertyTypes.show');
        Route::get('/admin/propertyTypes/{propertyType}/edit', 'App\Http\Controllers\Admin\PropertyTypeController@edit')->name('admin.propertyTypes.edit');
        Route::put('/admin/propertyTypes/{propertyType}', 'App\Http\Controllers\Admin\PropertyTypeController@update')->name('admin.propertyTypes.update');
        Route::delete('/admin/propertyTypes/{propertyType}', 'App\Http\Controllers\Admin\PropertyTypeController@destroy')->name('admin.propertyTypes.destroy');
    }
);



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/properties', 'App\Http\Controllers\Admin\PropertyController@index')->name('admin.properties.index');
    Route::get('/properties/create', 'App\Http\Controllers\Admin\PropertyController@create')->name('admin.properties.create');
    Route::post('/properties', 'App\Http\Controllers\Admin\PropertyController@store')->name('admin.properties.store');
    // Route::get('/properties/{property}', 'App\Http\Controllers\Admin\PropertyController@show')->name('admin.properties.show');
    Route::get('/properties/{property}/edit', 'App\Http\Controllers\Admin\PropertyController@edit')->name('admin.properties.edit');
    Route::put('/properties/{property}', 'App\Http\Controllers\Admin\PropertyController@update')->name('admin.properties.update');
    Route::delete('/properties/{property}', 'App\Http\Controllers\Admin\PropertyController@destroy')->name('admin.properties.destroy');
});



Auth::routes();




Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');

Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');



Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
