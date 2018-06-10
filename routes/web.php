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

Auth::routes();

Route::prefix('')->group(function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/apps', 'HomeController@apps')->name('apps');

    Route::get('/app/{slug}', 'HomeController@app')->name('app');
});

Route::middleware(['auth', 'isAdmin'])->group(function () {

    Route::prefix('backend')->namespace('Backend')->group(function () {

        Route::get('/', 'BackendController@index')->name('dashboard');

        Route::prefix('user')->group(function () {

            Route::get('/', 'UserController@index')->name('user.index');
            Route::get('create', 'UserController@create')->name('user.create');
            Route::post('store', 'UserController@store')->name('user.store');
            Route::get('edit/{id}', 'UserController@edit')->name('user.edit');
            Route::put('update/{id}', 'UserController@update')->name('user.update');
            Route::delete('delete/{id}', 'UserController@destroy')->name('user.delete');
        });

        Route::prefix('category')->group(function () {

            Route::get('/', 'CategoryController@index')->name('category.index');
            Route::get('create', 'CategoryController@create')->name('category.create');
            Route::post('store', 'CategoryController@store')->name('category.store');
            Route::get('edit/{id}', 'CategoryController@edit')->name('category.edit');
            Route::put('update/{id}', 'CategoryController@update')->name('category.update');
            Route::delete('delete/{id}', 'CategoryController@destroy')->name('category.delete');
        });

        Route::prefix('post')->group(function () {

            Route::get('/', 'PostController@index')->name('post.index');
            Route::get('create', 'PostController@create')->name('post.create');
            Route::post('store', 'PostController@store')->name('post.store');
            Route::get('edit/{id}', 'PostController@edit')->name('post.edit');
            Route::put('update/{id}', 'PostController@update')->name('post.update');
            Route::delete('delete/{id}', 'PostController@destroy')->name('post.delete');
        });
    });

});