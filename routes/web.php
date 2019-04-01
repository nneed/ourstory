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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::group(
    [
        'middleware' => ['auth'],
    ],
    function () {
        Route::get('/photos', 'PhotoController@index')->name('listPhotos');

        Route::post('/photos/edit', 'PhotoController@edit')->name('editPhotos');

        Route::get('/photos/create', 'PhotoController@formCreate')->name('createPhotos');

        Route::post('/photos/create', 'PhotoController@create')->name('editPhotos');

        Route::get('/photos/view', 'PhotoController@view')->name('viewPhotos');

        Route::delete('/photos/delete', 'PhotoController@delete')->name('deletePhotos');

        Route::post('/photos/publish', 'PhotoController@publish')->name('publishPhotos');

        Route::post('/photos/unpublish', 'PhotoController@unpublish')->name('unpublishPhotos');
    }
);
