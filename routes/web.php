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

Route::get('/project', function(){
	return view('project');
});

Route::get('/ajax', function(){
	return view('message');
});
Route::post('/getmsg', 'AjaxController@index');

Route::get('/project/{lang}', function($lang){
	App::setlocale($lang);
	return view('project');
});

Route::get('/signup', function(){
	return view('sign');
});

Route::get('/uploadfile', 'UploadFileController@index');
Route::post('uploadfile', 'UploadFileController@showUploadFile');

Route::get('mail/send', 'MailController@send');

//youtube video
Route::get('/youtube', function(){
	return view('index');
});

Route::post('/status', 'StatusController@postStatus')->middleware('auth')->name('status.accept');
