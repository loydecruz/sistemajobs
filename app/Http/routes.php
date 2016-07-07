<?php

Route::get('/', function () {
    return view('welcome');
});
// =========================== EXEMPLOS DO D'AVILA =============================
Route::get('home/index', 'HomeController@index');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('/', 'HomeController@home');
Route::get('/home', 'HomeController@home');

Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// ============================= SERVJOBS ======================================
