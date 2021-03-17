<?php

use Illuminate\Http\Request;

Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::get('users/{id}', 'UserController@user');
    Route::post('users', 'UserController@addUser');
});
