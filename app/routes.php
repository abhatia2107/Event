<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});
Route::get('addevent', function()
{
	return View::make('createentry');
});
Route::get('support', function()
{
	return View::make('support');
});
Route::get('changePassword', function()
{
	return View::make('changePassword');
});
Route::get('message', function()
{
	return View::make('message');
});
Route::get('personal', function()
{
	return View::make('myaccount1');
});
Route::get('company', function()
{
	return View::make('company');
});
Route::get('eventlist',function()
{
	return View::make('eventlist');
});
Route::post('/add_details','EventController@add_details');
Route::get('/myevent','EventController@my_event');
Route::get('/editevent/{id}','EventController@edit_event');
Route::post('/addeditevent/{id}','EventController@add_edit_event');

Route::get('/updatepersonaldetail/{id}','UsersController@update_personal_detail');
Route::post('/addupdatepersonaldetail/{id}','UsersController@adPd_update_personal_detail');
Route::get('/signup','UsersController@sign_up');
Route::post('/addsignup','UsersController@add_signu_up');

