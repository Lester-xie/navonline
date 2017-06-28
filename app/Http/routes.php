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

//登入、登出页面
get('login', 'SessionController@create')->name('login');
post('login', 'SessionController@store')->name('login');
delete('logout', 'SessionController@destroy')->name('logout');

//用户页面
resource('users', 'UsersController');

get('users/{id}/edit/profile','UsersController@profile')->name('users.edit.profile');
get('users/{id}/edit/message','UsersController@message')->name('users.edit.message');
get('users/{id}/edit/privacy','UsersController@privacy')->name('users.edit.privacy');

//消息推送请求
patch('users/{id}/edit/message/setting',"UsersController@messageSet");
//隐私设置请求
patch('users/{id}/edit/privacy/setting',"UsersController@privacySet");

get('adddata','HomeController@addData');

//获取万象图库的签名
get('getsign','HomeController@getSign');