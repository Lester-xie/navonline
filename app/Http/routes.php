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

get('/', 'HomeController@home')->name('home');

//注册页面
get('signup', 'UsersController@create')->name('signup');

//登录页面
get('login', 'SessionController@create')->name('login');

//用户页面
//resource('users', 'UsersController');