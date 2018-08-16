<?php

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

/* General Routes */
Route::get('/', function () {
    return view('pages.splash');
})->name('splash');

Route::get('contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('about', function () {
    return view('pages.about');
})->name('about');


/* Auth Routes */
Auth::routes();





/****** DELETE ONCE CONTROLLER IS COMPLETED ******/
/* START BLOG ROUTES */
Route::get('blogs', function () {
    return view('pages.blogs');
})->name('blogs');

Route::get('blogs/create', function () {
    return view('pages.create-blog');
})->name('create-blog');

Route::post('blogs/create', 'BlogsController@store')->name('store-blog');

Route::get('blogs/{id}', function () {
    return view('pages.show-blog');
})->name('show-blog');

Route::get('blogs/{id}/edit', function () {
    return view('pages.edit-blog');
})->name('update-blog');
/* END BLOG ROUTES */





/****** UNCOMMENT ONCE CONTROLLER IS COMPLETED ******/
///* Routes for blogs CRUD */
//Route::prefix('blogs')->group(function () {
//    Route::get('/', 'BlogsController@index')->name('blogs');
//
//    Route::get('/create', 'BlogsController@create')->name('create-blog');
//    Route::post('/create', 'BlogsController@store')->name('store-blog');
//    Route::get('/{id}', 'BlogsController@show')->name('show-blog');
//    Route::get('/{id}/edit', 'BlogsController@edit')->name('edit-blog');
//    Route::patch('/{id}', 'BlogsController@update')->name('update-blog');
//    Route::delete('/{id}', 'BlogsController@delete')->name('delete-blog');
//});
