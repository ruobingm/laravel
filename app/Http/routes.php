<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{name?}',function($name="m"){
   return 'username-'.$name;
});


//Route::get('member/info','MemberController@info');

//Route::any('member/info',[
//    'uses'=>'MemberController@info',
//    'as'=>'memberinfo'
//]);

Route::any('member/{id}',['uses'=>'MemberController@info'])->where('id','[0-9]+');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
