<?php

Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('register','AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
Route::get('/posts','PostController@index');
Route::get('/home', function () {
    return view('home');
})->middleware('jwt');
