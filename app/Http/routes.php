<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect('/upload');
})->name('home');

Route::get('/upload', function(){
    return view('upload');
});

Route::post('/upload/file', 'UploadController@uploadFile')->name('upload.file');
Route::post('/upload/result', 'UploadController@showResult')->name('show.result');
